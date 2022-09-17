import java.util.Scanner;

// public class Praktikum2_tugas{
//     public static void main(String [] args){
//         Scanner keyboard = new Scanner (System.in);
//         String Nama;
//         int Umur;

//         System.out.print("Nama : ");
//         Nama = keyboard.nextLine();

//         System.out.print("Umur : ");
//         Umur = keyboard.nextInt();

//         System.out.println();
//         System.out.println("Nama saya " + Nama + ". Sekarang saya berumur " + Umur + " tahun.");
//     }
// }

// public class Praktikum2_tugas{
//     public static void main(String [] args) {
//         Scanner keyboard = new Scanner(System.in);
//         int a, b, c;

//         System.out.print("Bilangan bulat pertama : ");
//         a = keyboard.nextInt();
//         System.out.print("Bilangan bulat kedua : ");
//         b = keyboard.nextInt();

//         c = a + b;
//         System.out.println();
//         System.out.println("Hasil penjumlahan dari " + a + " dan " + b + " adalah " + c);
//     }
// }

public class Praktikum2_tugas{
    public static void main(String [] args){
        int a = 5;
        int b = 10;

        b += a;
        System.out.println("Penambahan : " + b);

        b -= a;
        System.out.println("Pengurangan : " + b);

        b *= a;
        System.out.println("Perkalian : " + b);

        b /= a;
        System.out.println("Pembagian : " + b);

        b %= a;
        System.out.println("Sisa bagi : " + b);
    }
}