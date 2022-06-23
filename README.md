Test for Yii2 PHP Developer
====================
Test for Yii2 PHP Developer

Installation
------------
The preferred way to install this extension is through Docker
Either run

```sh
docker compose up -d
```

to the require section of your `docker-composer.json` file.

After it enter to docker container

```sh
docker exec -it frontend_contaner bash
```

After in
set up [0] Development environment
```sh
php init
```

install this extension is through [composer](http://getcomposer.org/download/).
```sh
composer install
```

set up yii2 mysql connect
```sh
docker inspect project-mysql-1 (IPAddress)

mysql environment:
      - MYSQL_ROOT_PASSWORD=verysecret
      - MYSQL_DATABASE=yii2advanced
      - MYSQL_USER=yii2advanced
      - MYSQL_PASSWORD=secret
from docker-compose.yml      

/app/common/main-local.php
```

And just run the command:
```sh
php yii migrate
```

Add fixtures:
```sh
php yii fixture "*"
```

Add admin user and set up admin RBAC role:
```sh
yii faker/add-admin admin admin@admin.com

yii faker/assign admin@admin.com admin
```

Usage
-----
frontend on 127.0.0.1:20080 port
backend on 127.0.0.1:21080 port

in table auth_item_child add "operator banner" 
manual or through backend admin panel

