pkg load image;

%%a = imread('gambar1.jpg');
%%b = edge(a, 'sobel');
%%imshow (b);

%% this Matlab & Octave script detects wall and floor edges of a given room picture
%% get black & white image
img = double(imread("gambar1.jpg")) / 255;
subplot(2, 2, 1); imshow(img);

%% perform smoothing
filter_size = 25;
filter_sigma = 5;
filter = fspecial("gaussian", filter_size, filter_sigma);
smoothed = imfilter(img, filter);
subplot(2, 2, 2); imshow(smoothed);

% Compute x, y gradients
[gx, gy] = imgradientxy(smoothed, "sobel");
subplot(2, 2, 3); imshow((gx + 4) / 8); % or imshow(gx, [-4, 4]) or imshow(gy, []) or imagesc()

% Obtain gradient magnitude and direction
[gmag gdir] = imgradient(gx, gy);
%imshow(gmag / (4 * sqrt(2)));
subplot(2, 2, 4); imshow((gdir + 180) / 360);% angle in degrees [-180, 180]

%show floor and wall edges together
%imshow(gmag >= 0.1);

%show vertical only
%imshow(gmag >= 0.1 & (160 <= gdir | -160 >= gdir | (-20 <= gdir & gdir <= 20)));

%show horizontal only
%imshow(gmag >= 0.1 & ((75 <= gdir & 105 >= gdir) | (-105 <= gdir & gdir <= -75)));
