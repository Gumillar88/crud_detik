# crud_detik
crud detik testing code artikel berita

required install aplikasi :

- php must be required >=5.6.4*
- Install Composer*
- Install Apache and Mysql* or,
- Install Xampp or Lamp(Ubuntu).

step by step :

1. buat nama database "crud_detik" di phpmyadmin,dan install composer setelah selesai , buka terminal 
lalu masuk ke folder project yang terdapat file artisan dan composer,
lalu, set dengan "php artisan migrate", setelah selesai cek di phpmyadmin.
atau import data sql "crud_detik" lihat diemailnya,

2. setting di .env => yang APP_URL=(sesuai dengan lokasi folder yang disimpan di localhost lalu tambahkan "/public/"), 
dan APP_HOME_URL=(sesuai dengan lokasi folder yang disimpan di localhost).

3. setting database :
DB_DATABASE=crud_detik
DB_USERNAME=root
DB_PASSWORD=root
nb: lihat di .env

4. jalankan di browser(sesuai dengan lokasi folder yang disimpan di localhost) 
cth : "http://localhost/testcode/testing_detik_crud/crud_detik/"
