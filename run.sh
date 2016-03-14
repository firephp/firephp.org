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

	BO_sourcePrototype "$__BO_DIR__/scripts/activate.sh"


	function Run {
        BO_format "$VERBOSE" "HEADER" "Running FirePHP Workspace ..."

    	BO_sourcePrototype "$__BO_DIR__/scripts/build.sh" $@

		pushd "$__BO_DIR__/docker" > /dev/null

			# @source http://stackoverflow.com/a/34899613/330439
			# TODO: Schedule call to run this when this script exits unless there is a flag to not exit.
			#       @insight on.stop -> {
			docker stop $(docker ps --filter ancestor="cadorn/firephp.org" --format="{{.ID}}") || true
			#       @insight on.stop -> }

		    docker run -d -p 2222:22 -e AUTHORIZED_KEYS="`cat ~/.ssh/id_rsa.pub`" -p 8000:80 "cadorn/firephp.org"
		    
		    function sync {
		        rsync -avh -e 'ssh -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -p 2222' --stats --progress "$1"/* "root@$(docker-machine ip default):$2/."
		    }
		    sync "$__BO_DIR__/lib" "/usr/share/php/lib"
		    sync "$__BO_DIR__/website" "/app"

    		# TODO: Only launch if not already open and only if --open is specified
    	    open http://$(docker-machine ip default):8000/

		popd > /dev/null

        BO_format "$VERBOSE" "FOOTER"
	}

    Run $@

}
init $@