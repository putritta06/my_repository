img = imread("gambar7.jpg");
[img_height, img_width] = size(img);
d1 = [
	0 128;
	192 64
];
d2 = [
	0 128 32 160;
	192 64 224 96;
	48 176 16 144;
	240 112 208 80
];

threshold_img_d1 = repmat(d1, round(img_width/2), round(img_height/2));
threshold_img_d2 = repmat(d2, round(img_width/4), round(img_height/4));

dith_img_d1 = img > threshold_img_d1;
dith_img_d2 = img > threshold_img_d2;

%imshow(img); title("Citra Original");
%imshow(dith_img_d1); title("Hasil Dithering dengan D1");
%imshow(dith_img_d2); title("Hasil Dithering dengan D2");

subplot(1,3,1), imshow(img); title("Citra Original");
subplot(1,3,2), imshow(dith_img_d1); title("Hasil Dithering dengan D1");
subplot(1,3,3), imshow(dith_img_d2); title("Hasil Dithering dengan D2");

