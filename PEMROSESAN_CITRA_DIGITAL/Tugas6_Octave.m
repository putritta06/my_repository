foto = imread('C:/gambar/gambar1.jpg');
gray = rgb2gray(foto);

for x = 1:rows(gray)
  for y = 1:columns(gray)
    bitplane(x, y) = bitget(gray(x, y), 8);
  endfor
endfor

imshow(bitplane);


