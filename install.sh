#!/bin/bash -e
if [ -z "$HOME" ]; then
	echo "ERROR: 'HOME' environment variable is not set!"
	exit 1
fi
# Source https://github.com/bash-origin/bash.origin
if [ ! -e "$HOME/.bash.origin" ]; then
    nvm use 5 || nvm install 5
    npm install -g bash.origin
fi
. "$HOME/.bash.origin"
function init {
	eval BO_SELF_BASH_SOURCE="$BO_READ_SELF_BASH_SOURCE"
	BO_deriveSelfDir ___TMP___ "$BO_SELF_BASH_SOURCE"
	local __BO_DIR__="$___TMP___"


	function Install {
        BO_format "$VERBOSE" "HEADER" "Installing FirePHP Workspace ..."


        BO_log "$VERBOSE" "Detecting PHP ..."
        phpBasePath="/usr/local/php5"
        if [ ! -e "$phpBasePath" ]; then
            echo "No PHP install found!"
            exit 1
        fi
        BO_log "$VERBOSE" "Putting PHP bins on PATH ..."
        export PATH="${phpBasePath}/bin:$PATH"
        BO_log "$VERBOSE" "Detected PHP:"
        php -v


        BO_format "$VERBOSE" "FOOTER"
	}

    Install $@

}
init $@


function __DEPRECATED__Install {
    BO_format "$VERBOSE" "HEADER" "Installing FirePHP Workspace ..."


    if [ ! -e ".packages" ]; then
        mkdir ".packages"
    fi


    BO_log "$VERBOSE" "Ensuring Composer ..."
    pushd ".packages" > /dev/null
        if [ ! -e "composer.phar" ]; then
            BO_log "$VERBOSE" "Downloading Composer ..."
            curl -sS https://getcomposer.org/installer | php
        fi
    popd > /dev/null
    function composer {
        php -d xdebug.default_enable=0 -d xdebug.extended_info=0 $__BO_DIR__/.packages/composer.phar $@
    }


    pushd "website" > /dev/null
        if [ ! -e "vendor" ]; then
            BO_log "$VERBOSE" "Installing website ..."
            composer install
        fi
    popd  /dev/null

    
    BO_format "$VERBOSE" "FOOTER"
}
