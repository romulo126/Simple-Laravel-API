### requirement
[DOCKER](https://docs.docker.com/desktop/install/windows-install/)

[DOCKER COMPOSE](https://docs.docker.com/compose/install/)

### RUN

``` docker-compose up -d --build ```

``` docker exec -u 0 -t laravel_docker php artisan migrate ```
``` docker exec -u 0 -t laravel_docker npm run dev ```
``` docker exec -u 0 -t laravel_docker php artisan passport:install ```
``` docker exec -u 0 -t laravel_docker php artisan --force passport:keys ```