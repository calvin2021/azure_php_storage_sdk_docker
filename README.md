# azuer_php_sdk_docker

This is a sample for uploading the file to azure blob which is based on azure storage sdk.

# step:
#### 1.modify the blob user name and key in docker-composer.yml
#### 2.run command
```
docker-compose up -d
```
#### 3.login docker
#### 4.run command
```
composer install
```
#### 5.modify the blob container name in the file samples/lytech.php

```
$container = '<container name>';
```

#### 6.exec the program
```
php samples/lytech.php
```