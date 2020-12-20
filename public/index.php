<?php require('_header.php'); ?>

<div class="preview">
    <img src="/resources/images/console-preview-small.jpg" width="400" height="356" border="0">
</div>

<p>Log from PHP to Browser Developer Tools via HTTP Response Headers.</p>

<h2>Supported Browsers</h2>

<p>For <b>local installation</b> and <b>support</b> see: <a href="https://github.com/firephp/firephp-for-browser-devtools">github.com/firephp/firephp-for-browser-devtools</a></p>

<p>Remote installation:</p>

<ul>
    <li>
        <b>Mozilla Firefox <span class="smaller">(&gt;= 56.0.2)</span></b><br/>
        <b><a href="https://addons.mozilla.org/en-US/firefox/addon/firephp/">Install Extension</a></b> & open Developer Tools. Click on <img class="tabicon" src="/resources/images/tab.png" height="31" border="0">
    </li>
    <li>
        <b>Google Chrome <span class="smaller">(&gt;= 75)</span></b><br/>
        <b><a href="https://chrome.google.com/webstore/detail/firephp/ikfbpappjhegehjflebknjbhdocbgkdi">Install Extension</a></b> & open Developer Tools. Click on <img class="tabicon" src="/resources/images/tab2.png" height="31" border="0">
    </li>
    <li>
        <b>Brave <span class="smaller">(&gt;= 0.64)</span></b><br/>
        <b><a href="https://chrome.google.com/webstore/detail/firephp/ikfbpappjhegehjflebknjbhdocbgkdi">Install Extension</a></b> & open Developer Tools. Click on <img class="tabicon" src="/resources/images/tab2.png" height="31" border="0">
    </li>
</ul>

<h2>Documentation</h2>

<ul>
    <li><a href="quickstart.php">Quickstart</a></li>
    <li><a href="api.php">API</a></li>
</ul>

<h2>Supported Protocols</h2>

<ul>
    <li>FirePHP (Wildfire based)</li>
    <li><a href="https://craig.is/writing/chrome-logger/techspecs">Chrome Logger</a></li>
</ul>

<h2>Supported Server Libraries</h2>

<p>There are also many framework plugins out there.</p>

<ul>
    <li><span class="language">PHP</span> <a href="https://github.com/firephp/firephp-core">FirePHPCore</a> - <b>FirePHP protocol reference implementation</b> - <code>composer require <a href="https://packagist.org/packages/firephp/firephp-core">firephp/firephp-core</a></code></li>
    <li><span class="language">PHP</span> <a href="https://github.com/ccampbell/chromelogger">Chrome Logger</a> - <b>Chrome Logger protocol reference implementation</b> - <code>composer require <a href="https://packagist.org/packages/ccampbell/chromephp">ccampbell/chromephp</a></code></li>
    <li><span class="language">C</span> <a href="https://github.com/lovesyx2012/FirePHP">github.com/lovesyx2012/FirePHP</a> - FirePHP protocol implementation as a Zend PHP Extension</li>
    <li><span class="language">C</span> <a href="https://github.com/xudianyang/firephp">github.com/xudianyang/firephp</a> - FirePHP protocol implementation as a Zend PHP Extension</li>
    <li><span class="language">Java</span> <a href="https://github.com/theone1984/FireP4j">github.com/theone1984/FireP4j</a> - FirePHP protocol implementation</li>
    <li><span class="language">Java</span> <a href="https://code.google.com/archive/p/chromelogger4j/">code.google.com/archive/p/chromelogger4j</a> - Chrome Logger protocol implementation</li>
    <li><span class="language">Ruby</span> <a href="https://github.com/smith/firephp_rails">github.com/smith/firephp_rails</a> - FirePHP protocol implementation and Rails plugin</li>
    <li><span class="language">Ruby</span> <a href="https://github.com/bluedeep/railswithfirephp">github.com/bluedeep/railswithfirephp</a> - FirePHP protocol implementation and Rails plugin</li>
    <li><span class="language">Ruby</span> <a href="https://github.com/cookrn/chrome_logger">github.com/cookrn/chrome_logger</a> - Chrome Logger protocol implementation as a Rack middleware</li>
    <li><span class="language">Python</span> <a href="https://github.com/schmidsi/firepy">github.com/schmidsi/firepy</a> - FirePHP protocol implementation and Django extension</li>
    <li><span class="language">Python</span> <a href="https://github.com/ccampbell/chromelogger-python">github.com/ccampbell/chromelogger-python</a> - Chrome Logger protocol implementation</li>
    <li><span class="language">Perl</span> <a href="https://github.com/willert/firephp-perl">github.com/willert/firephp-perl</a> - FirePHP protocol implementation</li>
    <li><span class="language">Perl</span> <a href="https://metacpan.org/pod/Web::ChromeLogger">metacpan.org/pod/Web::ChromeLogger</a> - Chrome Logger protocol implementation</li>
    <li><span class="language">Common Lisp</span> <a href="https://github.com/html/firephp">github.com/html/firephp</a> - FirePHP protocol implementation</li>
    <li><span class="language">Node.js</span> <a href="https://github.com/yannickcr/node-chromelogger">github.com/yannickcr/node-chromelogger</a> - Chrome Logger protocol implementation</li>
    <li><span class="language">Node.js</span> <a href="https://github.com/olahol/express-chrome-logger">github.com/olahol/express-chrome-logger</a> - Chrome Logger protocol implementation as a Express middleware</li>
    <li><span class="language">Go</span> <a href="https://github.com/gravityblast/traffic-chromelogger">github.com/gravityblast/traffic-chromelogger</a> - Chrome Logger protocol implementation as a Traffic middleware</li>
    <li><span class="language">.NET</span> <a href="https://github.com/ChrisMissal/chromelogger">github.com/ChrisMissal/chromelogger</a> - Chrome Logger protocol implementation</li>
    <li><span class="language">ColdFusion</span> <a href="https://github.com/s992/chromelogger-cf">github.com/s992/chromelogger-cf</a> - Chrome Logger protocol implementation</li>
    <li><span class="language">Classic ASP</span> <a href="https://github.com/dmeagor/ClassicASP-FirePHP">github.com/dmeagor/ClassicASP-FirePHP</a> - FirePHP protocol implementation</li>        
    <li><span class="language">Classic ASP</span> <a href="https://github.com/veritech/FireASP">github.com/veritech/FireASP</a> - FirePHP protocol implementation</li>
    <li><span class="language">Classic ASP</span> <a href="https://github.com/danielmarcoto/asp2console">github.com/danielmarcoto/asp2console</a> - Chrome Logger protocol implementation</li>
</ul>

<?php require('_footer.php'); ?>
