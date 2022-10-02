## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Ulasan Patterning, Dithering, dan Grayscale Enhancement</u><h2>

### Bagaimana kita bisa menentukan pola yang ada pada Patterning?

Kehandalan dibutuhkan agar sistem dapat mengenali  dan mengelompokkan citra batik dari berbagai macam sumber seperti internet, majalah dan diambil secara langsung. Salah satu algoritma ekstraksi ciri adalah dengan memanfaatkan algoritma local binary pattern (LBP). Local Binary Pattern (LBP) adalah operator tekstur sederhana namun sangat efisien yang melabeli piksel gambar dengan membatasi lingkungan setiap piksel dan menganggap hasilnya sebagai bilangan biner. Ide dasar untuk mengembangkan operator LBP adalah bahwa tekstur permukaan dua dimensi dapat dijelaskan dengan dua ukuran yang saling melengkapi: pola spasial lokal dan kontras skala abu-abu. Operator LBP asli (Ojala et al. 1996) membentuk label untuk piksel gambar dengan membatasi lingkungan 3 x 3 dari setiap piksel dengan nilai tengah dan mempertimbangkan hasilnya sebagai bilangan biner. Histogram dari 2[8] = 256 label berbeda ini kemudian dapat digunakan sebagai deskriptor tekstur. Operator ini digunakan bersama dengan pengukur kontras lokal sederhana yang memberikan kinerja yang sangat baik dalam segmentasi tekstur tanpa pengawasan (Ojala dan Pietikäinen 1999). Setelah ini, banyak pendekatan terkait telah dikembangkan untuk segmentasi tekstur dan tekstur warna.

Secara umum LBP dapat didefinisikan sebagai perbandingan nilai biner piksel pada pusat citra dengan 8 nilai piksel disekelilingnya. Sebagai contoh pada sebuah citra berukuran 3×3, nilai biner pada pusat citra dibandingkan dengan nilai sekelilingnya. Dengan cara membanding nilai piksel pada pusat citra dengan nilai piksel disekelilingnya, jika hasilnya lebih atau sama maka diberi nilai 1 dan jika hasilnya kurang maka diberi nilai 0. 

Secara umum algoritma ekstraksi dengan LBP mempunyai 2 langkah  :
1. Langkah thresholding.

Pada langkah thresholding, semua nilai pixel tetangga pada setiap pola akan dikomparasi dengan nilai yang ada dipusat diantara nilai – nilai pola mereka, ini untuk dikonversi nilai mereka menjadi nilai biner yaitu (0 dan 1).  Untuk nilai 0 yang mempunyai nilai lebih kecil dengan nilai pusat sedangkan nilai 1 untuk angka lebih besar dari nilai pusatnya. Langkah ini untuk membantu dalam mendapatkan informasi tentang perbedaan dari local binary pada setiap bagian . Kemudian dalam langkah encoding, sejumlah nilai biner yang diperoleh dari langkah thresholding akan dirubah atau dikonversi kedalam bilangan desimal untuk karakteristik dari struktur pola. 

<p align=center><img src=gambar/>

<p align=center><img src=gambar/>

Untuk mendapatkan nilai LBP, kode-kode biner yang telah didapatkan, dikalikan dengan pembobotan binernya. Pada Gambar 1.0 menunjukkan operasi dasar LBP. Pola-pola biner LBP merepesentasikan bermacam-macam pola tepi, titik, flat areas, dan sebagainya. Untuk gambaran perhitungan dari operasi dasar LBP terdapat pada Gambar 2.0.

Secara umum gambaran dari kerangka kerja dari local binary pattern dan metode yang terkait dalam mendukung  operator LBP dapat dijabarkan pada Gambar 3.0.

<p align=center><img src=gambar/>

kerangka kerja dari metode LBP merupakan proses ekstraksi fitur tekstur dengan membagi citra ke dalam beberapa lokal wilayah dan mengekstraksi seluruh lokal wilayah untuk mendapatkan pola biner lokal. Teknik dasar pada local binary pattern (LBP) adalah melakukan analisis ketetanggaan terhadap setiap pixel pada sebuah citra, sebagai contoh sebuah gambar direpresentasikan oleh matriks (Bianconi & Fernández, 2014). Namun dalam proses pixel perpixel dengan menggunakan metode local binary pattern dapat dilihat pada Gambar 4.0.

Pada gambar 4.0 mengambarkan proses ekstraksi ciri citra dengan ukuran window 3×3 pixel. Setelah didapatkan nilai desimal dari setiap perhitungan biner pada semua pixel, proses terakhir adalah membuatkan histogram dari semua nilai desimal yang telah dihasilkan sebelumnya. 

{Nilai-nilai LBP selanjutnya direpresentasikan melalui histogram. Histogram menunjukkan frekuensi kemunculan berbagai nilai LBP. Setelah mendapatkan nilai LBP pada setiap neighborhood (blok i,j ), untuk ukuran citra N×M, tekstur citra direpresentasikan dengan membentuk histogram, dapat dilihat pada Gambar 3.18.

<p align=center><img src=gambar/>

Hasil akhir dari ekstraksi fitur menggunakan local binary pattern adalah hasil dari histogram tersebut, dimana satu citra memiliki ciri sebanyak 256 nilai yang merupakan frekuensi kemunculan dari nilai 0 s.d. 255. Pada contoh di atas, kita menggunakan matriks ketetanggaan sebanyak 8 (menggunakan window ukuran 3×3). Hasil yang lebih baik bisa didapat dengan menggunakan matriks ketetanggaan sebanyak 16, yakni dengan menggunakan window berukuran 5×5 , ini dapat terlihat pada Gambar 7.0.

<p align=center><img src=gambar/>

Pada gambar 7.0 menggambarkan untuk proses ekstraksi ciri citra dapat menggunaan beberapa window selain yang berukuran 3 x3 adalah window 5 x 5. Ini dimaksudkan untuk mendapatkan ekstraksi ciri citra dengan beberapa window sehingga menjadi lebih optimal hasilnya.

2. Langkah encoding.

### Bagaimana kita bisa menentukan matriks yang ada pada Ditherning?

### Apa itu Grayscale Enhancement?