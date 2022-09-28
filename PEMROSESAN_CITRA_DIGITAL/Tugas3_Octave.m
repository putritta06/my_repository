foto = imread('C:/gambar/gambar3.jpg');
subplot(1,4,1); imshow(foto);
red = foto(:,:,1);
green = foto(:,:,2);
blue = foto(:,:,3);

lightness = ((min(red, green, blue)) - (max (red, green, blue)))/2;
subplot(1,4,2); imshow(lightness);

average = (red + green + blue)/3;
subplot(1,4,3); imshow(average);

luminosity = (0.3*red) + (0.59*green) + (0.11*blue);
subplot(1,4,4); imshow(luminosity);

asci = uint8(foto);
asci


