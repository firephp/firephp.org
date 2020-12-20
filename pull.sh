#!/usr/bin/env bash

echo "Pulling latest image"

docker pull cadorn/firephp.org:latest

docker ps

containerId=$(docker ps --format="{{.ID}}")

echo "Existing container id: ${containerId}"

if [ ! -z "${containerId}" ]; then

    echo "Stopping existing container with id: ${containerId}"

    docker stop "${containerId}" || true

    docker ps
fi

echo "Starting new container"

docker run -d -p 8060:80 --restart=always "cadorn/firephp.org:latest"
# TODO: Enable SSH
# TODO: Mount data dir for logs

docker ps

echo "New container running"

url="http://localhost:8060/"

echo "Server running at: ${url}"

open "${url}"
