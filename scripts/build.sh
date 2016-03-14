#!/bin/bash -e
if [ -z "$HOME" ]; then
	echo "ERROR: 'HOME' environment variable is not set!"
	exit 1
fi
# Source https://github.com/bash-origin/bash.origin
. "$HOME/.bash.origin"
function init {
	eval BO_SELF_BASH_SOURCE="$BO_READ_SELF_BASH_SOURCE"
	BO_deriveSelfDir ___TMP___ "$BO_SELF_BASH_SOURCE"
	local __BO_DIR__="$___TMP___"

	BO_sourcePrototype "$__BO_DIR__/activate.sh"


	function Build {
        BO_format "$VERBOSE" "HEADER" "Build docker image ..."

		pushd "$__BO_DIR__/../docker" > /dev/null

		    docker build -t "$DOCKER_IMAGE_NAME" .

		popd > /dev/null

        BO_format "$VERBOSE" "FOOTER"
	}

    Build $@

}
init $@