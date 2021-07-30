#!/usr/bin/env bash
docker-compose down && docker-compose build --parallel && docker-compose up --force-recreate