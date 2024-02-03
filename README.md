![alt text](https://github.com/ahmadalvin92/Dynamic-Form/blob/main/public/Tampilan-Website/tampilanformuser.png?raw=true)
![alt text](https://github.com/ahmadalvin92/Dynamic-Form/blob/main/public/Tampilan-Website/tampilandatauser.png?raw=true)
![alt text](https://github.com/ahmadalvin92/Dynamic-Form/blob/main/public/Tampilan-Website/tampilanmasterdata.png?raw=true)
Berikut adalah langkah-langkah untuk menjalankan website Form Dinamis Laravel 10:
php 8.2.4 

1. Git clone https://github.com/ahmadalvin92/Dynamic-Form/
2. Buka terminal atau command prompt, lalu pindah ke lokasi folder yang telah diunduh:
   cd path_ke_folder_Dynamic_Form
3. Install semua dependencies menggunakan Composer:
   composer install
4. Salin file .env.example menjadi .env:
   cp .env.example .env
5. Sesuaikan konfigurasi di file .env sesuai dengan pengaturan database Anda.
6. Jalankan migrasi untuk membuat tabel-tabel yang diperlukan di database:
   php artisan migrate
7. Linkkan folder penyimpanan agar dapat diakses secara publik:
   php artisan storage:link
8. Jalankan server menggunakan perintah:
   php artisan serve

Setelah itu, website Form Dinamis Laravel 10 dapat diakses melalui browser pada alamat yang diberikan oleh perintah php artisan serve (biasanya http://localhost:8000). Pastikan server PHP Anda terhubung ke database dan dapat diakses melalui peramban web.

Release Date : 03-02-2024
Contact : https://www.instagram.com/ahmad_alvins/
