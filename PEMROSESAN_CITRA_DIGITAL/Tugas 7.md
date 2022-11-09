## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Pemrosesan Citra Digital
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>

<h2 align=center><u>Image Enhancement Spacial Domain & Frekuency Domain</u></h2>

### Peningkatan Gambar di Domain Spasial dan Domain Frekuensi

Perbedaannya intinya :

Spatial Domain: Input -> Image Processing -> Output 

Frequency Domain: Frequency + Distribution -> Image Processing -> Inverse Transformation -> Output

### Image Enhancement in the Spatial Domain

Istilah domain spasial mengacu pada bidang gambar itu sendiri, dan metode dalam kategori ini didasarkan pada manipulasi langsung piksel dalam suatu gambar Domain spasial digunakan untuk menentukan koordinat spasial sebenarnya dari piksel dalam suatu gambar, jadi ketika kita menggunakan istilah ini dalam bisnis peningkatan gambar, kita berbicara tentang hal-hal seperti pemerataan, penghalusan, dan penajaman. 

Ada dua kategori penting dari pemrosesan domain yaitu, intensity (gray-level) transformations dan spatial filtering. Proses domain spasial dilambangkan dengan ekspresi : g(x, y) = T [f(x, y)] 

di mana f(x, y) adalah gambar input, g(x, y) adalah gambar output (proses.d), dan T adalah operator pada f didefinisikan di atas lingkungan tertentu tentang titik (x, y). Selain itu, T dapat beroperasi pada sekumpulan gambar, seperti melakukan penambahan gambar K untuk pengurangan noise.

### 1. Histogram Equalization

Ini adalah teknik peningkatan gambar umum yang terlihat untuk meningkatkan tampilan keseluruhan gambar. Bayangkan Anda memiliki gambar yang agak terlalu gelap, cukup umum dalam peningkatan gambar. Nah, fakta bahwa itu terlalu gelap memberi tahu kita bahwa keselarasan spasialnya berada di sisi bawah skala abu-abu. Jadi, merentangkan tingkat abu-abu itu akan menciptakan gambar yang lebih jelas karena menciptakan distribusi yang lebih seragam.

Fungsi transformasi intensitas berdasarkan informasi yang diekstraksi dari histogram intensitas citra memainkan peran sentral dalam pemrosesan citra, di bidang-bidang seperti peningkatan, kompresi, segmentasi, dan deskripsi. Fokus dari bagian ini adalah untuk mendapatkan, merencanakan, dan menggunakan histogram untuk peningkatan citra.

Peningkatan kontras pada sebuah citra disebabkan oleh penyebaran histogram yang cukup besar di seluruh skala intensitas.
Peningkatan intensitas secara keseluruhan disebabkan oleh fakta bahwa tingkat intensitas usia rata-rata dalam histogram gambar yang disamakan lebih tinggi (lebih ringan) dari aslinya. Pemerataan histogram menghasilkan suatu fungsi transformasi yang adaptif, dalam arti didasarkan pada histogram dari suatu citra tertentu. Namun, setelah fungsi transformasi untuk sebuah gambar dihitung, itu tidak berubah kecuali histogram gambar berubah.

<p align=center><img src=gambar/gambar63.png>

Hal yang sama berlaku untuk gambar yang terlalu terang. Keseimbangannya mungkin dimiringkan ke warna cerah tertentu, jadi menyamakan area gambar yang lebih gelap agar sesuai akan membuatnya lebih jelas.

### 2. Image Smoothing

Tujuan utama penghalusan gambar adalah untuk membantu meringankan gejala bahwa kamera dapat menyebabkan noise kamera, serta nilai piksel palsu dan hilang. Ada beberapa jenis perataan yang berbeda, jadi kami akan fokus pada proses yang dikenal sebagai rata-rata lingkungan.

Kamera terkadang dapat menyebabkan tepi gambar menjadi kabur, akibatnya frekuensi pita yang lebih tinggi pada gambar menjadi berkurang karena pencahayaan atau kondisi lingkungan lainnya. Jadi, para ahli akan menggunakan taktik profesional yang dikenal sebagai pemfilteran median untuk mengatur tingkat keabuan area tersebut ke nilai piksel yang sama di lingkungan yang sama (mendekati) piksel tersebut.

