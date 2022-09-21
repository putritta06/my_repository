## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Materi</u><h2>

### Apa itu Octave?
<br>
<p align=justify>GNU Octave adalah suatu perangkat lunak gratis (freeware) dan bahasa tingkat tinggi
untuk komputasi numerik dan visualisasi data. Octave dirancang sebagai tiruan dari
Matlab. Sumber informasi mengenai Octave dapat dilihat pada website
www.octave.org.
Pada awalnya Octave dikembangkan oleh John W. Eaton (Universitas Texas) dan
sekarang pengembangan dan pemeliharaan Octave dilakukan oleh beberapa orang
volunteer dari berbagai penjuru dunia.
Kelebihan utama dari Octave yaitu gratis (freeware) dan tersedia untuk berbagai sistem
operasi seperti Windows 98/2000/XP, Mac OS/X, Debian, Suse, Fedora, RedHat Linux.

### Penjelasan mengenai pengolahan citra digital dengan fungsi imread, imshow dan imhist

Berikut salah satu adalah contoh penulisan di Octave.

> pict = imread('D:\gambar\gambar2.png');

> subplot(1,2,1); imshow(pict);

> subplot(1,2,2); imshow(pict);

Ket :
- pict merupakan nama variabel dimana file Image itu disimpan
- imread merupakan fungsi untuk membaca file image ituberada
- subplot merupakan fungsi untuk memasukan objek ke dalam 1 figure
- imshow merupakan fungsi untuk menampilkan objek gambar
- imhist  merupakan Fungsi untuk menampilkan image dengan bentuk histogram.

Tambahan :

Untuk menampilkan pixel pada suatu image menggunakan kode seperti di bawah ini.

>> asci = uint8(pict) 

<h2 align=center><u>Penugasan</u></h2>

![tata](gambar/gambar1.png)

 1. Mencari gambar berwarna ukuran 32 x 32 dengan ekstensi PNG/JPG/JPEG. Di bawah ini merupakan tiga gambar tersebut

 <p align=center><img src=gambar/gambar5.png>

 2. Saya melakukan risize pada gambar itu sebelumnya, yaitu mengubahnya di aplikasi Adobe Photoshop dengan format seperti contoh gambar di bawah ini.
 <p align=center><img src=gambar/gambar6.png>

### a). Eksplorasi pada Octave dengan gambar warna ekstensi dengan fungsi imread dan imshow

### Contoh kode pada Octave adalah seperti gambar di bawah ini :

<p align=center><img src=gambar/gambar10.png>

Ket : Untuk penamaan variabel disarankan agar menggunakan nama yang berbeda (jangan sama)

Hasil yang ditunjukkan yaitu :

- PNG
<p align=center><img src=gambar/gambar7.png>

- JPG
<p align=center><img src=gambar/gambar8.png>

- JPEG
<p align=center><img src=gambar/gambar9.png>

### b). Eksplorasi pada Octave dengan gambar warna ekstensi dengan fungsi imread, imshow dan imhist

### Contoh kode pada Octave adalah seperti gambar di bawah ini :

(1). PNG

<p align=center><img src=gambar/gambar11.jpg>

Ket : 
- untuk yang bergaris bawah warna ungu, merupakan kode apabila saat meminta perintah imhist terdapat pemberitahuan error (seperti hal di atasnya)
- untuk yang bergaris bawah warna kuning, merupakan perintah berubah satu(1) baris dua(2) kolom untuk gambar satu(1) atau (1,2,1).
- untuk yang bergaris bawah warna merah, merupakan perintah berubah satu(1) baris dua(2) kolom untuk gambar dua(2) atau (1,2,1).

Hasil gambar :

<p align=center><img src=gambar/gambar12.png>

(2). JPG

Kode program :

 >> picttt = imread('\gambar\gambar3.jpg');

 >> subplot(1,2,2),imshow(picttt);

 >> subplot(1,2,1),imhist(picttt);

 Hasil gambar :

 <p align=center><img src=gambar/gambar13.png>

(3). JPEG

Kode program :

 >> pictttt = imread('\gambar\gambar4.jpg');

 >> subplot(1,2,1),imhist(pictttt);

 >> subplot(1,2,2),imshow(pictttt);

Hasil gambar :

<p align=center><img src=gambar/gambar14.png>

<br>
<br>

Sumber materi :
- <a href="https://edimariyantostimikeresha.wordpress.com/2017/12/30/pengolahan-citra-digital-menggunakan-octave/">EDY MARIYANTO</a>
- <a href="https://www.youtube.com/watch?v=fjUWy5I7zck">Aku Bisa</a>
- <a href="https://github.com/khairulfuad09/Pemrosesan_Citra_Digital/blob/main/Tugas2_ABKC6303_Pemrosesan_Citra_Digital/tugas_2_KhairulFuad_2110131310002.md">Khairul Fuad</a>