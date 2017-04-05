#!/bin/bash
##This bash file is used to install phpunit on your local conputer
if [ ! -f /usr/local/bin/phpunit ]; then
    chmod +x phpunit-6.0.13.phar
    sudo cp phpunit-6.0.13.phar /usr/local/bin/phpunit
fi