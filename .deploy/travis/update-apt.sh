#!/usr/bin/env bash

. ".deploy/travis/init-script.sh"

echo "Installing https dependencies for apt..."

apt-get update
apt-get install apt-transport-https
