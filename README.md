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
install this extension is through [composer](http://getcomposer.org/download/).
```sh
composer install
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

