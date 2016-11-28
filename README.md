# NA
A PHP Framework
## Memulai
Framework ini mengunakan PDO untuk koneksi database nya dan untuk sementara hanya support mysql

## Install
  Download dan simpan pada direktori www anda,
  lalu konfigurasi database ada pada folder config/db.php,
  atur sesuai database anda

  contoh:
  ```
  $config['host'] = "localhost"; //host database
  $config['dbname'] = "framework";//nama database
  $config['user'] = "root";//user
  $config['pass'] = "";//pass
  ```
###Test
Di dalam framework telah tersedia sebuah controler,model,dan view yang dapat menjalankan basic CRUD dan juga sebagai contoh

Sebelumnya buatlah sebuat tabel di database yang akan digunakan untuk Test
```
CREATE TABLE `data` (
  `id_siswa` int(11) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
tambahkan data apa saja ke dalam tabel

Lalu buka di browser anda

jika data nya tampil itu artinya anda berhasil

format penulisan url sebagai berikut

```
..../index.php?/namacontroler/action/value
```
