function output = fungsi(index)

  pattern(1:3, 1:3, 1) = [
    0, 0, 0;
    0, 0, 0;
    0, 0, 0;
  ];

  pattern(1:3, 1:3, 2) = [
    0, 0, 0;
    0, 0, 0;
    0, 0, 1;
  ];

  pattern(1:3, 1:3, 3) = [
    1, 0, 0;
    0, 0, 0;
    0, 0, 1;
  ];

  pattern(1:3, 1:3, 4) = [
    1, 0, 1;
    0, 0, 0;
    0, 0, 1;
  ];

  pattern(1:3, 1:3, 5) = [
    1, 0, 1;
    0, 0, 0;
    1, 0, 1;
  ];

  pattern(1:3, 1:3, 6) = [
    1, 0, 1;
    0, 0, 0;
    1, 1, 1;
  ];

  pattern(1:3, 1:3, 7) = [
    1, 0, 1;
    1, 0, 0;
    1, 1, 1;
  ];

  pattern(1:3, 1:3, 8) = [
    1, 1, 1;
    1, 0, 0;
    1, 1, 1;
  ];

  pattern(1:3, 1:3, 9) = [
    1, 1, 1;
    1, 0, 1;
    1, 1, 1;
  ];

  pattern(1:3, 1:3, 10) = [
    1, 1, 1;
    1, 1, 1;
    1, 1, 1;
  ];

  output = pattern(:, :, index);
end
