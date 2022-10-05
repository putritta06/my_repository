## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Ulasan Patterning, Dithering, dan Grayscale Enhancement</u><h2>

### Bagaimana kita bisa menentukan pola yang ada pada Patterning?

Kehandalan dibutuhkan agar sistem dapat mengenali  dan mengelompokkan citra dari berbagai macam sumber seperti internet, majalah dan diambil secara langsung. Salah satu algoritma ekstraksi ciri adalah dengan memanfaatkan algoritma local binary pattern (LBP). Local Binary Pattern (LBP) adalah operator tekstur sederhana namun sangat efisien yang melabeli piksel gambar dengan membatasi lingkungan setiap piksel dan menganggap hasilnya sebagai bilangan biner. 

Ide dasar untuk mengembangkan operator LBP adalah bahwa tekstur permukaan dua dimensi dapat dijelaskan dengan dua ukuran yang saling melengkapi: pola spasial lokal dan kontras skala abu-abu. Operator LBP asli (Ojala et al. 1996) membentuk label untuk piksel gambar dengan membatasi lingkungan 3 x 3 dari setiap piksel dengan nilai tengah dan mempertimbangkan hasilnya sebagai bilangan biner. Histogram dari 2[8] = 256 label berbeda ini kemudian dapat digunakan sebagai deskriptor tekstur. Operator ini digunakan bersama dengan pengukur kontras lokal sederhana yang memberikan kinerja yang sangat baik dalam segmentasi tekstur tanpa pengawasan (Ojala dan Pietikäinen 1999). 

Secara umum LBP dapat didefinisikan sebagai perbandingan nilai biner piksel pada pusat citra dengan 8 nilai piksel disekelilingnya. Sebagai contoh pada sebuah citra berukuran 3×3, nilai biner pada pusat citra dibandingkan dengan nilai sekelilingnya. Dengan cara membanding nilai piksel pada pusat citra dengan nilai piksel disekelilingnya, jika hasilnya lebih atau sama maka diberi nilai 1 dan jika hasilnya kurang maka diberi nilai 0. 

Secara umum algoritma ekstraksi dengan LBP mempunyai 2 langkah yaitu langkah thresholding dan encoding. Pada langkah thresholding, semua nilai pixel tetangga pada setiap pola akan dikomparasi dengan nilai yang ada dipusat diantara nilai – nilai pola mereka, ini untuk dikonversi nilai mereka menjadi nilai biner yaitu (0 dan 1).  Untuk nilai 0 yang mempunyai nilai lebih kecil dengan nilai pusat sedangkan nilai 1 untuk angka lebih besar dari nilai pusatnya. 

Langkah ini untuk membantu dalam mendapatkan informasi tentang perbedaan dari local binary pada setiap bagian. Kemudian dalam langkah encoding, sejumlah nilai biner yang diperoleh dari langkah thresholding akan dirubah atau dikonversi kedalam bilangan desimal untuk karakteristik dari struktur pola. 

<p align=center><img src=gambar/gambar19.png>

Untuk mendapatkan nilai LBP, kode-kode biner yang telah didapatkan, dikalikan dengan pembobotan binernya. Pada Gambar 1.0 menunjukkan operasi dasar LBP. Pola-pola biner LBP merepesentasikan bermacam-macam pola tepi, titik, flat areas, dan sebagainya. Untuk gambaran perhitungan dari operasi dasar LBP terdapat pada Gambar 2.0.

<p align=center><img src=gambar/gambar20.png>

Secara umum kerangka kerja dari metode LBP merupakan proses ekstraksi fitur tekstur dengan membagi citra ke dalam beberapa lokal wilayah dan mengekstraksi seluruh lokal wilayah untuk mendapatkan pola biner lokal. Teknik dasar pada local binary pattern (LBP) adalah melakukan analisis ketetanggaan terhadap setiap pixel pada sebuah citra, sebagai contoh sebuah gambar direpresentasikan oleh matriks (Bianconi & Fernández, 2014).

