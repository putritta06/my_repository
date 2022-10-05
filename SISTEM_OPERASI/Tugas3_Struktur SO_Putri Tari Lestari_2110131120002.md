## Nama           : Putri Tari Lestari
## NIM            : 2110131120002
## Matkul         : Sistem Operasi
## Dosen Pengampu : Dr. Harja Santana Purba, M.Kom
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Novan Alkaf Bahraini Saputra, S.Kom., M.T</h2>
<br>
<br>
<h1 align=center>Struktur Sistem Operasi</h1>
<br>
<br>

### Struktur Sederhana

Pada awalnya, sistem operasi dimulai sebagai sistem yang kecil, sederhana, dan terbatas. Contohnya MS-DOS,  Sistem operasi ini dirancang sedemikian rupa agar mampu berjalan pada hardware yang terbatas. Memang memiliki struktur, tapi belum terbagi-bagi dalam modul-modul, dan interface serta fungsionalitas tidak begitu jelas batasannya.

Begitu pula dengan UNIX, yang pada awalnya juga terbatas oleh hardware yang ada. Sistem ini dapat dibagi menjadi dua bagian, yaitu kernel dan program sistem. Kernel sendiri dapat dibagi menjadi dua bagian, yaitu device driver dan interface, yang kemudian terus berkembang seiring dengan perkembangan UNIX. Berikut ini adalah skema struktur UNIX.

 > (the users) 
 > shells and commands compilers and interpretes system libraries
 > system call interface to the kernel
 >> signals terminals handling character I/O stream terminal drivers
 >> File system swapping block I/O system disk and tape drivers
 >> CPU scheduling page replacement demand paging virtual memory
 > kernel interface to the hardware
 >> terminal controllers terminals 
 >> device controllers disks and tapes
 >> memory controllers Physical memory

 Struktur sistem operasi monolitik hanya dapat digunakan pada beberapa perangkat keras saja. Hal ini disebabkan karena sistem operasi monolotik dilengkapi dengan operasi dual mode dan pelayanan system calls. Namun, Intel 8088 tidak dapat menggunakan dual mode sehingga tidak akan ada proteksi pada perangkat keras yang digunakan.

 Secara umum, system calls pada sistem operasi monolitik dibuat dengan cara :

- User program melakukan trap pada kernel
- Instruksi akan berpindah dari user mode ke monitor mode
- Kontrol akan berpindah ke sistem operasi dan otomatis akan memeriksa setiap parameter dari pemanggilan tersebut
- Sistem operasi akan menuju ke tabel yang berisikan slot ke -k yang menunjukkan system call k
- Setelah selesai, kontrol akan dikembalikan ke user program

 ### Struktur Berlapis

 Sistem operasi berlapis memiliki beberapa lapis yang beragam, mulai dari bagian atas hingga bagian bawah. Masing-masing lapisan ini memiliki fungsi dan tujuannya tersendiri yang saling mendukung satu sama lain. Lapisan paling bawah digunakan untuk perangkat keras, sedangkan lapisan paling atas digunakan untuk user interface.
 
 Lapisan-lapisan sistem operasi adalah suatu abstraksi dari enkapsulasi sekumpulan struktur data dalam sistem operasi. Lapisan-lapisan yang berada di atas bisa mengakses operasi-operasi yang tersedia di lapisan-lapisan bawahnya. Stallings memberi model yang lebih detail, sebagai berikut: 
 - Lapisan 1. Berisi berbagai sirkuit elektronik, misal register, memory cells, dan logic gate. 
 - Lapisan 2. Berisi instruksi prosesor, misal instruksi aritmatika, instruksi transfer data, dsb. 
 - Lapisan 3. Penambahan konsep seperti prosedur/subrutin, maupun fungsi yang me-return nilai tertentu. 
 - Lapisan 4. Penambahan interrupt. 
 - Lapisan 5. Program sebagai sekumpulan instruksi yang dijalankan oleh prosesor. 
 - Lapisan 6. Berhubungan dengan secondary storage device, yaitu membaca/menulis head, track, dan sektor. 
 - Lapisan 7. Menciptakan alamat logika untuk proses. Mengatur hubungan antara main memory, virtual memory, dan secondary memory. 
 - Lapisan 8. Program sebagai sekumpulan instruksi yang dijalankan oleh prosesor. 
 - Lapisan 9. Berhubungan dengan secondary storage device, yaitu membaca/menulis head,track, dan sektor. 
 - Lapisan 10. Menciptakan alamat logika untuk proses. Mengatur hubungan antara main memory, virtual memory, dan secondary memory. 
 - Lapisan 11. Program sebagai sekumpulan instruksi yang dijalankan oleh prosesor. 
 - Lapisan 12. File adalah objek yang memiliki nama dan ukuran. Abstraksi dari lapisan 9. 
 - Lapisan 13. Menyediakan interface agar bisa berinteraksi dengan pengguna.

Lapisan-lapisan dari 1-4 bukanlah bagian dari sistem operasi dan masih menjadi bagian dari prosesor secara ekslusif.
Lapisan ke-5 hingga ke-7, sistem operasi sudah berhubungan dengan prosesor. Selanjutnya dari lapisan ke-8 hingga 13, sistem operasi berhubungan dengan media penyimpanan maupun perlatan-peralatan lain yang ditancapkan, misalnya peralatan jaringan.

