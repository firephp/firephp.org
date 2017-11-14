**Status: DEV**

firephp.org
===========

This project provides the **FirePHP development workspace and website** which feeds
[firephp.org](http://firephp.org) and other release channels.

**NOTE:** You do not need to install this project to use FirePHP. See: [firephp.org](http://firephp.org/)


Base Requirements
-----------------

  * macOS (will also eventually work on windows)
  * Docker
  * [nvm](https://github.com/creationix/nvm)

Install
-------

    git clone https://github.com/firephp/firephp.org.git firephp.org
    cd firephp.org
    ./install.sh

Run
---

    ./run.sh

Links
=====

  * https://github.com/tutumcloud/apache-php - Base docker image to run PHP applications on Apache
  * https://github.com/tutumcloud/tutum-ubuntu - Simple Ubuntu docker images with SSH access

Provenance
==========

Original source logic under [Free Public License](https://opensource.org/licenses/FPL-1.0.0) by [Christoph Dorn](http://christophdorn.com) since 2007.

```
Free Public License 1.0.0

Permission to use, copy, modify, and/or distribute this software for any purpose with or 
without fee is hereby granted.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH REGARD TO 
THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT 
SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR 
ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION 
OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE 
USE OR PERFORMANCE OF THIS SOFTWARE.
```

> Well-crafted Contributions are Welcome.

**INTENDED USE:** The *Logic and Code contained within* forms a **Developer Tool** and is intended to operate as part of a *Web Software Development Toolchain* on which a *Production System* operates indirectly. It is **NOT INTENDED FOR USE IN HIGH-LOAD ENVIRONMENTS** as there is *little focus on Runtime Optimization* in order to *maximize API Utility, Compatibility and Flexibility*.

If you *need more* than what is contained within, study the Code, understand the Logic, and build your *Own Implementation* that is *API Compatible*. Share it with others who follow the same *Logic* and *API Contract* specified within. This Community of Users will likely want to use Your Work in their own *Software Development Toolchains*.
