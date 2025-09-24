=============================JANJI============================

Saya dengan nama Nafis Asyakir Anjar dan Nim 2407915 mengerjakan tugas praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan Aamiin.


=============================DESAIN===========================

<img width="515" height="728" alt="image" src="https://github.com/user-attachments/assets/4f375680-1050-41c5-88b3-d8f4f93166d5" />

Di sini saya melakukan ekspansi terhadap class yang sebelumnya dibuat (Produk Elektronik) menjadi tiga kelas agar menjadi multilevel inheritence

1. Produk
   Di sini saya menjadikan Produk sebagai Base Class, asumsi saya jika suatu saat toko elektronik tersebut akan melakukan ekspansi ke bidang lain maka akan mempermudah untuk menambahkan kelas anak untuk bidang lain.
   Atribut :
   Id        --> Setiap produk pasti memiliki kode unik yang memudahkan sistem untuk membedakannya
   Nama      --> Setiap produk pasti memiliki nama
   Deskrpisi --> Setiap produk tentu memiliki deskripsi untuk menjelaskan produk tersebut
   Harga     --> Produk jual beli pastinya memiliki harga

   Method : -

3. Produk Elektronik
   Berdasarkan tema yang diberikan maka produk yang dijual akan dikhususkan untuk Produk Elektronik sebagai Intermediate Class.
   Atribut :
   Tegangan/Watt  --> Barang elektronik sudah pasti menggunakan listrik
   Merek          --> Produk Elektronik pasti memiliki merek tertentu, ada kemungkinan atribut ini bisa dipindah ke class                          Produk
   Model          --> Dalam dunia barang elektronik, setiap jenis dari merek yang sama biasanya memiliki model-model                               tertentu maka dari itu saya membuat atribut ini
   Jenis          --> Jenis dari Produk Elektroniknya

   Method : -

5. Produk Impor
   Dalam narasi otak saya, saya memodelkan toko elektronik di sini hanya menjual produk-produk impor, maka dari itu saya membuatnya menjadi derived class. Hal ini juga membuka kemungkinan toko tersebut jika ingin mulai menjual produk lokal.
   Atribut :
   Negara      --> Negara asal produk tersebut
   Nomor API   --> Setiap produk impor harus memiliki nomor API (Angka pengenal Importir)
   Invoice     --> Barang impor harus memiliki Commercial Invoice, dokumen resmi yang diterbitkan oleh eksportir kepada                         importir

   Method :

   - Tampilkan data (Dalam bentuk tabel)
   - Add data 

============================FLOW CODE==========================

============GENERAL=============

Dalam setiap bahasa, alur dari kode-nya kurang lebih sama

- file bernama "Produk" atau sejenis
Di setiap bahasa file bernama "Produk" (base class) berisi atribut dasar yang dimiliki suatu produk

- file bernama "Produk Elektronik" atau sejenis
File bernama "Produk Elektronik" atau sejenis mewarisi semua atribut parentnya yaitu class Produk, dan memiliki beberapa atributnya sendiri

- file bernama "Produk impor" atau sejenis
File dengan nama ini mewarisi semua atribut dari parentnya yaitu class produk_elektronik yang kemudian dapat mengambil atribut hasil warisan parent dari parentnya. Selain itu di dalam sini juga terdapat method untuk menampilkan data dan menambah data.

- file Main

File ini merupakan file utama di setiap bahasa (Dalam php sebagai index.php). Ketika kode dalam file ini dijalankan, maka program akan menginisialisasi tempat penyimpanan datanya (berbeda untuk setiap bahasa), lalu memproses hardcode yang ada, selanjutnya program akan masuk ke dalam looping dan menunggu inputan user, berdasarkan inputan maka program akan mengeksekusi perintahnya, 1 untuk menampilkan data, 2 untuk menambah data, 3 untuk keluar dari program.

Berikutnya akan dijelaskan sedikit mengenai perbedaan khusus pada kode di tiap bahasa

==============CPP===============

- Menyimpan data produk menggunakan vector

![dokumentasicpp](./Dokumentasi/cpp.jpg)

Ketika menjalankan kode program akan menampilkan pilihan perintah (CRUD) dan meminta inputan user. Program akan menjalankan perintah sesuai angka yang diinput oleh user. 
Dalam dokumentasi ini saya melakukan perintah Create/Add dan menampilkan untuk menunjukkan bahwa program berhasil dijalankan.


==============JAVA==============

- Data produk disimpan menggunakan ArrayList
- Implementasi CRUD menggunakan Scanner dan pengkondisian while

![dokumentasicpp](./Dokumentasi/java.jpg)

Ketika menjalankan kode program akan menampilkan pilihan perintah (CRUD) dan meminta inputan user. Program akan menjalankan perintah sesuai angka yang diinput oleh user. 
Dalam dokumentasi ini saya melakukan perintah searching dalam keadaan ArrayList masih kosong dan hasil searching tidak ditemukan yang menunjukkan bahwa program berhasil dijalankan.

=============PYTHON=============

- Data objek produk disimpan dalam List
- Implementasi CRUD hanya menggunakan pengkondisian While

![dokumentasicpp](./Dokumentasi/py.jpg)

Ketika menjalankan kode program akan menampilkan pilihan perintah (CRUD) dan meminta inputan user. Program akan menjalankan perintah sesuai angka yang diinput oleh user. 
Dalam dokumentasi ini saya melakukan perintah Create/Add dan menampilkan untuk menunjukkan bahwa program berhasil dijalankan.

==============PHP===============

- Penyimpanan data objek produk menggunakan session_start untuk kemudian disimpan di $_SESSION['produk']
- Input data produk menggunakan form
- Produk terdata ditampilkan dalam tabel HTML
- Implementasi CRUD dilakukan berdasarkan $_POST['aksi'] (action button)
- Menambahkan sedikit styling menggunakan css agar tampilan terlihat lebih rapi
  
![dokumentasicpp](./Dokumentasi/php.jpg)

Laman web menampilkan form untuk add data, dan di bawahnya terdapat tabel yang menampilkan data yang sudah ditambahkan, dan terdapat tombol untuk update data dan hapus data.
Dalam dokumentasi ini data yang di add sebelumnya sudah masuk ke dalam tabel yang menunjukkan bahwa crud di php ini berhasil.

