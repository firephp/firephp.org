<?php require('_header.php'); ?>

<ul class="toc"></ul>

<p>The API described below belongs to the <a href="https://github.com/firephp/firephp-core">FirePHPCore</a> server library. FirePHPCore is just one server library that supports the <a href="/protocol.php">FirePHP Protocol</a>.
See <a href="/">Home</a> for a list of server libraries and protocols that the FirePHP client extension is compatible with. More libraries and framework integrations can be found with an internet search.</p>

<p>In order to log variables it is important that the <b>HTTP response headers have not yet been sent</b>.
To log variables at any point in your application it is typically necessary to enable output buffering using
<a href="https://www.php.net/manual/en/function.ob-start.php">ob_start()</a> or the
<a href="https://www.php.net/manual/en/outcontrol.configuration.php#ini.output-buffering">output_buffering ini directive</a>.</p>


<h2>Procedural</h2>

<p>Source code: <a href="https://github.com/firephp/firephp-core/blob/master/lib/FirePHPCore/fb.php">FirePHPCore/fb.php</a></p>

<h3>Setup</h3>

<pre class="code"><code class="language-php">require('FirePHPCore/fb.php');

// Disable by default
FB:setEnabled(false);

if (
    // TODO: Write these conditions yourself.
    $RunningInDevelopment ||
    $UserIsAuthorized
) {
    FB:setEnabled(true);
}</code></pre>

<h3>Log Variables</h3>

<p><i>TODO: Document API</i></p>

<pre class="code"><code class="language-php">fb('Hello World'); /* Defaults to FirePHP::LOG */

fb('Log message'  ,FirePHP::LOG);
fb('Info message' ,FirePHP::INFO);
fb('Warn message' ,FirePHP::WARN);
fb('Error message',FirePHP::ERROR);

fb('Message with label','Label',FirePHP::LOG);

fb(array('key1'=>'val1',
         'key2'=>array(array('v1','v2'),'v3')),
   'TestArray',FirePHP::LOG);

function test($Arg1) {
  throw new Exception('Test Exception');
}
try {
  test(array('Hello'=>'World'));
} catch(Exception $e) {
  /* Log exception including stack trace & variables */
  fb($e);
}

fb('Backtrace to here',FirePHP::TRACE);

fb(array('2 SQL queries took 0.06 seconds',array(
   array('SQL Statement','Time','Result'),
   array('SELECT * FROM Foo','0.02',array('row1','row2')),
   array('SELECT * FROM Bar','0.04',array('row1','row2'))
  )),FirePHP::TABLE);

/* Will show only in "Server" tab for the request */
fb(apache_request_headers(),'RequestHeaders',FirePHP::DUMP);</code></pre>

<h2>Object Oriented</h2>

<p>Source code: <a href="https://github.com/firephp/firephp-core/blob/master/lib/FirePHPCore/FirePHP.class.php">FirePHPCore/FirePHP.class.php</a></p>

<h3>Setup</h3>

<pre class="code"><code class="language-php">require('FirePHPCore/FirePHP.class.php');

$firephp = FirePHP::getInstance(true);

// Disable by default
$firephp->setEnabled(false);

if (
    // TODO: Write these conditions yourself.
    $RunningInDevelopment ||
    $UserIsAuthorized
) {
    $firephp->setEnabled(true);
}</code></pre>

<h3>Log Variables</h3>

<p><i>TODO: Document API</i></p>

<pre class="code"><code class="language-php">$firephp->fb('Hello World'); /* Defaults to FirePHP::LOG */

$firephp->fb('Log message'  ,FirePHP::LOG);
$firephp->fb('Info message' ,FirePHP::INFO);
$firephp->fb('Warn message' ,FirePHP::WARN);
$firephp->fb('Error message',FirePHP::ERROR);

$firephp->fb('Message with label','Label',FirePHP::LOG);

$firephp->fb(array('key1'=>'val1',
         'key2'=>array(array('v1','v2'),'v3')),
   'TestArray',FirePHP::LOG);

function test($Arg1) {
  throw new Exception('Test Exception');
}
try {
  test(array('Hello'=>'World'));
} catch(Exception $e) {
  /* Log exception including stack trace & variables */
  $firephp->fb($e);
}

$firephp->fb('Backtrace to here',FirePHP::TRACE);

$firephp->fb(array('2 SQL queries took 0.06 seconds',array(
   array('SQL Statement','Time','Result'),
   array('SELECT * FROM Foo','0.02',array('row1','row2')),
   array('SELECT * FROM Bar','0.04',array('row1','row2'))
  )),FirePHP::TABLE);

/* Will show only in "Server" tab for the request */
$firephp->fb(apache_request_headers(),'RequestHeaders',FirePHP::DUMP);</code></pre>

<?php require('_footer.php'); ?>
