#!/usr/bin/env bash

# Install yarn
curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
sudo apt-get update && sudo apt-get install yarn
echo "export PATH=\"$PATH:$HOME/.yarn/bin\"" >> ~/.profile

# Check version
~/.yarn/bin/yarn --version
