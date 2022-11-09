## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Implementasi Bit Plane Slicing Pada Octave</u></h2>

<br>

### Apa itu Bit Plane Slicing?

Secara digital, sebuah gambar direpresentasikan dalam bentuk piksel. Piksel ini dapat diekspresikan lebih lanjut dalam bentuk bit. Perhatikan gambar di bawah ini :

<p align=center><img src=gambar/gambar34.png>

Format biner untuk nilai tersebut adalah (representasi 8-bit).

<p align=center><img src=gambar/gambar35.png>

Format biner untuk nilai piksel 167 adalah 10100111 Demikian pula, untuk 144 adalah 10010000. Gambar 8-bit ini terdiri dari delapan bidang 1-bit. Plane 1 berisi bit urutan terendah dari semua piksel dalam gambar.

<p align=center><img src=gambar/gambar36.png>

Dan plane 8 berisi bit urutan tertinggi dari semua piksel dalam gambar.

<p align=center><img src=gambar/gambar37.png>

<p align=center><img src=gambar/gambar38.png>

### Implementasi Bit Plane Slicing di Octave

Hal pertama yang perlu dipersiapkan adalah gambar, ketentuan gambar dibebaskan asal jangan yang macam-macam ya.

Lalu ketikkan kode program seperti di bawah ini :

<p align=center><img src=gambar/gambar39.png>

<p align=center><img src=gambar/gambar40.png>

<p align=center><img src=gambar/gambar41.png>

<p align=center><img src=gambar/gambar42.png>

<p align=center><img src=gambar/gambar43.png>

<p align=center><img src=gambar/gambar44.png>

<p align=center><img src=gambar/gambar45.png>

<p align=center><img src=gambar/gambar46.png>

Maka hasil program ketika dijalankan adalah sebagai berikut :

<p align=center><img src=gambar/gambar47.png>

<p align=center><img src=gambar/gambar48.png>

<p align=center><img src=gambar/gambar49.png>

<p align=center><img src=gambar/gambar50.png>

<p align=center><img src=gambar/gambar51.png>

<p align=center><img src=gambar/gambar52.png>

<p align=center><img src=gambar/gambar53.png>

<p align=center><img src=gambar/gambar54.png>

<p align=center><img src=gambar/gambar55.PNG>

<h2 align=center><u>Stegonography</u></h2>

### Apa itu Steganography?

Steganografi atau Steganography adalah sebuah ilmu, teknik atau seni menyembunyikan sebuah pesan rahasia dengan suatu cara sehingga pesan tersebut hanya akan diketahui oleh si pengirim dan si penerima pesan rahasia tersebut. Steganografi berasal dari Bahasa Yunani yaitu Stegano yang berarti “tersembunyi atau menyembunyikan” dan graphy yang berarti “Tulisan, jadi Steganografi adalah tulisan atau pesan yang disembunyikan. Steganografi kebalikannya kriptografi yang menyamarkan arti dari sebuah pesan rahasia saja, tetapi tidak menyembunyikan bahwa ada sebuah pesan. Kelebihan Steganografi dibandingkan dengan Kriptografi adalah pesan-pesannya akan dibuat tidak menarik perhatian dan tidak menimbulkan kecurigaan, berbeda dengan Kriptografi yang pesannya tidak disembunyikan, walaupun pesannya sulit untuk di pecahkan akan tetapi itu akan menimbulkan kecurigaan pesan tersebut.

Pesan rahasia yang akan disembunyikan akan disisipkan pada suatu media penampung seperti citra, suara, video dan sebagainya yang terlihat tidak mencurigakan untuk menyimpan pesan rahasia. Pesan rahasia akan memerlukan sebuah kunci rahasia yang dinamakan stego-key agar hanyak pihak yang berhak saja yang dapat membuka atau mengekstak pesan rasahia tersebut.

### Membuat Steganography di Citra dengan Octave

Kode program :


<p align=center><img src=gambar/gambar67.PNG>

Hasil program :

<p align=center><img src=gambar/gambar66.PNG>
