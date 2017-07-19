FROM node

MAINTAINER Adiel Cristo <adielcristo@gmail.com>

# Install https for apt
RUN apt-get update && \
    apt-get install apt-transport-https

# Install yarn
RUN apt-get update && \
    curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - && \
    echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list && \
    apt-get update && apt-get install yarn

# Install gulp
RUN apt-get update && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* && \
    yarn global add gulp-cli

EXPOSE 3000

WORKDIR "/root/fastresume/frontend"
