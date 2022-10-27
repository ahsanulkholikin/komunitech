# Komunitas

## 💁‍♀️ Tutorial

1. clone repository ini
```
git clone https://github.com/luthfeew/komunitech && cd komunitech
```
2. duplikat file .env.example menjadi .env
```
copy .env.example .env
```
3. jalankan composer install
```
composer install
```
4. generate app key
```
php artisan key:generate
```
5. buat database `komunitas` lalu jalankan migration beserta seedernya
```
php artisan migrate --seed
```
6. jalankan app
```
php artisan serve
```
