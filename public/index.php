<?php

require('_header.php');

?>
<html>
<head>
    <title>FirePHP - Firefox Devtools Extension for PHP Development</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="php, firefox, firebug, firephp, extension, ajax, javascript, zend framework, developer, development, debug, tool" />
    <meta name="description" content="Log from PHP to the Browser Console via HTTP Response Headers." />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <script>
        function installExtension (version) {
            if (typeof InstallTrigger !== "undefined") {
                var xpi = {};
                xpi['FirePHP ' + version] = 'archives/firephp-extension-' + version;
                InstallTrigger.install(xpi);
            } else {
                alert('You must be using Firefox to install FirePHP!');
            }
        }
    </script>
    <style>
        BODY {
            padding: 30px;
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
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Firefox Devtools Extension for PHP Development</h1>

    <img src="/resources/images/FirePHP_Large_White.png" width="79" height="78" border="0">

    <div class="preview">
        <img src="/resources/images/console-preview-small.jpg" width="400" height="356" border="0">
        <p><i>Install FirePHP & enable FirePHPCore Headers<br/>to see these messages in your devtools.</i></p>
    </div>

    <p>Log from PHP to Browser Developer Tools via HTTP Response Headers.</p>
    
    <h2>Supported Browsers</h2>

    <ul>
        <li><a href="https://addons.mozilla.org/en-US/firefox/addon/firephp/">Install Firefox Extension</a> & open Developer Tools. Click on <img class="tabicon" src="/resources/images/tab.png" width="83" height="31" border="0"></li>
    </ul>

    <p>&nbsp;</p>

    <h2>Supported Server Libraries</h2>

    <ul>
        <li><a href="https://github.com/firephp/firephp-core">FirePHPCore</a> - <code>composer require <a href="https://packagist.org/packages/firephp/firephp-core">firephp/firephp-core</a></code></li>
        <li><a href="https://github.com/ccampbell/chromelogger">Chrome Logger</a> - <code>composer require <a href="https://packagist.org/packages/ccampbell/chromephp">ccampbell/chromephp</a></code></li>
    </ul>

    <p>&nbsp;</p>
    
    <p><i>FirePHP is <a href="https://github.com/firephp/">Open Source with code on Github</a>.</i></p>

</body>
</html>
