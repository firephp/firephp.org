#!/usr/bin/env bash.origin.script

depend {
    "process": "@com.github/bash-origin/bash.origin.process#s1"
}

if [ -z "$PORT" ]; then
    export PORT="$(CALL_process free_port)"
fi


CALL_process run "FirePHPWebsite" {
    "composer": {
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            depend {
                "php": "@com.github/bash-origin/bash.origin.php#s1"
            }

            pushd "public" > /dev/null
                CALL_php composer install
            popd > /dev/null
        <<<)
    },
    "php": {
        "depends": [
            "composer"
        ],
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            depend {
                "php": "@com.github/bash-origin/bash.origin.php#s1"
            }

            pushd "public" > /dev/null
                CALL_php run ${PORT}
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
            "php"
        ],
        "run": (bash () >>>
            #!/usr/bin/env bash.origin.script

            open "http://127.0.0.1:${PORT}/"

        <<<)        
    }
}
