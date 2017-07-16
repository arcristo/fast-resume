FROM node

MAINTAINER Adiel Cristo <adielcristo@gmail.com>

# Install build tools
RUN apt-get update && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* && \
    npm install --global gulp-cli && \
    npm install --save-dev gulp

EXPOSE 3000

WORKDIR "/root/fastresume/frontend"
