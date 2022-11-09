foto = imread('C:/gambar/gambar3.jpg');
fgray = rgb2gray(foto);
[row,col] = size(foto);

pesan = "Putri Tari Lestari 2110131120002";
pAscii = uint8(pesan);
pBiner = dec2bin(pAscii,8);
pBiner = str2num(pBiner);

tPesan = transpose(pBiner);
tPesanA = tPesan(:);
tHasilP = transpose(tPesan);
panj = length(tHasilP);
counter = 1;

stegonography = fgray;
%stegonography = zeros(row,col);

for x = 1:row
for y = 1:col
  if (counter <= panj)
    LSB = bitget(fgray(x,y), 1);
    binerP = tHasilP(counter);
    temp = xor(LSB, binerP);
    stegonography(x,y) = fgray(x,y) + temp;
    counter = counter + 1;
  else
    break;
  endif
endfor
endfor

subplot(1,2,1); imshow(fgray); title('Gambar biasa');
subplot(1,2,2); imshow(stegonography, "hasil.jpg"); title('Stegonography');

