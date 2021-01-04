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

?>

<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DMQ5FBHRBG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-DMQ5FBHRBG');
    </script>

    <title>FirePHP - Devtools Extension for PHP Development</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="php, firefox, chrome, devtools, firebug, firephp, extension, ajax, javascript, zend framework, developer, development, debug, tool" />
    <meta name="description" content="Log from PHP to Browser Developer Tools via HTTP Response Headers." />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <style>
        HTML {
          text-align: center;
        }
        BODY {
            display: inline-block;
            text-align: left;
            padding: 30px;
            font-family: "Roboto",sans-serif;
            line-height: 150%;
            width: 90%;
            max-width: 1000px;
        }
        IMG.tabicon {
            position: relative;
            top: 10px;
        }
        DIV.preview {
            margin-top: 20px;
            float: right;
            font-size: 90%;
            color: #5c5c5c;
            text-align: right;
        }
        UL > LI {
            margin-bottom: 15px;
        }
        .smaller {
            font-size: 90%;
            color: #5c5c5c;
        }
        SPAN.language {
            background-color: #dfdfdf;
            border-radius: 5px;
            padding: 3px;
            padding-left: 5px;
            padding-right: 5px;
            margin-right: 5px;
        }
        H2 A.active {
          border-top: 2px solid black;
          border-bottom: 2px solid black;
          color: black;
          text-decoration: none;
        }
        H2.menu {
          margin-bottom: 40px;
        }
        DIV.edit-link-banner {
          float: right;
          position: relative;
          top: -20px;
          font-size: 0.9em;
          color: #9a9a9a;
        }
        UL.toc {
          margin-bottom: 40px;
        }
        UL.toc > LI {
          margin-bottom: 5px;
        }
        OL {
          padding-inline-start: 60px;
        }
        PRE.code {
          width: 100%;
          max-width: 700px;
          border: 1px solid #bcbcbc;
        }
        PRE.code > CODE.hljs {
          padding: 10px;
        }
        P.highlight {
          color: #920000;
          font-weight: bold;
        }
        DIV.banner {
          font-size: 1.5em;
          font-weight: bold;
          color: #4F5B93;
          display: inline-block;
          margin-bottom: 20px;
        }
        BLOCKQUOTE.warning {
          border: 1px solid #920000;
          padding: 10px;
          color: #920000;
          font-weight: bold;
          background-color: #ffdcdc;
        }
        IMG.screenshot {
          border: 1px solid #bcbcbc;
          max-width: 100%;
          height: auto;
        }
        IMG.screenshot.small {
          max-width: 100%;
          max-height: 350px;
          height: auto;
          cursor: pointer;
        }
        IMG.screenshot.large {
          border: 2px solid black;
          max-width: 1500px;
          height: auto;
        }
    </style>
</head>

<body>

    <h1>FirePHP &nbsp; <span class="smaller">Cross-Browser Devtools Extension for PHP Development</span></h1>
    <a href="/"><img src="/resources/images/FirePHP_Large_White.png" width="128" height="128" border="0"></a>

    <h2 class="menu">
        <a href="/">Home</a> | <a href="/quickstart.php">Quickstart</a> | <a href="/api.php">API</a> | <a href="/protocol.php">Protocol</a>
    </h2>
    <div class="edit-link-banner"><a href="https://github.com/firephp/firephp.org/blob/master/public/quickstart.php">Edit</a> this page</div>
    <script>
        document.querySelectorAll("H2.menu A").forEach(function (el) {
          if (el.getAttribute("href") === window.location.pathname) {
            el.classList.add("active");
            if (window.location.pathname !== '/') {
              var titleEl = document.querySelector("TITLE");
              titleEl.innerHTML = titleEl.innerHTML.replace(/^([^-]+ - ).*$/, '$1' + el.innerHTML);
            }
          }      
        });
    </script>
