# Sistem Informasi Perpustakaan PNC

Sistem Informasi Perpustakaan PNC adalah aplikasi yang dirancang untuk memudahkan pengelolaan data perpustakaan di Politeknik Negeri Cilacap (PNC). Aplikasi ini dibangun menggunakan PHP dan MySQL dengan bantuan framework Bootstrap untuk tampilan antarmuka yang responsif.

## Fitur

- Manajemen Data Anggota
- Manajemen Katalog Buku
- Peminjaman dan Pengembalian Buku
- Laporan Transaksi
- Pencarian Buku

## Instalasi

### Persyaratan Sistem

- PHP >= 7.4
- MySQL
- Composer
- Web Server (Apache/Nginx)

### Langkah-langkah Instalasi

1. **Clone repositori ini:**
    ```bash
    git clone https://github.com/username/sistem-perpustakaan-pnc.git
    ```
   
2. **Masuk ke direktori proyek:**
    ```bash
    cd sistem-perpustakaan-pnc
    ```

3. **Instal dependensi menggunakan Composer:**
    ```bash
    composer install
    ```

4. **Buat database baru dan import file `database.sql` yang terdapat di dalam folder `database`:**

    ```sql
    CREATE DATABASE perpustakaan_pnc;
    USE perpustakaan_pnc;
    SOURCE database/database.sql;
    ```

5. **Konfigurasi koneksi database di file `koneksi.php`:**
    ```php
    <?php
    $koneksi = new mysqli("localhost", "username", "password", "perpustakaan_pnc");

    // Cek koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }
    ?>
    ```

6. **Jalankan aplikasi dengan mengaksesnya melalui web server:**
    ```
    http://localhost/sistem-perpustakaan-pnc
    ```

## Struktur Direktori





## Penggunaan

### Manajemen Data Anggota

1. Akses halaman `anggota.php` untuk melihat daftar anggota.
2. Gunakan tombol "Isi Data Anggota" untuk menambah anggota baru.
3. Gunakan tombol "Edit" untuk mengedit data anggota.
4. Gunakan tombol "Hapus" untuk menghapus data anggota.

### Manajemen Katalog Buku

1. Akses halaman `buku.php` untuk melihat daftar buku.
2. Gunakan tombol "Isi Data Buku" untuk menambah buku baru.
3. Gunakan tombol "Edit" untuk mengedit data buku.
4. Gunakan tombol "Hapus" untuk menghapus data buku.

### Peminjaman dan Pengembalian Buku

1. Akses halaman `peminjaman.php` untuk melihat daftar peminjaman.
2. Gunakan tombol "Pinjam Buku" untuk mencatat peminjaman baru.
3. Gunakan tombol "Kembalikan Buku" untuk mencatat pengembalian buku.

### Laporan Transaksi

1. Akses halaman `transaksi.php` untuk melihat laporan transaksi.
2. Gunakan tombol "Cetak Laporan" untuk mencetak laporan transaksi dalam format Excel.

## Data Diri

- **Nama:** [Nama Anda]
- **Email:** [Email Anda]
- **Institusi:** Politeknik Negeri Cilacap

## Kontribusi

Silakan buka issue atau pull request jika Anda ingin berkontribusi pada proyek ini. Semua kontribusi sangat dihargai.

## Lisensi

Proyek ini dilisensikan di bawah MIT License.


