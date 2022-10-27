# Komunitas

## 💁‍♀️ Tutorial

1. Fork repository ini
2. Duplikat file .env.example menjadi .env
```
copy .env.example .env
```
3. Jalankan composer install
```
composer install
```
4. Generate app key
```
php artisan key:generate
```
5. Jalankan migration beserta seedernya
```
php artisan migrate --seed
```
6. Jalankan app
```
php artisan serve
```
