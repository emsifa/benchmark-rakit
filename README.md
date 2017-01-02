
Benchmark Rakit (v0.4) vs Lumen (v5.3) vs Slim (v3) vs Silex (v2)
=================================================================

Berikut adalah benchmark beberapa mico framework populer dengan rakit framework.
Pada benchmark ini komputer yang digunakan adalah Notebook Lenovo Z40, AMD 10, RAM 8GB. 
Sistem operasi ubuntu 14.04, PHP v7.0.14.

## Size Framework

* Rakit : 384K
* Slim  : 1,3M
* Silex : 5,4M
* Lumen : 34M

Rakit > Slim > Silex > Lumen

## Benchmark Request Per Second (Higher is better)

* Rakit : 935.29, 940.18
* Slim  : 498.08, 496.06
* Lumen : 460.26, 463.28
* Silex : 317.16, 317.59

Rakit > Slim > Lumen > Silex

## Cara Benchmark

#### Kebutuhan

* Command PHP di terminal untuk running php built-in server (opsional). 
  Bisa pakai XAMPP, cari tahu caranya sendiri.
* Command curl (opsional).
* Command apache benchmark `ab` untuk benchmark RPS.

#### Cara Benchmark

* Clone repository ini: `git clone https://github.com/emsifa/benchmark-rakit.git`
* Pastikan terminal/cmd terdapat command php dengan mengetikkan `php --version`.
* Buka terminal/cmd. Masuk ke direktori `benchmark-rakit`
* Masuk ke direktori framework (misal `rakit`)
* Jalankan php built-in server: `php -S localhost:3000`. 
  Khusus untuk Lumen tambahkan opsi `-t public`.
* Pastikan output: `curl http://localhost:3000`. 
  Atau buka url tersebut di browser jika tidak terdapat command curl.
* Jalankan command `ab -t 10 -c 10 http://localhost:3000/foo | grep 'Requests per second'`
