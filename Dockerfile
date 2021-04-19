FROM primehub/php-nginx-development

RUN apt-get update
RUN apt-get -y install curl gnupg
RUN curl -sL https://deb.nodesource.com/setup_11.x  | bash -
RUN apt-get -y install nodejs
DB_PORT=3306
DB_DATABASE=training
DB_USERNAME=training
DB_PASSWORD=Training@12345

DOCKER_APP_PORT=80
