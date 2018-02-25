#!/usr/bin/env bash

docker exec -it $(docker ps -qf name=supertest_php_1) bash
