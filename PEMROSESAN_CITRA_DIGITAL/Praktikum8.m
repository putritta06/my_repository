foto = imread('C:/gambar/gambar1.jpg');
[tinggi_foto, lebar_foto] = size(foto);

pesan = "alo";
panjang = length(pesan * 8);
ascii = uint8(pesan);
biner = dec2bin(ascii, 8); #supaya 8 digit (mengambil nilai biner)
biner = transpose(biner(:)) #ubah bentuk biner kolom ke biner baris

#stego = zeros(tinggi_foto, lebar_foto); untuk mencari tahu di mana letak kata yang tersimpan di balik gambar
#jadi nanti hasilnya adalah sisa gambar yang menunjukkan tempatnya

counter = 1;

for x = 1:tinggi_foto
  for y = 1:lebar_foto
    if (counter <= panjang)
      LSB = bitget(foto(x, y), 1);
      BPS = biner(counter); #biner pesan sekarang
      temp = xor(LSB, BPS);
      foto(x, y) = foto(x, y) + temp;
      counter = counter + 1;
     else
      break;
    endif
  endfor
endfor

# kalo sama berarti 0, kalo beda berarti 1. Entah untuk yang apa.
