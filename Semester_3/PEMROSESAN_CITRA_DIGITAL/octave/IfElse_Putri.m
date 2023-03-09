nilai = input('Masukkan nilai : ');

if nilai >= 81
  if nilai <= 100
  printf("Kamu dapat nilai A\n");
end

 elseif nilai >= 61
  if nilai <= 80
  printf("Kamu dapat nilai B\n");
end

 elseif nilai >= 51
  if nilai <= 60
  printf("Kamu dapat nilai C\n");
end

 else
  printf("Kamu dapat nilai D\n");
 end

data = [1, 4, 6, 8, 10, 12];
for i = data
  printf("%d\n", i*2);
end

nilai = [
  70, 80, 90, 75, 66, 89, 55, 89;
  55, 55, 70, 65, 80, 61, 44, 90;
  44, 66, 20, 90, 68, 45, 44, 100
 ];
tanya = input("Masukkan nilai : ");
simpan = 0;

 for i = nilai(1:24)
   if(i>tanya)
      simpan = simpan + 1;
   else
   end
 endfor

 if (simpan == 0)
   printf("Nilai yang besar dari %d tidak ada", tanya);
 else
   printf("Nilai yang besar dari %d sebanyak = %d", tanya, simpan);
 endif


