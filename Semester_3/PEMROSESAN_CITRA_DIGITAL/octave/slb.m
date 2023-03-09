A = [23, 142; 54, 210]

#for x = 1:2
  #for y = 1:2
   # printf("%d/n", A(x,y));
  #endfor
#endfor

for x = 1:2
  for y = 1:2
    A(x,y) = bitget(A(x,y),1);
  endfor
endfor

for x = 1:2
  for y = 1:2
    A(x,y) = bitget(A(x,y), 8:-1:1);
  endfor
endfor

foto = imread('C:/gambar/gambar3.jpg');
gray = rgb2gray(foto);
imshow(gray);

fotoLa = foto[13, 142; 32, 210]

for x = 1:4
  for y = 1:4
    hasil(x,y) = bitget(foto(x,y), 1);
  endfor
end

for x = 1:rows(fotoLa)
  for y = 1:columns(fotoLa)
    hasil(x, y) = bitget(fotoLa(x, y), 2);
  endfor
end

