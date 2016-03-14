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


	# @see https://docs.docker.com/machine/get-started/
	# docker-machine ls
	# docker-machine create --driver virtualbox default
	# eval "$(docker-machine env default)"

	docker-machine start default || true
	eval "$(docker-machine env default)"
	
	export DOCKER_IMAGE_NAME="cadorn/firephp.org"



}
init $@