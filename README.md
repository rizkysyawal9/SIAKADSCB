### Sistem Informasi Akademik Tingkat SMP 

Silahkan di download atau clone jika ingin dipake untuk kepentingan pribadi. Cara ngerun

1. Buat File .env baru (copas .env.example), lalu konfigurasi database sendiri jadi database local 

2. Buat key pribadi di .env file dengan jalanin kode ini di terminal
```
php artisan key:generate
```
3. Nyalakan Server Local Pribadi (XAMPP, LAMPP, MAMP, terserah)

4. Migrate Semua Database ke SQL dengan jalanin kode ini di terminal
```
php artisan migrate
```
5. Masukin data dummy ke dalam database dengan jalanin kode ini di terminal
```
php artisan db:seed
```
6. Download dependencies Node dengan jalanin kode ini di terminal (pastikan anda punya node.js di laptop anda)
```
npm install
```
7. Jalanin Vue Frontend dengan jalanin kode ini di terminal
```
npm run watch
```
8. Launch Website ini ke server local dengan jalanin kode ini di terminal 
```
php artisan serve
```
##### Happy Testing