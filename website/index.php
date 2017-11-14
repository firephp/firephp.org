<?php

require('_header.php');

?>
<html>
<head>
    <title>FirePHP - Firebug Extension for AJAX Development</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="php, firefox, firebug, firephp, extension, ajax, javascript, zend framework, developer, development, debug, tool" />
    <meta name="description" content="FirePHP enables you to print to your Firebug Console using a simple PHP function call." />
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
</head>

<body>

    <h1>Firefox Developer Tools Web Extension for PHP Development</h1>

    <img src="/resources/images/FirePHP_Large_White.png" width="79" height="78" border="0">

    <p>Since 2007 FirePHP enables you to log to your <b>Browser Console</b> using a simple PHP method call.</p>
    
    <p>All data is sent via HTTP headers and will not interfere with the content on your page.</p>
    <p>FirePHP is ideally suited for AJAX development where clean JSON and XML responses are required.</p>

    <h2>Stable Downloads</h2>

    <ul>
        <li>Firefox Web Extension</a>
            <ul>
                <li><a href="https://addons.mozilla.org/en-US/firefox/addon/firephp/">Install FirePHP Extension from Mozilla Add-ons</a>
        		(<a href="https://github.com/firephp/firephp-for-firefox-devtools">Source on Github</a>)
                (<a href="https://github.com/firephp/firephp-for-firefox-devtools/wiki">Changelog</a>)
            </ul>
        </li>
        <li>FirePHPCore Server Library
            <ul>
                <li><a href="https://github.com/firephp/firephp-core/archive/v0.4.0.zip">Download FirePHPCore 0.4.0 (zip)</a>
                (<a href="https://github.com/firephp/firephp-core">Source</a>)
                (<a href="https://github.com/firephp/firephp-core/wiki">Changelog</a>)
                </li>
                <li><code>composer require firephp/firephp-core</code> (<a href="https://packagist.org/packages/firephp/firephp-core">packagist.org</a>)</li>
            </ul>
        </li>
    </ul>

    <h2>Legacy Downloads</h2>

    <ul>
        <li>Firefox 8+ &amp; <a href="http://getfirebug.com/downloads">Firebug 1.9+</a>
            <ul>
                <li><a href="javascript:installExtension('0.7.4-fx');">Install FirePHP Extension 0.7.4-fx</a></li>
            </ul>
        </li>
        <li>Firefox 5+ &amp; <a href="http://getfirebug.com/downloads">Firebug 1.8</a>
            <ul>
                <li><a href="javascript:installExtension('0.6.2');">Install FirePHP Extension 0.6.2</a></li>
            </ul>
        </li>
        <li>Firefox 3.6+ &amp; <a href="http://getfirebug.com/downloads">Firebug 1.7</a>
            <ul>
                <li><a href="javascript:installExtension('0.5.0');">Install FirePHP Extension 0.5.0</a></li>
            </ul>
        </li>
    </ul>
    
    <hr>
    
    <p>The source code for this site can be found at <a href="https://github.com/firephp/firephp.org">github.com/firephp/firephp.org</a>.</p>

	</body>
</html>
