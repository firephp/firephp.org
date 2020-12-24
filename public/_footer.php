
    <p>&nbsp;</p>
    
    <p>
        <i>FirePHP is <a href="https://github.com/firephp/">Open Source with code on Github</a>.</i><br/>
        This demo website is available via <a href="https://hub.docker.com/r/cadorn/firephp.org/">dockerhub</a> (<a href="https://github.com/firephp/firephp.org/tree/master/public">source</a>).
    </p>

    <script>
        document.querySelectorAll('IMG.screenshot.small').forEach(function (imgEl) {
            imgEl._enlarged = false;
            imgEl.addEventListener('click', function (event) {
                imgEl._enlarged = !imgEl._enlarged;
                if (imgEl._enlarged) {
                    imgEl.classList.remove('small');
                    imgEl.classList.add('large');
                } else {
                    imgEl.classList.add('small');
                    imgEl.classList.remove('large');
                }
            });
        });

        var ulEl = document.querySelector('UL.toc');
        if (ulEl) {
            document.querySelectorAll('H2').forEach(function (h2El) {

                if (h2El.classList.contains('menu')) {
                    return;
                }

                const anchorEl = document.createElement('A');
                anchorEl.setAttribute('name', h2El.innerHTML);
                h2El.parentNode.insertBefore(anchorEl, h2El);

                const linkEl = document.createElement('A');
                linkEl.setAttribute('href', '#' + h2El.innerHTML);
                linkEl.innerHTML = h2El.innerHTML;
                const liEl = document.createElement('li');
                liEl.appendChild(linkEl);
                ulEl.appendChild(liEl);
            });
        }

    </script>

    <link rel="stylesheet" href="/resources/highlight.js/styles/atom-one-light.css">
    <script src="/resources/highlight.js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</body>
</html>
