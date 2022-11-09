foto = imread('C:/gambar/gambar3.jpg');
#imshow(foto);
R = foto(:,:,1);
G = foto(:,:,2);
B = foto(:,:,3);

red = cat(3, R, G*0, B*0);
green = cat(3,R*0, G, B*0);
blue = cat(3, R*0, G*0, B);

#subplot(1,3,1); imshow(R);
#subplot(1,3,2); imshow(G);
#subplot(1,3,3); imshow(B);
#subplot(2,3,1); imshow(red);
#subplot(2,3,2); imshow(green);
#subplot(2,3,3); imshow(blue);

threshold = 128;
gray = rgb2gray(foto);

for x = 1:rows(gray)
  for y = 1:columns(gray)
    if foto(x, y) > threshold
      foto(x, y) = 255;
     else
      foto(x, y) = 0;
    end
  end
 end

imshow(gray);
