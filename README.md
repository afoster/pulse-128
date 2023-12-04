Replication of issue described at https://github.com/laravel/pulse/issues/128

Steps:

 * `docker-compose up`
 * `docker-compose exec app composer install`
 * `docker-compose exec app php artisan migrate --seed`
 * `npm run dev`
 * Browse to http://localhost:9002 - should say OK
 * Browse to http://localhost:9002/pulse - will probably work initially. Click around a bit, maybe log in at http://localhost:9002/login with admin@example.com / `secret`; watch the app container logs. In my experience php-fpm children start crashing quickly and soon the app is inaccessible.
