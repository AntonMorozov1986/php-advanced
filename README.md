# php-advanced
Learning php. Advanced level

## Запуск окружения разработки
Для запуска окружения вам потребуются актуальные версии Docker и Docker-composer. Инструкции по установке вы можете найти на офф сайте.

После установки Docker и Docker-composer откройте терминал и перейдите в папку с проектом. Для запуска требуется, чтобы порт 80 на localhost был свободен.
Выполните команду:
```shell
docker-compose up
```

Войдите в контейнер используя команду
```shell
docker exec -it $(docker ps -f name=php-advanced_php_ -q) bash
```

Внутри контейнера перейдите в папку "/app"
```shell
cd /app
```

Выполните команду composer install
```shell
composer install
```

Подключите autoload
```shell
composer dump-autoload -o
```



Выйдите из контейнера
```shell
exit
```


После запуска контейнеров проект будет доступен по адресу - http://127.0.0.1:8099

Для остановки контейнеров нажмите `CTRL + C` или закройте терминал.