Beberapa jenis lapisan yang digunakan dalam sistem operasi berlapis adalah :

1. Lapisan Perangkat Keras

Lapisan perangkat keras merupakan lapisan paling bawah pada sistem operasi berlapis. Lapisan ini terdiri dari sirkuit elektronik yang berfungsi untuk membersihkan register ataupun membaca lokasi memori, set instruksi pada prosesor, serta interupsi yang berisikan perintah yang dijalankan.

2. Lapisan Sistem Operasi

Lapisan sistem operasi merupakan sebuah lapisan yang berhubungan secara langsung dengan program spesifik pada bagian sistem operasinya. Lapisan ini memiliki kerja yang bersifat teknis dan terdiri dari penyimpanan sekunder komputer, ide dalam eksekusi program, dan lamat logic dari setiap proses yang berlangsung. Kode program sangat diperlukan pada lapisan ini agar dapat terlaksanakan dengan benar dan sesuai dengan yang diharapkan.

3. Lapisan Kelengkapan

Lapisan kelengkapan masih berhubungan dengan program karena termasuk dari kelengkapan sebuah sistem operasi. Lapisan ini memiliki tugas utama sebagai pengaturan komunikasi informasi yang berlangsung, termasuk menerima pesan-pesan dan proses pengirimannya. Lapisan ini juga memiliki tugas dalam penyimpanan jangka panjang, menyediakan akses pada perangkat keras eksternal yang menggunakan user interface standar, dan bertanggung jawab dalam hubungan identifier internal atau eksternal.

4. Lapisan Program Aplikasi
/d
Lapisan program aplikasi bertujuan untuk menghubungkan pengguna dengan aplikasi yang digunakan, dimana sangat berhubungan erat dengan user interface. Lapisan inin akan memproses segala informasi yang dibutuhkan oleh pengguna dalam aplikasi.

### Mikro Kernel

Kernel adalah komponen sentral dari sistem operasi. Ia mengatur hal-hal seperti interrupt handler(untuk menyediakan layanan interupsi), process scheduler(membagi-bagi proses dalam prosesor), memory management, I/O, dan sebagainya. Atau dengan kata lain, ia adalah jembatan antara hardware dengan software. Cara tradisional untuk membangun sistem operasi adalah dengan membuat kernel monolitis, yaitu semua fungsi disediakan oleh kernel, dan ini menjadikan kernel suatu program yang besar dan kompleks.

Cara yang lebih modern, adalah dengan menggunakan kernel mikro. Pada awalnya, konsep mikro kernel dikembangkan pada sistem operasi Mach. Ide dasar dari pengembangan kernel mikro adalah bahwa hanya fitur-fitur yang perlu saja yang diimplementasikan dalam kernel (mengenai fitur-fitur apa saja yang perlu diimplementasikan, ini bisa berbeda tergantung desain sistem operasi).

Komponen-komponen sistem operasi yang berada di luar kernel mikro diimplementasikan sebagai server process dan berkomunikasi dengan message passing via kernel mikro. Misalnya jika user ingin membuat berkas baru, dia mengirim pesan ke file system server, atau jika ingin membuat proses baru, dia mengirimkan pesan ke process server.

Beberapa kelebihan kernel mikro: 
 1. Interface yang seragam. Proses tidak lagi dibedakan, baik antara kernel-level maupun userlevel, karena semuanya berkomunikasi via message passing. 
 2. Extensibility . Bisa menambahkan fitur-fitur baru tanpa perlu melakukan kompilasi ulang. 
 3. Flexibility . Fitur-fitur yang sudah ada bisa dikurangi, atau dimodifikasi sesuai dengan kebutuhan sehingga menjadi lebih efisien. Misalnya tidak semua pengguna membutuhkan security yang sangat ketat, atau kemampuan untuk melakukan distributed computing. 
 4. Portability . Pada kernel mikro, semua atau sebagian besar kode yang prosesor-spesifik berada di dalamnya. Jadi, proses porting ke prosesor lain bisa dilakukan dengan relatif sedikit usaha. Pada kelompok desktop misalnya, tampaknya dominasi Intel makin kuat. Tapi, sampai seberapa lama itu bisa bertahan? Karena itulah, portability adalah salah satu isu yang sangat penting. 
 5. Reliability . Semakin besar suatu software, maka tentulah semakin sulit untuk menjamin reliability-nya. Desain dengan pendekatan berlapis sangatlah membantu, dan dengan pendekatan kernel mikro bisa lebih lagi. Kernel mikro dapat dites secara ekstensif .Karena dia menggunakan API yang sedikit, maka bisa meningkatkan kualitas code di luar kernel. 
 6. Support for object-oriendted OS . Model kernel mikro sangat sesuai untuk mengembangkan sistem operasi yang berbasis object-oriented. 

 Beberapa sistem operasi yang menerapkan mikro kernel adalah :

- Tru64 UNIX
- MacOSX
- QNX

Sumber :
<a href="https://dosenit.com/ilmu-komputer/struktur-sistem-operasi">Sutiono S.Kom., M.Kom., M.T.I</a>
