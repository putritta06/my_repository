add = @(a,b) a+b'
times = @(a,b) printf("hasil = %d", a,b);

function mines = calculate_min_val(a,b)
  mines = add(a,b)/2
end


function minesOne = calculate_min_val(a)
  for i = 1:columns (a)
  a(i) = add(a)(i), 1:
  end
end

function cih = add(a,b)
  cih = a+b
end
