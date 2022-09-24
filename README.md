# tinyfilemanager

<p align="center"><img src="screenshot.png" alt="tinyfilemanager"></p>

Paket managemen file berbasis [tinyfilemanager](https://tinyfilemanager.github.io) untuk rakit framework.

## Instalasi
Jalankan perintah ini via rakit console:

```sh
php rakit package:install tinyfilemanager
```


## Mendaftarkan paket

Tambahkan kode berikut ke file `application/packages.php`:

```php
'tinyfilemanager' => ['handles' => 'tinyfilemanager'],
```

Lalu buka file konfigurasi milik paket ini dan tambahkan middleware
agar hanya admin saja yang bisa mengakses paket ini.

Caranya, buka file `packages/tinyfilemanager/config/main.php` dan
tambahkan middleeware anda disana:

```php
'middleware' => [
    'auth',
    'admin_only', // ubah ini sesuai nama middleware anda
],
```

**PENTING !!**

Saya ulangi, pastikan bahwa anda telah menambahkan middleware sehingga
hanya admin saja yang dapat mengakses routing milik paket ini.

Secara default, paket ini sudah menerapkan middleware `'auth'` sehingga
hanya user yang sudah login saja yang bisa nengaksesnya.

Tetapi, memberikan akses ke selain admin sangat berbahaya
karena orang lain akan dapat membuka dan mengubah file di server anda!


## Cara penggunaan

Baik, setelah middleware selesai ditambahkan, anda sudah dapat mengaksesnya
melalui url `/tinyfilemanager` seperti contoh berikut:

```
https://situsku.com/tinyfilemanager
```

Jika semuanya baik - baik saja, anda akan langsung bisa mengakses database
mengikuti koneksi yang anda atur di konfigurasi database default aplikasi anda.


## Lisensi

Paket ini dirilis dibawah [Lisensi MIT](https://github.com/esyede/notyf/tinyfilemanager/master/LICENSE)
