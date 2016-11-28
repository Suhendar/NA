# NA
A PHP Framework
## Memulai
Framework mengunakan PDO untuk koneksi database nya dan untuk sementara hanya support mysql

## Install
  Download dan simpan pada direktori www anda
  konfigurasi database ada pada folder config/db.php
  atur sesuai database anda
  contoh
  ```
  $config['host'] = "localhost"; //host database
  $config['dbname'] = "framework";//nama database
  $config['user'] = "root";//user
  $config['pass'] = "";//pass
  ```
###Test
Di dalam framework telah tersedia sebuah controler,model,dan view yang dapat menjalankan basic CRUD dan juga sebagai contoh
Sebelumnya buatlah sebuat tabel di database anda dengan nama data dan kelas
