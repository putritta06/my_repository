pkg load image;


foto = imread("gambar1.jpg");
hist_foto = foto;

total_piksel = rows(foto) * columns(foto);
max_piksel = max(max(foto));

fk = 0;
for i = 0:max_piksel
	frekuensi_piksel = sum(foto(:) == i);
	fk = fk + frekuensi_piksel;
	norm_piksel = fk / total_piksel;
	new_piksel = round(norm_piksel * max_piksel);
	hist_foto(foto == i) = new_piksel;
end

subplot(2, 2, 1);
imshow(foto);

subplot(2, 2, 2);
imhist(foto);

subplot(2, 2, 3);
imshow(hist_foto);

subplot(2, 2, 4);
imhist(hist_foto);

