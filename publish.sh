#!/usr/bin/env bash.origin.script

depend {
    "process": "@com.github/bash-origin/bash.origin.process#s1"
}

export DOCKER_IMAGE_NAME="cadorn/firephp.org"


CALL_process run "PublishFirePHPWebsite" {
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
    "push": {
        "depends": [
            "build"
        ],
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            pushd "public" > /dev/null

                docker login

                docker push "${DOCKER_IMAGE_NAME}:latest"

                echo "Pushed OK"

            popd > /dev/null
        <<<)
    },
    "pull": {
        "depends": [
            "push"
        ],
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            if [ -z "$CADORN_FIREPHP_ORG_SERVER_IP" ]; then
                echo "ERROR: 'CADORN_FIREPHP_ORG_SERVER_IP' environment variable not set!"
                exit 1
            fi

            cat pull.sh | ssh root@${CADORN_FIREPHP_ORG_SERVER_IP} -T "cat > /pull.sh"

            ssh root@${CADORN_FIREPHP_ORG_SERVER_IP} "chmod u+x /pull.sh && /pull.sh"

            echo "Pulled OK"
        <<<)
    }
}
