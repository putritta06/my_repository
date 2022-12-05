## Nama           :  Putri Tari Lestari
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Maisya Puspitas Sari</h2>
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp M.Gymnastiar</h2>

## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Implementasi Octave Manual Low Filter Pass dan Low Filter Pass Pada Citra</u></h2>
<br>
<br>

## Apa itu Low Filter Pass dan Low Filter Pass?

Filter lolos rendah atau Low Filter Pass : Filter lolos rendah adalah jenis filter domain frekuensi yang digunakan untuk menghaluskan gambar. Ini melemahkan komponen frekuensi tinggi dan mempertahankan komponen frekuensi rendah.

High pass filter: High pass filter adalah jenis filter domain frekuensi yang digunakan untuk mempertajam gambar. Ini melemahkan komponen frekuensi rendah dan mempertahankan komponen frekuensi tinggi.

## Perbedaannya

Low Pass Filter
- Ini digunakan untuk menghaluskan gambar. 
- Ini melemahkan frekuensi tinggi. 
- Frekuensi rendah dipertahankan di dalamnya. 
- Ini memungkinkan frekuensi di bawah frekuensi terputus untuk melewatinya. 
- Ini terdiri dari resistor yang diikuti oleh kapasitor. 
- Ini membantu dalam menghilangkan efek aliasing. 

 High Pass Filtering
 - Ini digunakan untuk mempertajam gambar.
 - Ini melemahkan frekuensi rendah.
 - Frekuensi tinggi dipertahankan di dalamnya.
 - Hal ini memungkinkan frekuensi di atas memotong frekuensi untuk melewatinya.
 - Ini terdiri dari kapasitor yang diikuti oleh resistor.
 - Ini membantu dalam menghilangkan kebisingan.

 <p align=center><img src=gambar/gambar68.PNG>

 ## Implementasi di Octave

 1. Low Pass Filtering

 Kode program :

 <p align=center><img src=gambar/gambar69.jpg>

 Hasil Program :

 <p align=center><img src=gambar/gambar70.jpg>

 2. High Pass Filtering

 Kode program :

 <p align=center><img src=gambar/gambar71.jpg>

 Hasil Program :

 <p align=center><img src=gambar/gambar72.jpg>
<br>
<br>

 <h2 align=center><u>Implementasi Octave Manual High Bost Filtering</u></h2>
<br>
<br>

## Apa itu High Bost Filtering?

High Bost Filtering Merupakan salah satu bagian dari operasi yang dapat dilakukan untuk melakukan perbaikan citra.High boost  filtering dapat  membuat  citra  menjadi  lebih  tajam,  dengan  cara  meninggikan nilai-nilai frekuensi yang ada pada citra.
1. High boost filtering : proses filter yang berasal dari citra dengan dasar pemrosesannya menggunakan metode low pass filter dan high pass filter
2. High-Boost Filtering bertujuan untuk mempertahankan(mempertajam) komponen frekuensi tinggi yang mewakili detail gambar tanpa menghilangkan komponen frekuensi rendah. 

Proses :
- Hight Boost Filtering digunakan bilamana citra masukan lebih gelap daripada citra yang di inginkan.
- High- boost filter menghasilkan citra lebih teran dan lebih alami.

Langkah-langkah :

- Memblurkan gambar asli
- Mengurangi versi asli gambar dengan gambar yang buram(perbedaan yang dihasilkan disebut mask)
- Menambahkan mask ke dalam gambar asli

Cara hitung :

Highboost = a Original – Lowpass
          
           = (a – 1) Original + Original – Lowpass

           = (a – 1) Original + Highpass

- Jika a = 1, kita mendapatkan unsharp masking.
- Jika a >1, bagian citra original ditambahkan kembali ke citra hasil high 
pass filter.
Highboost = (a – 1) Original + Highpass

Implementasi di Octave :

Kode Program manual 

<p align="center">
    <img src="img/high boos manual kode.png" >
</p>

Hasil Program :

<p align="center">
    <img src="img/hasil high boost_2.png" >
</p>

Ada juga implementasi dengan menggunakan fungsi dari Octave langsung, yaitu :

Kode program :

<p align="center">
    <img  width="500" src="img/kode high boost_2.png" >
</p>

<p align="center">
    <img width="500" src="img/hasil high boost_2.png" >
</p>

<br>
<br>

 <h2 align=center><u>Implementasi Octave Manual Madian Filtering</u></h2>
<br>
<br>

## Apa itu Median Filtering?

Median Filtering merupakan teknik penyaringan digital nonlinear, sering digunakan untuk menghilangkan noise. Penyaringan median sangat banyak digunakan dalam pemrosesan gambar digital karena mempertahankan tepi sambil menghilangkan <i>noise. Median Filtering</i> dilakukan pada matriks citra dengan cara mencari median dari piksel tetanggaan dengan menggunakan jendela yang menggeser piksel demi piksel.

Penerapan dari <i>median filtering</i> dapat berupa untuk peningkatan kualitas citra gambar yang mengalami penurunan mutu citra, misalnya karena mengandung cacat atau derau <i>(noise)</i>. Contohnya adalah bintik hitam atau putih yang muncul secara acak yang tidak diinginkan di dalam citra. bintik acak ini disebut dengan derau <i>(noise) salt & pepper.</i>

