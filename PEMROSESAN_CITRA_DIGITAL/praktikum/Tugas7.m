pkg load image;

img = imread('gambar.PNG');
noisy = imnoise(img, 'salt & pepper', 0.1);
[m n] = size(noisy);


output = zeros(m,n);
output = uint8(output);

for i = 1:m
  for j = 1:n
    xmin = max(1, i-1);
    xmax = min(m, i+1);
    ymin = max(1, j-1);
    ymax = min (m, j+1);
    temp = noisy(xmin:xmax, ymin:ymax);
    output(i,j) = median(temp(:));
  end
end


figure(1);
set(gcf, 'Position', get(0, 'ScreenSize'));
subplot(1,3,1), imshow(img), title('Origininal Image');
subplot(1,3,2), imshow(noisy), title('Noisy Image');
subplot(1,3,3), imshow(output), title('Output of Median Filter');
