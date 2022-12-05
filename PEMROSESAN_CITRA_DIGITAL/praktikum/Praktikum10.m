img = imread("gambar2.jpg");
[img_height, img_width] = size(img);

kuantisasi = round(9/255 * img);

pattern_img = zeros(3*img_width);

for x = 1:img_height
  for y = 1:img_width
    index = kuantisasi(x,y) + 1;
    pattern = fungsi(index);

    n = 1 + 3*(x - 1);
    m = 1 + 3*(y - 1);
    pattern_img(m:m + 2, n:n +2) = pattern;
  endfor
endfor

subplot(1,2,1); imshow(img);
subplot(1,2,2); imshow(pattern_img);
