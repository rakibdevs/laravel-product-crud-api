# Laravel CRUD API with JWT Auth
Laravel product CEUD API with JWT auth using repository pattern.

## Initial Setup
```
git clone https://github.com/rakibdevs/laravel-product-crud-api.git
cd laravel-product-api
cp .env.example .env
composer update
php artisan migrate:refresh --seed
php artisan serve
```

### Dummy Credentials for user:
email: test@example.com
password: 123456

## API Documentation
Postman API Documentation: https://documenter.getpostman.com/view/11223504/Tz5jffsv

1. Login with given credentials or you can register
2. Set bearer token as Authorization header
3. Hit API

Test on postman,
<img src="https://github.com/RakibDevs/laravel-product-crud-api/blob/master/public/postman%20api.jpg">