<p align="center"><img src="img/sudomed.png" width="800">

<br>
<p align="center"><img src="img/manualmed.png" width="800">

<br>
<p align="center"><img src="img/hasilmanual.png" width="800">

<br>
<p align="center"><img src="img/fungsimed.png" width="800">

<br>
<p align="center"><img src="img/hasilfungsi.png" width="800">
<br>
<br>

 <h2 align=center><u>Implementasi Octave Manual Edge Detection</u></h2>
<br>
<br>

Tepi (edge) adalah perubahan nilai intensitas derajat keabuan yang mendadak (besar) dalam jarak yang singkat. Tepi memiliki arah, dan arah ini berbeda-beda bergantung pada perubahan intensitas Tepi biasanya terdapat pada batas antara dua daerah yang berbeda intensitas dengan perubahan yang sangat cepat di dalam citra. 

<p align="center"><img width="500" src="img/edge1.png"></p>

Empat macam tepi: 
- tepi curam (step edge), 
- tepi landai (ramp edge), 
- tepi garis (line edge), dan 
- tepi atap (roof edge).

<p align="center"><img width="500" src="img/edge2.png"></p>

Tujuan :
- Pendeteksian tepi bertujuan untuk meningkatkan penampakan garis batas atau objek di dalam citra.
- Pendeteksian tepi mengekstraksi representasi gambar garis-garis di dalam citra.
- Pendeteksian tepi berguna dalam mengenali objek di dalam citra (image recognition).

<p align="center"><img width="400" src="img/edge3.png"></p>

<br>

### __Operator Gradien__
- Oparator Sobel
- Oparator Roberts
- Oparator Prewitt
- Operator Canny

 
#### __1. Operator Sobel__

<p align="center"><img width="500" src="img/edge4.png"></p>

Di bawah ini contoh lain pendeteksian tepi dengan operator Sobel, dimana hasil konvolusi diambangkan (thresholding) dengan T = 12.

<p align="center"><img width="500" src="img/egde5.png"></p>

#### Operator Sobel Menggunakan Fungsi Octave
- Kode :
<p align="center"><img width="400" src="img/edgesobel.png"></p>

- Output :
<p align="center"><img width="400" src="img/edgesobeloutput.png"></p>
<br>

#### __2. Operator Prewitt__
Persamaan gradien pada operator Prewitt sama seperti operator Sobel, tetapi menggunakan nilai c = 1 :

<p align="center"><img width="400" src="img/edgeprewitt.png"></p>

Kekuatan tepi dihitung dengan rumus :

<p align="center"><img width="250" src="img/edgeprewittrumus.png"></p>

#### Operator Prewitt Menggunakan Fungsi Octave

- Kode :
<p align="center"><img width="400" src="img/edgeprewittkode.png"></p>

- Output :
<p align="center"><img width="400" src="img/edgeprewittoutput.png"></p>
<br>

#### __3. Operator Roberts__

Operator Roberts sering disebut juga operator silang

Gradien Roberts dalam arah-x dan arah-y dihitung dengan rumus :
<p><img width="250" src="img/edgeroberts.png"></p>

Dalam bentuk mask konvolusi :
<p><img width="250" src="img/edgeroberts2.png"></p>

- Contoh berikut ini memeperlihatkan pendeteksian tepi dengan operator Roberts :
<p align="center"><img width="400" src="img/edgeroberts3.png"></p>

#### Operator Roberts Menggunakan Fungsi Octave
- Kode :
<p align="center"><img width="400" src="img/edgerobertskode.png"></p>
<br>

- Output :
<p align="center"><img width="400" src="img/edgerobertsoutput.png"></p>

#### __4. Operator Canny__

Operator deteksi tepi yang terkenal karena dapat menghasilkan tepi dengan ketebalan 1 pixel

<p align="center"><img width="400" src="img/edgecanny.png"></p>

Langkah-langkah operator Canny:
- Haluskan citra I dengan penapis Gaussian: G * I
- Hitung gradien setiap pixel dengan salah satu dari 4 operator sebelumnya (misalnya operator Sobel)
- Jika nilai mutlak gradien suatu pixel melebihi nilai ambang T, maka pixel termasuk pixel tepi.
<br>

### __Kode Edge Detection Manual__
Kode :
<p align="center"><img width="600" src="img/kode edge manual.png"></p>

Citra Asli :
<p align="center"><img width="400" src="img/kode edge citra asli.png"></p>

Hasil :
<p align="center"><img width="400" src="img/kode edge hasil.png"></p>


#### __Perbedaan Hasil Keempat Operator__

<p align="center"><img width="400" src="img/alloperator.png"></p>

Kesimpulan :
Dengan adanya jenis-jenis filter dalam pemrosesan citra di atas, kita bisa membuat sebuah citra baru sesuai dengan kebutuhan kita. Entah itu ingin menaikan ketajaman, menghilangkan noise, melihat tepi sebuah citra, mem-blurkan gambar dan banyak hal lainnya.