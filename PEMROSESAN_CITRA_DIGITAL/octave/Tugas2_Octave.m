pict = imread('C:/gambar/gambar2.png');
imshow(pict);
red = pict(:,:,1);
green = pict(:,:,2);
blue = pict(:,:,3);
merah = cat(3,red,green*0,blue*0);
hijau = cat(3,red*0,green,blue*0);
biru = cat(3,red*0,green*0,blue);

figure(1);
subplot(1,2,1);imshow(pict);title('gambar');
subplot(2,2,1);imhist(pict);title('gambar');
figure(3);
subplot(1,2,1);imshow(merah);title('gambar');
subplot(2,2,1);imhist(hijau);title('gambar');
figure(2);
subplot(1,2,1);imshow(biru);title('gambar');
subplot(2,2,1);imhist(hijau);title('gambar');
figure(1);
subplot(1,2,1);imshow(gambar2 );title('gambar');
subplot(2,2,1);imhist(hijau);title('gambar');
