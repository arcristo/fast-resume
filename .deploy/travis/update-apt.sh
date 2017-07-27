#!/usr/bin/env bash

. ".deploy/travis/init-script.sh"

echo "Installing https dependencies for apt..."

sudo apt-get update
sudo apt-get install apt-transport-https
