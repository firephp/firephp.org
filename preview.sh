#!/usr/bin/env bash.origin.script

depend {
    "process": "@com.github/bash-origin/bash.origin.process#s1"
}

if [ -z "$PORT" ]; then
    export PORT="$(CALL_process free_port)"
fi

export DOCKER_IMAGE_NAME="cadorn/firephp.org"


CALL_process run "PreviewFirePHPWebsite" {
    "build": {
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            depend {
                "docker": "@com.github/bash-origin/bash.origin.docker#s1"
            }

            pushd "public" > /dev/null

                #CALL_docker force_build . "${DOCKER_IMAGE_NAME}"

                CALL_docker build . "${DOCKER_IMAGE_NAME}"

            popd > /dev/null
        <<<)
    },
    "run": {
        "depends": [
            "build"
        ],
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            depend {
                "docker": "@com.github/bash-origin/bash.origin.docker#s1"
            }

            pushd "public" > /dev/null

                echo "Server running at: http://localhost:${PORT}/"

                CALL_docker run_no_tty "${DOCKER_IMAGE_NAME}:latest" "${PORT}"

            popd > /dev/null
        <<<),
        "routes": {
            "alive": {
                "uri": "/"
            }
        }
    },
    "browser": {
        "depends": [
            "run"
        ],
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            open "http://127.0.0.1:${PORT}/"

            # TODO: Launch latest FirePHP extension from source

        <<<)        
    }
}
