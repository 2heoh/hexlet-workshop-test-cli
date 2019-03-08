#!/bin/sh

./vendor/squizlabs/php_codesniffer/bin/phpcs --standard=PSR2 test/* src/* && ./vendor/phpunit/phpunit/phpunit ./test