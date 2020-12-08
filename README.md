# phpUnitTestingSample
phpunit sample test

![PHPUNIT_Testing](https://github.com/pratheeshrussell1992/phpUnitTestingSample/workflows/PHPUNIT_Testing/badge.svg)

To run the tests first run  
composer install  

You can run the test with one of the following commands

vendor/bin/phpunit  
Will Run all the tests  
 
vendor/bin/phpunit --filter testAddSuccess  
Will run only the method testAddSuccess

vendor/bin/phpunit --testsuite calcTest  
Will run the testsuite calcTest (refer phpunit.xml) you can combine it with filter command also  

Refer https://phpunit.readthedocs.io/en/9.3/assertions.html for other assertions