### 3. Spatial Filtering

Misal, diilustrasikan pemrosesan lingkungan terdiri dari 
1. memilih titik pusat, (x, y); 
2. melakukan operasi yang hanya melibatkan piksel di lingkungan yang telah ditentukan tentang (x, y); 
3. membiarkan hasil operasi itu menjadi "respons" dari proses pada saat itu ; dan 
4. mengulangi proses untuk setiap titik pada gambar. 

Proses pemindahan titik tengah menciptakan lingkungan baru, satu untuk setiap piksel pada gambar masukan. Dua istilah utama yang digunakan untuk mengidentifikasi operasi ini adalah pemrosesan lingkungan dan penyaringan spasial, dengan istilah kedua lebih umum. Jika komputasi yang dilakukan pada piksel-piksel tetangga adalah linier, maka operasi tersebut disebut penyaringan spasial linier (istilah konvolusi spasial juga digunakan); selain itu disebut penyaringan spasial nonlinier.

### a). Linear Spatial Filtering

Konsep penyaringan linier berakar pada penggunaan transformasi Fourier untuk pemrosesan sinyal dalam domain frekuensi operasi penyaringannya dilakukan langsung pada piksel gambar. Penggunaan istilah penyaringan spasial linier membedakan jenis proses ini dari penyaringan domain frekuensi.

<p align=center><img src=gambar/gambar64.png>

Ada dua konsep terkait erat yang harus dipahami dengan jelas ketika melakukan penyaringan spasial linier. Yaitu korelasi; dan konvolusi.

### b). Nonlinear Spatial Filtering 

Penyaringan spasial nonlinier juga didasarkan pada operasi ketetanggaan, dan mekanisme menggeser titik pusat filter melalui gambar. Namun, sementara pemfilteran spasial linier didasarkan pada penghitungan jumlah produk (yang merupakan operasi linier), pemfilteran spasial nonlinier didasarkan, seperti namanya, pada operasi nonlinier yang melibatkan piksel di lingkungan yang dicakup oleh filter. Misalnya, membiarkan respons di setiap titik pusat sama dengan nilai piksel maksimum di lingkungannya adalah operasi penyaringan nonlinier. Perbedaan mendasar lainnya adalah bahwa konsep topeng tidak lazim dalam pemrosesan nonlinier. Gagasan penyaringan terbawa, tetapi "filter" harus divisualisasikan sebagai fungsi nonlinier yang beroperasi pada piksel lingkungan, dan yang responsnya merupakan hasil dari operasi nonlinier

### Image Enhancement in the Frequency Domain

Gambar yang diedit dengan cara ini akan ditransfer ke domain frekuensi, di mana dimungkinkan untuk bekerja pada spektrum itu sendiri. Peningkatan gambar terjadi dalam transformasi Fourier gambar dari perspektif pengeditan, berkaitan dengan pengaburan, penajaman, kontras, dan distribusi abu-abu. Namun, hasilnya adalah nilai piksel juga akan meningkat saat transformasi terjadi.

Peningkatan citra dalam domain frekuensi sangatlah mudah yaitu menghitung transformasi Fourier dari gambar yang akan ditingkatkan, mengalikan hasilnya dengan filter (bukan menggulung dalam domain spasial), dan mengambil transformasi terbalik untuk menghasilkan gambar yang disempurnakan.

Ide mengaburkan gambar dengan mengurangi komponen frekuensi tinggi, atau mempertajam gambar dengan meningkatkan besarnya komponen frekuensi tinggi secara intuitif. Namun, secara komputasi, seringkali lebih efisien untuk mengimplementasikan operasi ini sebagai konvolusi oleh filter spasial kecil dalam domain spasial. Memahami konsep domain frekuensi adalah penting, dan mengarah pada teknik peningkatan yang mungkin tidak terpikirkan dengan membatasi perhatian pada domain spasial. Jenis gambar yang paling umum yang memerlukan jenis pengeditan ini adalah gambar satelit dan medis. 

