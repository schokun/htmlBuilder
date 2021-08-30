# Процесс развертывания сервера

- создать папку `code` в домашней директории;
- в папкy `code` клонировать репозиторий 

```bash
git clone https://github.com/pavhont/docker-mysql.git
```

- для запуска контейнеров в папке `docker-mysql` выполнить команду 

```bash
docker-compose up -d
```

### Доступы

http://localhost:8000/ - phpinfo
http://localhost:8001/ - phpmyadmin (Доступы: root | 1234 , test | 1234 )
