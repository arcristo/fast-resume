#!/usr/bin/env bash

. "./init-script.sh"

echo "Checking environment for ${project_name^^} project..."

env_checks=true

declare -a env_vars=(
    #env
    "${project_name^^}_DEPLOY_ENV"

    # symfony
    "SYMFONY_ENV"
)

for i in "${env_vars[@]}"
do
    if [ -z ${!i} ]
    then
        echo "Variable ${i} unset."
        env_checks=false
    fi
done

if [ "$env_checks" = false ]; then
    echo "Errors were found. Aborting..."
    exit 1
fi

echo "Environment for ${project_name^^} project checked."
