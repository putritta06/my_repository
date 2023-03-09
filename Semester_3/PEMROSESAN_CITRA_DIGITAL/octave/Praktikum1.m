foto = imread('C:/gambar/gambar3.jpg');
R = foto(:,:,1);
G = foto(:,:,2);
B = foto(:,:,3);
Grayscale = (0.3*R) + (0.59*G) + (0.11*B);

for i = 2:2length(Grayscale)
  for j = 2:2:length(Grayscale)
    if (Grayscale(i,j) < 128)
      Grayscale(i,j) = 0;
     elseif (Grayscale(i,j) >= 128)
      Grayscale(i,j) = 255;
    endif
  endfor
endfor

subplot(1,2,1), imshow(foto);
subplot(1,2,2), imshow(Grayscale);


red = cat(3, R, G*0, B*0);
green = cat(3,R*0, G, B*0);
blue = cat(3, R*0, G*0, B);
#subplot(1,4,1); imshow(foto);
#subplot(1,4,2); imshow(red);
#subplot(1,4,3); imshow(green);
#subplot(1,4,4); imshow(blue);

#subplot(2,3,1); imshow(red);
#subplot(2,3,2); imshow(green);
#subplot(2,3,3); imshow(blue);
