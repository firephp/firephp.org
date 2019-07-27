<?php

require('./vendor/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php');

$firephp = new FirePHP();


$firephp->fb('Hello World'); /* Defaults to FirePHP::LOG */
$firephp->fb('Log message'  ,FirePHP::LOG);
$firephp->fb('Info message' ,FirePHP::INFO);

$firephp->fb('Warn message' ,FirePHP::WARN);
$firephp->fb('Error message',FirePHP::ERROR);
$firephp->fb('Message with label','Label',FirePHP::LOG);

$arr = array(
    'key1'=>'val1',
    'key2'=>array(array('v1','v2'),'v3')
);

$firephp->fb($arr,'TestArray',FirePHP::LOG);


function test($Arg1) {
  throw new Exception('Test Exception');
}
try {
  test(array('Hello'=>'World'));
} catch(Exception $e) {
  // Log exception including stack trace & variables
  $firephp->fb($e);
}
$firephp->fb('Backtrace to here',FirePHP::TRACE);


$firephp->fb(array('2 SQL queries took 0.06 seconds',array(
    array('SQL Statement','Time','Result'),
    array('SELECT * FROM Foo','0.02',array('row1','row2')),
    array('SELECT * FROM Bar','0.04',array('row1','row2'))
)),FirePHP::TABLE);

$firephp->group('Group 1');
    $firephp->fb('Hello World');
    $firephp->group('Group 1');
        $firephp->fb('Hello World');
    $firephp->groupEnd();
$firephp->groupEnd();


class Foo {
    private $state = "loading";
}
$foo = new Foo();
$firephp->warn($foo, 'logged object');


// @see https://github.com/firephp/firephp/issues/16
$firephp->info("Что-то");
$firephp->info("Odómetro");


// For backwards compatibility
$firephp->fb(apache_request_headers(),'RequestHeaders', FirePHP::DUMP);



require('./vendor/ccampbell/chromephp/ChromePhp.php');

ChromePhp::log('Hello console from ChromePhp!');
ChromePhp::log(apache_request_headers());
ChromePhp::warn('something went wrong via ChromePhp!');
// TODO: Format these better in the console (do not use an array and just space delimit them)
ChromePhp::log('ChromePhp', 'Multiple', 'Arguments');

