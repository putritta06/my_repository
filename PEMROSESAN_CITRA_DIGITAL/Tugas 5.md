## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Algoritma Patterning, Dithering, Histogram Equalization dan Bit Slicing</u><h2>

## Algoritma Patterning

Langkah-langkah 
1. Siapkan matriks yang berisi angka, baik itu matriks 2 x 2, 3 x 3 atau yang lainnya. Tujuannya adalah untuk menentukan pola yang akan digunakan dari angka yang dikandungnya.
2. Tentukan matriks diperbesarnya, misal 3 x 3, berarti akan ada 10 jenis pola. Hal itu didapat dari 3 x 3 = 9 ditambah 1. Kemudian, untuk menentukan interval tiap-tiap pola, adalah dengan 10 / 255 = 26.
~ jadi, tiap satu pola memuat angka yang panjangnya 26 (Dimulai dari angka 0 sampai dengan 255)
~ untuk 4 x 4 -> 4 x 4 = 16 + 1 = 17. Tinggal menentukan interval untuk 17 pola, begitu juga 5 x 5 dan seterusnya.
3. Membuat pola yang pengambilan polanya ditentukan oleh matriks yang telah disiapkan di awal.

Kesimpulan, matriks sebagai patokan, penentuan pola dengan panjang interval sesuai dengan matriks diperbesarnya, lalu membuat pola dengan menyesuaikan angka dalam matriks dengan pola yang berisi interval.

## Algoritma Ditterning

Langkah-langkah 
1. Siapkan matriks satu yang berisi angka
2. Siapkan matriks dua yang akan menjadi bahan perbandingan dengan matriks sebelumnya
3. Bandingkan tiap ordo yang selaras, apabila matriks dua lebih kecil daripada matriks satu, maka kotaknya akan berwarna hitam. Sebaliknya, apabila matriks dua lebih besar daripada matriks satu, maka kotaknya akan berwarna putih.

Kesimpulan, harus ada matriks satu dan matriks dua yang akan dibandingkan. Matriks dua yang menjadi penentu warna hitam atau putih.

## Algoritma Histogram Equalization

Kata Kunci
Pembuatan Histrogram berhubungan dengan hasil perhitungan dari Grayscale Enhancement. Jadi, sebelum mencapai pembuatan histogram, kita harus menghitungnya terlebih dahulu.

Langkah-langkah
1. Menentukan gambar dan membagi total pixel. Misal, ada gambar 3 bit, maka gray levelnya adalah 8. Dan sebanyak 8 buah macam pula pixel-pixel yang dibuat atau keluar. Biasanya dua macam ini berasal dari pembuatan soal atau permasalahan awal, jadi kita hanya perlu melanjutkan ke langkah selanjutnya.
2. Yang kedua adalah menjumlah semua pixel dari awal hingga akhir.
3. Hasil akhir dari penjumlahan keseluruhan tersebut adalah penentu yang menjadi pembagi masing-masing pixel.
4. Kemudian mengalikan pixel yang dibagi oleh jumlah keseluruhan pixel dengan banyaknya gray level satu demi satu, misal gray level ada 7, maka : (pixel / sumpixel)*gray level 
5. Hasil dari perhitungan tersebut dibulatkan
6. Menghitung kembali hasil dari rumus di atas dengan memperhatikan gray level dan no of pixel yang disediakan pada langkah pertama tadi. Jadi, ada tiga hal yang akan kita perhatikan, yaitu hasil akhir, gray level dan no of pixel --yang kemudian akan menghasilkan no of pixel yang baru untuk pembuatan histogram.

Jika langkah-langkah di atas sudah selesai, kita tinggal memperhatikan pembuatan histogram. Hal yang harus diperhatikan adalah gray level dan no of pixel, dan khusus no of pixel ini diambil dari hasil perhitungan sebelumnya. Arah panah x mendatar adalah angka untuk gray level, sedangkan aray panah y tegak lurus merupakan angka no of pixel. Jadi, tinggi rendahnya titik histogram dapat ditentukan setelah kita menyelesaikan tugas di atas.

Kesimpulan, pembuatan histogram harus menyelesaikan perhitungan grayscale enhancement terlebih dahulu, lalu hasil akhir perhitungan tersebut yang menentukan tinggi atau banyaknya pixel pada tiap-tiap level.


## Algoritma Bit Place Slicing

Algoritma ini berhubungan dengan biner, yang tujuannya adalah memotong bit / daerah warna grayscale pada sebuah gambar. Hal pertama yang harus kita ketahui adalah pemotongan daerah secara umum terlebih dahulu, yaitu :
~ 0 untuk angka yang tidak digunakan
~ 1 untuk angka yang digunakan
Dalam biner, ada 8 buah angka desimal, di antaranya :
128 | 64 | 32 | 16 | 8 | 4 | 2 | 1

Langkah-langkah 
1. Pelajari cara merubah angka desimal menjadi angka biner
2. Siapkan matriks yang berisi angka
3. Lihat angkanya lalu ubah ke dalam bentuk biner

Contoh 
| 64 59  |
| 77 123 |

Bit Place Slicing
| 01000000 00111011 |
| 01001101 01111011 |

Kesimpulan, algoritma ini merupakan metode kontribusi atau pengaruh tiap bit penyusun citra, tujuannya adalah merubah angka desimal menjadi angka biner. 