### 1. Low-Pass Filtering (Blurring) Image Enhancement

Tepi dan transisi dalam nilai skala abu-abu gambar berkontribusi secara signifikan pada konten gambar yang ditemukan di frekuensi yang lebih tinggi. Dalam istilah awam, low-pass filtering akan membuat gambar menjadi lebih buram. Ada beberapa alasan mengapa Anda mungkin perlu memiliki gambar yang lebih buram. Pertama-tama, bahkan kamera kualitas tertinggi di dunia meninggalkan sejumlah noise. Jadi, pengaburan akan membantu menghilangkannya.

Penyaringan lolos rendah melibatkan penghapusan komponen frekuensi tinggi dalam gambar. Ini menghasilkan gambar yang kabur (dan dengan demikian pengurangan transisi tajam yang terkait dengan noise). Filter lolos rendah yang ideal akan mempertahankan semua komponen frekuensi rendah, dan menghilangkan semua komponen frekuensi tinggi. Namun, filter yang ideal mengalami dua masalah: kabur dan berdering. Masalah ini disebabkan oleh bentuk filter domain spasial terkait, yang memiliki sejumlah besar undulasi. Transisi yang lebih halus dalam filter domain frekuensi, seperti filter Butterworth, mencapai hasil yang jauh lebih baik.

Piksel yang berbeda akan terpengaruh oleh noise ini dengan cara yang berbeda karena mereka semua menghasilkannya secara berbeda. Jadi, menggunakan filter low-pass dapat menghilangkan banyak noise sementara hanya berdampak minimal pada gambar. Misalnya, gambar yang diambil dari teleskop akan memiliki gambar yang tersebar di banyak piksel, sehingga mengaburkan gambar sebagian besar akan berdampak pada noise.

<p align=center><img src=gambar/gambar56.png>

### 2. High-Pass Filtering (Sharpening) Image Enhancement

Filter lolos tinggi digunakan untuk mempertajam gambar dan merupakan bentuk umum lain dari peningkatan citra domain frekuensi. Metode ini berfokus pada detail yang lebih halus pada gambar dan melakukan kebalikan dari filter low-pass. Sayangnya, itu juga berarti bahwa itu meningkatkan kebisingan juga, harga yang diekstraksi untuk menajamkan konten.

Itu memberi tahu kita bahwa metode peningkatan gambar ini hanya boleh digunakan jika gambar mengandung noise minimal, jika tidak, mempertajamnya akan membuatnya jauh lebih buruk. Itu akan terlihat kasar dan tidak alami, jadi berhati-hatilah agar Anda tidak berlebihan.

### 3. Homomorphic filtering

Gambar biasanya terdiri dari cahaya yang dipantulkan dari objek. Sifat dasar dari gambar F(x,y) dapat dicirikan oleh dua komponen: 
1.  jumlah sumber cahaya yang datang pada pemandangan yang sedang dilihat
2.  jumlah cahaya yang dipantulkan oleh objek dalam pemandangan. Bagian cahaya ini disebut komponen iluminasi dan reflektansi, dan masing-masing dilambangkan dengan i(x,y) dan r(x,y). Fungsi i dan r digabungkan secara perkalian untuk menghasilkan fungsi gambar F.

<p align=center><img src=gambar/gambar57.png>

<p align=center><img src=gambar/gambar58.png>

<p align=center><img src=gambar/gambar59.png>

Kita tidak dapat dengan mudah menggunakan produk di atas untuk beroperasi secara terpisah pada komponen frekuensi iluminasi dan refleksi karena transformasi Fourier dari produk dua fungsi tidak dapat dipisahkan; itu adalah

<p align=center><img src=gambar/gambar60.png>

Jika sekarang kita menerapkan filter dengan fungsi transfer yang menekan komponen frekuensi rendah dan meningkatkan komponen frekuensi tinggi, maka kita dapat menekan komponen iluminasi dan meningkatkan komponen reflektansi. Dengan demikian

<p align=center><img src=gambar/gambar61.png>

Dengan demikian, proses penyaringan homomorfik dapat diringkas dengan diagram berikut:

<p align=center><img src=gambar/gambar62.png> 