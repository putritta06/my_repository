foto = imread('C:/gambar/gambar1.jpg');
tinggi_foto, lebar_foto = size(foto);

pesan = "halo";
ascii = uint8(pesan);
biner = dec2bin(ascii, 8); #supaya 8 digit (mengambil nilai biner)
biner = transpose(biner(:)) #ubah bentuk biner kolom ke biner baris
