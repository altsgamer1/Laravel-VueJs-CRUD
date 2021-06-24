# TestWork12071803

## Back-end (laravel)

```
php -r "file_exists('.env') || copy('.env.example', '.env');"
composer install -q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist
php artisan key:generate
php artisan migrate
php artisan serve

```

## Front-end (vuejs)

```
npm install
npm run serve
```
