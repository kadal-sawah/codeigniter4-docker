## Without Docker Image for CodeIgniter4 development

Copy folder codeigniter4 keluar yang berada di localfolder/www/
copy file env -> .env

isi .env

CI_ENVIRONMENT = development

app.baseURL = 'http://localhost/'

database.default.hostname = localhost
database.default.database = dhealth
database.default.username = root
database.default.password = 'sesuaikan_password'
database.default.DBDriver = MySQLi
database.default.DBPrefix =

run php spark serve 
run php spark migrate
run php spark db:seed Obat
run php spark db:seed Alkes
run php spark db:seed Signa

## Using Docker Image for CodeIgniter4 development
[![Docker Build Status](https://img.shields.io/docker/cloud/build/atsanna/codeigniter4?style=for-the-badge)](https://hub.docker.com/r/atsanna/codeigniter4/)
[![Docker Image Version (tag latest semver)](https://img.shields.io/docker/v/atsanna/codeigniter4/v4.1.8?style=for-the-badge)](https://hub.docker.com/r/atsanna/codeigniter4/)
![Docker Pulls](https://img.shields.io/docker/pulls/atsanna/codeigniter4?style=for-the-badge)

This repository provides you a development environment without requiring you to install PHP, a web server, and any other server software on your local machine. For this, it requires Docker and Docker Compose.

Basic example to create your container (tested on Ubuntu 20.04 - Docker version 20.10.11, build dea9396 - docker-compose version 1.25.0 ):

**NOTE: This package is under early development and is not ready for prime-time.**

## Build Image

create this structure:
```
codeigniter/
    - conf/apache.conf
    - Dockerfile
    - startScript.sh
```

Go to the codeigniter folder:
```
cd codeigniter
```

build the image:<br>
```
docker build . -t codeigniter:4.1.8
```

start the container:
```
docker container run -it --publish 80:80 --name ci4 -v /localfolder:/var/www/html codeigniter:4.1.8
```

## Build image with PHP 7.4
```
docker build -f Dockerfile-php7.4 -t codeigniter:4.1.8 .
```

## Build image with PHP 8.0
```
docker build -f Dockerfile-php8.0 -t codeigniter:4.1.8 .
```

## Installation

1. Install [docker](https://docs.docker.com/engine/installation/) and [docker-compose](https://docs.docker.com/compose/install/) ;

2. Copy `docker-compose.yml` file to your project root path, and edit it according to your needs ;

3. Uncomment, in the `docker-compose.yml` file, the image you want to use it ;

4. From your project directory, start up your application by running:

```sh
docker-compose up -d
```

4. From your project directory, stop your application by running:

```sh
docker-compose down --volumes
```

## Contributing

Contributions are welcome!
Leave an issue on Github, or create a Pull Request.


## Licence

This work is under [MIT](LICENSE) licence.
