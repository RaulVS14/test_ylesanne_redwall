# Redwalli test assignment

## Setup for static html files

### Install gulp-cli for running gulp command
```
npm install gulp-cli -g
```

### Install server
```
npm install live-server -g
```

## Setup for WordPress

Requirements for running: [docker-compose](https://docs.docker.com/compose/install/) installed

### Start environment
```
docker-compose -f docker-compose.yaml up
```

### Access
```
http://localhost:8082/wp-login.php
```
user:`admin`

password: `admin`
