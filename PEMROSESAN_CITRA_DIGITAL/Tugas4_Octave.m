foto = imread('C:/gambar/gambar3.jpg');
red = foto(:,:,1);
green = foto(:,:,2);
blue = foto(:,:,3);
foto_imadjust = imadjust(foto);
foto_histeq = histeq(foto);
foto_adapthisteq = adapthisteq(foto);

subplot(1,4,1); imshow(foto);
subplot(1,4,2); imshow(foto_imadjust);
subplot(1,4,3); imshow(foto_histeq);
subplot(1,4,4); imshow(foto_adapthisteq);
