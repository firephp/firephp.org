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

    
    <h1>Firebug Extension for AJAX Development</h1>

    <img src="/resources/images/FirePHP_Large_White.png" width="79" height="78" border="0">
    
    <p>Since 2007 FirePHP enables you to log to your <a href="http://www.getfirebug.com/" target="_blank">Firebug</a> <a target="_blank" href="http://getfirebug.com/logging.html">Console</a> using a simple PHP method call.</p>
    
    <p>All data is sent via response headers and will not interfere with the content on your page.</p>
    <p>FirePHP is ideally suited for AJAX development where clean JSON and XML responses are required.</p>

    <h2>Stable Downloads</h2>

    <ul>
        <li>Firefox 8+ &amp; <a href="http://getfirebug.com/downloads">Firebug 1.9+</a>
            <ul>
                <li><a href="https://addons.mozilla.org/en-US/firefox/addon/firephp/">Install FirePHP Extension 0.7.4 from Mozilla Add-ons</a>
        		(<a href="https://github.com/firephp/firephp-extension">Source</a>)
        		(<a href="https://github.com/firephp/firephp-extension/blob/master/extension/CHANGELOG.md">Changelog</a>)</li>
            </ul>
        </li>
        <li>FirePHPCore Server Library
            <ul>
                <li><a href="https://github.com/firephp/firephp-core/archive/v0.4.0.zip">Download FirePHPCore 0.4.0 (zip)</a>
                (<a href="https://github.com/firephp/firephp-core">Source</a>)
                (<a href="https://github.com/firephp/firephp-core/blob/master/CHANGELOG.md">Changelog</a>)
                </li>
            </ul>
        </li>
    </ul>

    <h2>Legacy Downloads</h2>

    <ul>
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


    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-1180396-1");
    pageTracker._initData();
    pageTracker._trackPageview('{/literal}{$Page.UrchinTrackerPageURI}{literal}');
    </script>

	</body>
</html>
