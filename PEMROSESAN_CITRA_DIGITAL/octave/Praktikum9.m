#foto = imread('C:/gambar/gambar2.png');
#gray = rgb2gray(foto);
#fotoH = histeq(foto);
#imshow(foto);
#imhist(gray);

pkg load image;

#foto = imread('C:/gambar/gambar3.jpg'); #harus grayscale
#histF = histeq(foto);

#subplot(2,2,1); imshow(foto);
#subplot(2,2,2); imhist(foto);

#misal
# img =

img = [0 2 1 5; 5 0 1 4; 4 7 7 3; 0 1 1 2];
img(:) == 0 #berapakah jumlah angka nol
# nilai satu artinya true, itu yang dihitung
sum(img(:) == 0);

[img_heigt, img_width] = size(img);
total_piksel = img_width * img_heigt;
# max_piksel = max(max(img);

frekuensi_kumulatif = 0

for i = 0:max_piksel
  # mendapat frekuensi
  frekuensi_piksel = sum(img(:) = i);

  # mendapat kumulatif
  frekuensi_kumulatif = frekuensi_kumulatif + frekuensi_piksel;

  # normalisasi
  norm = frekuensi_kumulatif / total_piksel;

  # mendapat nilai piksel baru
  new_piksel = round(nomr * 7);
  # new = round(norm * max_piksel); (untuk yang max dalam matriks tidak static)

  #ubah nilai piksel lama jadi baru
  #hist_img(img == 0) = 100;
  hist_img(img == i) = new_piksel;

endfor #lihat nilai maksimuk di dalam matrik ada berapa jumlahnya.