<p align=center><img src=gambar/gambar21.png>

Pada gambar di atas mengambarkan proses ekstraksi ciri citra dengan ukuran window 3×3 pixel. Setelah didapatkan nilai desimal dari setiap perhitungan biner pada semua pixel, proses terakhir adalah membuatkan histogram dari semua nilai desimal yang telah dihasilkan sebelumnya. 

{Nilai-nilai LBP selanjutnya direpresentasikan melalui histogram. Histogram menunjukkan frekuensi kemunculan berbagai nilai LBP. Setelah mendapatkan nilai LBP pada setiap neighborhood (blok i,j ), untuk ukuran citra N×M, tekstur citra direpresentasikan dengan membentuk histogram.

<p align=center><img src=gambar/gambar22.png>

Hasil akhir dari ekstraksi fitur menggunakan local binary pattern adalah hasil dari histogram tersebut, di mana satu citra memiliki ciri sebanyak 256 nilai yang merupakan frekuensi kemunculan dari nilai 0 s.d. 255. Pada contoh di atas, kita menggunakan matriks ketetanggaan sebanyak 8 (menggunakan window ukuran 3×3). Hasil yang lebih baik bisa didapat dengan menggunakan matriks ketetanggaan sebanyak 16, yakni dengan menggunakan window berukuran 5×5.

<p align=center><img src=gambar/gambar23.png>

Pada gambar di atas menggambarkan proses ekstraksi ciri citra dapat menggunaan beberapa window selain yang berukuran 3 x3 adalah window 5 x 5. Ini dimaksudkan untuk mendapatkan ekstraksi ciri citra dengan beberapa window sehingga menjadi lebih optimal hasilnya.

### Bagaimana kita bisa menentukan matriks yang ada pada Ditherning?

### Apa itu Grayscale Enhancement?

Image enhancement memiliki arti yaitu perbaikan kualitas citra yang bertujuan untuk memperoleh citra yang lebih sesuai digunakan untuk aplikasi lebih lanjut (misal: mengenali objek di dalam citra). Grayscalling adalah teknik yang digunakan untuk mengubah citra berwana (RGB) menjadi bentuk grayscale atau tingkat keabuan.Dengan pengubahan ini, matriks penyusun citra yang sebelumnya 3 matriks akan berubah menjadi 1 matriks saja[3]. Citra grayscale disebut juga citra satu kanal, karena warnanya hanya ditentukan oleh satu fungsi intensitas saja, artinya mempunyai skala abu dari 0 sampai 255, yang dalam hal ini nilai intensitas 0 menyatakan hitam, nilai intensitas 255 menyatakan putih (Munir, 2004)[4].

Dalam komputasi, suatu citra digital grayscale atau greyscale adalah suatu citra dimana nilai dari setiap pixel merupakan sampel tunggal. Citra yang ditampilkan dari citra jenis ini terdiri atas warna abu-abu, bervariasi pada warna hitam pada bagian yang intensitas terlemah dan warna putih pada intensitas terkuat. 

Citra grayscale berbeda dengan citra hitam-putih, di mana pada konteks komputer, citra hitam putih hanya terdiri atas 2 warna saja yaitu hitam dan putih saja. Pada citra grayscale warna bervariasi antara hitam dan putih, tetapi variasi warna diantaranya sangat banyak. Citra grayscale seringkali merupakan perhitungan dari intensitas cahaya pada setiap pixel pada spektrum elektromagnetik single band. Citra grayscale disimpan dalam format 8 bit untuk setiap sampel pixel, yang memungkinkan sebanyak 256 intensitas. Format ini sangat membantu dalam pemrograman karena manipulasi bit yang tidak terlalu banyak. Pada aplikasi lain seperti pada aplikasi medical imaging dan remote sensing biasa juga digunakan format 10,12 mau pun 16 bit. Citra grayscale disimpan dalam format 8 bit untuk setiap sampel pixel, yang memungkinkan sebanyak 256 intensitas.

Ada tiga transformasi tingkat abu-abu.

1. Transformasi linier

Transformasi linier meliputi identitas sederhana dan transformasi negatif. Transisi identitas ditunjukkan oleh garis lurus. Pada transisi ini, setiap nilai dari citra masukan langsung dipetakan satu sama lain dengan nilai citra keluaran. Itu menghasilkan gambar input dan gambar output yang sama. Dan karenanya disebut transformasi identitas. Telah ditunjukkan di bawah ini:

<p align=center><img src=gambar/gambar31.png>

2. Transformasi negatif

Merupakan kebalikan dari transformasi identitas. Dalam transformasi negatif, setiap nilai dari citra masukan dikurangkan dari L-1 dan dipetakan ke citra keluaran.Hasilnya kurang lebih seperti ini.

<p align=center><img src=gambar/gambar32.png>

Dalam hal ini transisi berikut telah dilakukan.

s = (L – 1) – r

karena citra masukan Einstein adalah citra 8 bpp, maka jumlah tingkatan pada citra ini adalah 256. Dengan memasukkan 256 ke dalam persamaan, kita mendapatkan

s = 255 – r

Jadi setiap nilai dikurangi dengan 255 dan gambar hasil telah ditampilkan di atas. Jadi yang terjadi adalah, piksel yang lebih terang menjadi gelap dan gambar yang lebih gelap menjadi terang. Dan itu menghasilkan citra negatif.

3. Transformasi logaritma

- Transformasi log

Transformasi log dapat didefinisikan dengan rumus ini

s = c log(r + 1).

Dimana s dan r adalah nilai piksel dari output dan gambar input dan c adalah konstanta. Nilai 1 ditambahkan pada setiap nilai piksel citra masukan karena jika terdapat intensitas piksel 0 pada citra, maka log (0) sama dengan tak terhingga. Jadi 1 ditambahkan, untuk membuat nilai minimum setidaknya 1.

Selama transformasi log, piksel gelap dalam gambar diperluas dibandingkan dengan nilai piksel yang lebih tinggi. Nilai piksel yang lebih tinggi agak dikompresi dalam transformasi log. Ini menghasilkan peningkatan gambar berikut.

Nilai c dalam transformasi log menyesuaikan jenis peningkatan yang Anda cari

- Kekuasaan – Transformasi hukum

Ada dua transformasi selanjutnya yaitu transformasi power law, yang meliputi transformasi pangkat ke-n dan transformasi akar ke-n. Transformasi ini dapat diberikan oleh ekspresi:

s=cr^γ

Simbol ini disebut gamma, karena itu transformasi ini juga dikenal sebagai transformasi gamma. Variasi nilai memvariasikan peningkatan gambar. Perangkat tampilan / monitor yang berbeda memiliki koreksi gamma sendiri, itulah sebabnya mereka menampilkan gambar mereka pada intensitas yang berbeda. Jenis transformasi ini digunakan untuk menyempurnakan gambar untuk berbagai jenis perangkat tampilan. Gamma perangkat tampilan yang berbeda berbeda. Misalnya Gamma CRT berada di antara 1,8 sampai 2,5, artinya gambar yang ditampilkan pada CRT gelap.

Gambar yang sama tetapi dengan nilai gamma yang berbeda telah ditampilkan di sini.

Contoh di bawah ini menunjukkan cara meningkatkan kontras gambar skala abu-abu dan berwarna menggunakan pemetaan nilai intensitas, pemerataan histogram, dan pemerataan histogram adaptif terbatas kontras.

<p align=center><img src=gambar/gambar33.png>

Tiga fungsi sangat cocok untuk peningkatan kontras:

- imadjust meningkatkan kontras gambar dengan memetakan nilai gambar intensitas input ke nilai baru sehingga, secara default, 1% data jenuh pada intensitas rendah dan tinggi dari data input.

- histeq melakukan pemerataan histogram. Ini meningkatkan kontras gambar dengan mengubah nilai dalam gambar intensitas sehingga histogram gambar keluaran kira-kira cocok dengan histogram yang ditentukan (distribusi seragam secara default).

- adapthisteq melakukan pemerataan histogram adaptif kontras-terbatas. Tidak seperti histeq, ia beroperasi pada wilayah data kecil (ubin) daripada seluruh gambar. Kontras setiap petak ditingkatkan sehingga histogram dari setiap wilayah keluaran kira-kira cocok dengan histogram yang ditentukan (distribusi seragam secara default). Peningkatan kontras dapat dibatasi untuk menghindari penguatan noise yang mungkin ada pada gambar.

<p align=center><img src=gambar/gambar24.png>


### Diskrit fungsi transformasi

Probabilitas terjadinya abu-abu level dalam gambar didekati dengan

<p><img src=gambar/gambar25.png>

Versi diskrit dari transformasi

<p><img src=gambar/gambar26.png>

Dengan demikian, citra keluaran diperoleh dengan memetakan setiap piksel dengan level rk pada citra masukan menjadi piksel yang sesuai dengan level sk pada waktu keluaran. Dalam ruang diskrit, tidak dapat dibuktikan secara umum bahwa transformasi diskrit ini akan menghasilkan ekuivalen diskrit dari fungsi kerapatan peluang seragam, yang akan menjadi histogram seragam.

<p align=center><img src=gambar/gambar27.png>

Terlihat jelas bahwa Pemerataan histogram mendistribusikan tingkat keabuan untuk mencapai tingkat keabuan maksimum (putih) karena fungsi distribusi kumulatif sama dengan 1 ketika 0 r L-1. Jika jumlah kumulatif tingkat keabuan sedikit berbeda, mereka akan dipetakan ke tingkat keabuan yang sedikit berbeda atau sama karena kita mungkin harus memperkirakan tingkat keabuan yang diproses dari gambar keluaran ke bilangan bulat. Dengan demikian fungsi transformasi diskrit tidak dapat menjamin hubungan pemetaan satu-satu.

### Histogram Grayscale dan Equalization

Contoh, hasilkan histogram yang diberikan gambar berikut (matriks yang diisi dengan bilangan bulat) dengan nilai skala abu-abu berkisar dari 0 hingga 7, yaitu, dengan setiap piksel dikodekan menjadi 3 bit.

<p align=center><img src=gambar/gambar28.png>

Karena gambar dikodekan menggunakan 3 bit untuk setiap piksel, kami memiliki nilai piksel mulai dari 0 hingga 7. Hitungan untuk setiap skala abu-abu tercantum pada Tabel 13.1

<p align=center><img src=gambar/gambar29.png>

Berdasarkan jumlah distribusi grayscale, histogram dibuat seperti yang ditunjukkan pada Gambar 13.11.

<p align=center><img src=gambar/gambar30.png>

Seperti yang bisa kita lihat, gambar memiliki piksel yang levelnya lebih terkonsentrasi dalam skala gelap dalam contoh ini. Dengan histogram, teknik pemerataan dapat dikembangkan. Equalization memperluas rentang skala level piksel ke rentang penuh untuk memberikan kontras yang lebih baik untuk gambar yang diberikan. Nilai piksel baru ditetapkan kembali menggunakan nilai yang diperoleh dengan mengalikan tingkat skala maksimum dengan rasio skala dari penghitungan akumulatif hingga nilai piksel gambar saat ini terhadap jumlah total piksel. 

Jelas, karena jumlah akumulasi dapat berkisar dari 0 hingga jumlah total piksel, nilai piksel yang disamakan dapat bervariasi dari 0 hingga tingkat skala maksimum. Karena prosedur akumulasi, nilai piksel tersebar di seluruh rentang dari 0 hingga tingkat skala maksimum (255).




https://www.tutorialspoint.com/dip/gray_level_transformations.html

http://nana.lecturer.pens.ac.id/index_files/materi/Teori_Citra/Pertemuan_3b.pdf


