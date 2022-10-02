## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Eksplorasi Grayscale (Efek Keabuan) dengan Pengaturan Warna di Octave</u><h2>

Ada 3 jenis efek keabuan yang bisa diimplementasikan pada Octave dengan rumusnya masing-masing, yaitu :
1. Lightness Method

 > grayscale = (min(R,G,B) - max (R,G,B)) / 2

2. Average Method

 > grayscale = (R + G + B) / 3

3. Luminosity Method

 > grayscale = (0.3 * R) + (0.59 * G) + (0.11 * B) 

Contoh penerapannya di Octave :

Kode program 
<p align=center><img src=gambar/gambar15.png>

Ket : 
 - variabel **lighness** untuk Lightness Method
 - variabel **average** untuk Average Method 
 - variabel **luminosity** untuk Luminosity Method

Hasil program saat dijalankan 
<p align=center><img src=gambar/gambar16.jpg>

<h2 align=center><u>Halftoning</u><h2>

Digital halftoning adalah suatu proses untuk mengkonversi citra yang kontinu ke dalam suatu array berupa titik-titik. Jika dilihat oleh sistem visual manusia, pola tersebut akan  menciptakan  suatu  ilusi  sehingga  citra  tersebut  tampak  bukan  seperti  citra  hitam putih, namun seperti citra abu-abu yang kontinu. Metode  yang  paling  sederhana  untuk  mengkonversi  citra  abu-abu  menjadi  citra biner  adalah  dengan  menggunakan  ambang  batas,  yaitu  dengan  dua  tingkat  (satu bit) kuantisasi.  Misalkan  f(i,j)  adalah  sebuah  citra  abu-abu,  dan b(i,j)  adalah  citra  yang dihasilkan dari metode ambang batas yang sederhana. 

<p align=center><img src=gambar/gambar17.png>

<p align=center><img src=gambar/gambar18.png>

Gambar  1  dan  Gambar  2  menunjukkan  bahwa  citra  biner  tidak  “berbayang” dengan benar. Beberapa artefak  di  dalam citra tampak sebagai contouring  palsu. Hal ini sering terjadi jika kuantisasi dilakukan pada bitrate rendah (dalam hal ini adalah satu bit), sehingga terjadi kesalahan kuantisasi. Halftoning  bertujuan  untuk  memberikan  kesan  warna  citra  biner  tampak  seperti citra abu-abu meskipun hanya menggunakan piksel warna hitam dan putih saja. Meskipun teknik ambang batas(thresholding) yang sederhana ini dapat mengkonversi citra abu-abu menjadi  citra  biner,  namun  kualitas  citra  yang  dihasilkan  masih  kurang  baik.  Untuk memperbaiki  keterbatasan  ini,  pada  tulisan  ini  akan  disimulasikan  citra  biner  yang dikonversi dari citra abu-abu menggunakan metode ordered dithering.

<h2 align=center><u>Metode Dithering</u><h2>

Patterning adalah yang paling sederhana dari tiga teknik untuk menghasilkan gambar halftoning digital. Patterning dilakukan dengan mengganti setiap piksel dengan pola yang diambil dari 'font biner'.

Ini menghasilkan gambar yang memiliki resolusi spasial lebih tinggi daripada gambar sumber. Jumlah sel halftone citra keluaran sama dengan jumlah piksel citra sumber. Namun, setiap sel halftone dibagi lagi menjadi kotak 4x4. Setiap nilai piksel input diwakili oleh jumlah kotak terisi yang berbeda dalam sel halftone. Karena kisi 4x4 hanya dapat mewakili 17 tingkat intensitas yang berbeda, gambar sumber harus dikuantisasi. Gambar kedua menunjukkan matriks pola rekursif Rylander, yang akan digunakan dalam daftar pertama, dan contoh operasi Patterning.

Konsep pattering:

1. Akan ada ambang batas yang dikenakan pada abu-abu nilai level dari gambar asli.

2. Jika ambang batas berada dalam kisaran font pertama maka pola font pertama akan diganti untuk piksel.

3. Proses berlanjut untuk semua piksel dalam gambar dan diganti dengan font yang sesuai pola.

4. Perhatikan bahwa, karena kita mengganti setiap piksel dengan 3x3 blok piksel, baik lebar maupun tinggi bayangan bertambah tiga kali lipat.

<h2 align=center><u>Metode Dithering</u><h2>

Karena  sistem  visual  manusia  cenderung  meratakan  suatu area  di  sekitar  piksel, bukan   melihat   setiap   piksel   secara   sendiri-sendiri,   sehingga   memungkinkan   untuk membuat  ilusi  dari  beberapa  tingkat  keabuan  di  dalam  sebuah  citra  biner  yang  dalam kenyataanya  hanya  terdiri  dari  dua  tingkat  abu-abu.  Dengan  menggunakan  matriks  2x2 piksel,  lima  nilai  intensitas  “efektif”  yang  berbeda  dapat  terwakili,  seperti   yang diilustrasikan  pada  Gambar  3.  Demikian  juga  dengan  matriks  4x4  piksel,  sepuluh  buah tingkat kabuan yang berbeda dapat terwakili. Metode ini disebut dengan dithering, dalam proses dithering  blok  asli  pada  citra  kemudian  akan  diganti  dengan  jenis  pola  binertersebut.

Ordered  dithering  dilakukan  dengan  membandingkan  tiap  blok  dari  citra  asli dengan  sebuah  matriks  pembatas  yang  disebut  dengan  matriks dither.Masing-masing elemen  dari  blok  asli  dikuantisasi  sesuai  dengan  nilai  batas  pada  pola dither.  Nilai-nilai pada matriks ditheradalah tetap, tetapi bisa bervariasi sesuai dengan jenis citra.  Matriksdither pertama yang digunakan dalam metode ini adalah:

<p align=center><img src=gambar/gambar19.png>

Matriks  tersebut  diulang  sampai  mencakup  seluruh  matriks  pada  citra  yang  diolah. Katakanlah  d(i,j)  adalah  matriks  yang  diperoleh  dari  mereplika  A  dan  x(i,j)  adalah  citra abu-abu asli. Piksel untuk citra yang dihasilkan p(i,j) didefenisikan sebagai berikut:

<p align=center><img src=gambar/gambar20.png>

Hasil  konversi  citra  abu-abu  pada  Gambar  1  menggunakan  metode ordered  ditheringmenggunakan matriks dither 2 x 2, ditunjukkan pada Gambar berikut :

<p align=center><img src=gambar/gambar21.png>

sumber :
<a href="http://jimmypandapotan.blogspot.com/2018/01/pengolahan-citra-dengan-gnu-octave.html"> IN CHRIST I BELIEVE</a>



