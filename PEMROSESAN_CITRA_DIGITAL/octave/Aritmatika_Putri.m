function [tambah, kurang, kali, bagi]=Aritmatika_Putri(a,b)
  tambah = a+b;
  kurang = a-b;
  kali = a*b;
  bagi = a/b;
  fprintf ("%d + %d = %d)\n", a, b, tambah);
  fprintf ("%d - %d = %d)\n", a, b, kurang);
  fprintf ("%d * %d = %d)\n", a, b, kali);
  fprintf ("%d / %d = %d)\n", a, b, bagi);
  end
