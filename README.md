# Todo App Test Energeek

Aplikasi Todo sederhana yang memungkinkan pengguna untuk mengelola tugas-tugas mereka dengan mudah. Fitur utama menambahkan Multiple todo by user.

## Fitur

-   _Menambahkan Todo:_ Tambah Todo baru dengan judul, kategori. Dengan sekaligus menambahkan user dengan menginputkan nama, username, email.

## Teknologi

-   _Backend:_ Laravel (PHP)
-   _Frontend:_ Blade Templates, Bootstrap
-   _JavaScript:_ Vanilla JS

## Instalasi

1. _Clone Repository_

    Install composer

    git clone https://github.com/deniyudi/energeek-test.git
   
    cd <the-app>

3. _Instal Dependensi_

    composer install
    npm install

4. _Konfigurasi Environment_  
   Salin file .env.example menjadi .env dan sesuaikan konfigurasi sesuai kebutuhan:

    cp .env.example .env

    Kemudian, generate kunci aplikasi:

    php artisan key:generate

    Buat database dan update configurasi

5. _Migrasi Database_
   Jalankan migrasi untuk membuat tabel yang diperlukan di database:
    php artisan migrate
6. _Jalankan Seeder_

    php artisan db:seed

7. _Jalankan Aplikasi_

    php artisan serve, 
    npm run dev

8. _ENJOY_

## Dokumentasi Postman

_Access file dibawah ini untuk menggunakan API pada postman_

URL api document = *[ public\dokumentasi_postman\Energeek - Test.postman_collection.json ]*

## Kontributor

Proyek ini dikelola oleh [deniyudi](https://github.com/deniyudi).
