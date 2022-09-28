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

<h2 align=center><u>Hosting Dithering</u><h2>

Digital halftoning adalah suatu proses untuk mengkonversi citra yang kontinu ke dalam suatu array berupa titik-titik. Halftoning bertujuan untuk memberikan kesan warna citra biner tampak seperti citra abu-abu meski hanya menggunakan piksel warna hitam dan putih saja.

Ordered Dithering dilakukan dengan membandingkan tiap blok dari citra asli dengan sebuah matriks pembatas yang disebut dengan matriks dither.

sumber :
<a href="http://jimmypandapotan.blogspot.com/2018/01/pengolahan-citra-dengan-gnu-octave.html"> IN CHRIST I BELIEVE</a>


