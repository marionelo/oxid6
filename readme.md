Instructions OXID 6
-----

Here are the instructions to create our environment with oxid 6

* Clone the repo
* The execute sh bin/tocomplete 
* final change owner from html folder to www-data

```sh
    sh bin/tocomplete
    sudo chown -R www-data html
```

if for some reaseon when you execute `sh bin/tocomplete` fails, you can complete all operations one by one.

```sh
    docker-compose cp oxid.sql db:/oxid.sql
```

```sh
    docker-compose exec db bash -c "mysql -uroot -proot oxid < ./oxid.sql"
```

```sh
    docker-compose exec server bash -c "composer install && mkdir source/tmp && chmod -R 777 source/tmp"
```

the credentials to test, please told to your team lead.

Finally you can enter to you site using

http://localhost:3000