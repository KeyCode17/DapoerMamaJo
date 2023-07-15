## Instalasi

Berikut adalah langkah-langkah untuk menginstal proyek setelah Anda mengklonnya dari GitHub:

1. Clone repositori ini ke direktori lokal Anda:

   ```bash
   git clone https://github.com/KeyCode17/DapoerMamaJo
   ```

2. Masuk ke direktori project:

   ```bash
   cd DapoerMamaJo
   ```

3. Salin file `.env.example` menjadi `.env`:

   ```bash
   cp .env.example .env
   ```

4. Jalankan perintah `composer install` untuk menginstal dependensi proyek:

   ```bash
   composer install
   ```
   
5. Generate kunci aplikasi Laravel:

   ```bash
   php artisan key:generate
   ```

6. Konfigurasikan file `.env` sesuai dengan lingkungan pengembangan Anda, termasuk pengaturan database.

7. Jalankan migrasi untuk membuat tabel-tabel database:

   ```bash
   php artisan migrate:fresh --seed
   ```
   
8. Jalankan penhubungan penyimpanan dengan public

   ```bash
   php artisan storage:link
   ```
   
9. Jalankan server pengembangan Laravel:

   ```bash
   php artisan serve
   ```

10. Buka browser dan akses proyek Laravel di URL berikut: `http://127.0.0.1:8000`

## Login Dashboard Default
User: admin<br>
Password: root
