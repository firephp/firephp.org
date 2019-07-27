#!/usr/bin/env bash

echo "Pulling latest"

docker pull cadorn/firephp.org:latest

docker ps

containerId=$(docker ps --filter ancestor="cadorn/firephp.org" | tail -n1 | cut -d " " -f1)

echo "Existing container id2: ${containerId}"

if [ ! -z "${containerId}" ]; then

    echo "Stopping container"

    docker stop "${containerId}" || true

    docker ps
fi

echo "Starting container"

docker run -d -p 80:80 --restart=always "cadorn/firephp.org:latest"
# TODO: Enable SSH
# TODO: Mount data dir for logs

docker ps

echo "Container running"
