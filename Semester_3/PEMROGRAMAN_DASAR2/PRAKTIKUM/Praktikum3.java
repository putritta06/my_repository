import java.util.Scanner;

// public class Praktikum3{
//     public static void main (String [] args){
//         Scanner keyboard = new Scanner(System.in);
//         int angka;

//         System.out.print("Masukkan angka : ");
//         angka = keyboard.nextInt();

//         if(angka%2==0){
//             System.out.print(angka + " adalah bilangan genap");
//         } else{
//             System.out.print(angka + " adalah bilangan ganjil");
//         }
//     }
// }

// public class Praktikum3{
//     public static void main (String [] args){
//         Scanner keyboard = new Scanner(System.in);
//         int angka;

//         System.out.print("Masukkan angka : ");
//         angka = keyboard.nextInt();

//         if(angka<5){
//             System.out.println("A");
//         } else if (angka>5 && angka<10){
//             System.out.println("B");
//         } else if (angka==10 || angka==5){
//             System.out.println("C");
//         } else{
//             System.out.println("D");
//         }
//     }
// }

// public class Praktikum3{
//     public static void main (String [] args){
//         Scanner keyboard = new Scanner(System.in);
//         int op;

//         System.out.println("=========================");
//         System.out.println("JENIS OPERATOR SELULER");
//         System.out.println("1. XL \t\t 3. Tri");
//         System.out.println("2. Telkomsel \t 4. IM3");
//         System.out.println("========================");

//         System.out.println("");
//         System.out.print("Masukkan nomor jenis operator seluler yang Anda pilih : ");
//         op = keyboard.nextInt();

//         switch(op){
//             case 1:
//                 System.out.println("Anda memilih XL");
//                 break;
//             case 2:
//                 System.out.println("Anda memilih Telkomsel");
//                 break;
//             case 3:
//                 System.out.println("Anda memilih Tri");
//                 break;
//             case 4:
//                 System.out.println("Anda memilih IM3");
//                 break;
//             default:
//                 System.out.println("Jenis operator tidak tersedia dalam list");
//         }
//     }
// }

public class Praktikum3{
    public static void main (String [] args){
        Scanner keyboard = new Scanner(System.in);
        int angka;

        System.out.print("Masukkan angka : ");
        angka = keyboard.nextInt();

        if(angka>=86){
            System.out.println("A");
        } else if (angka>=81 || angka==85){
            System.out.println("A-");
        } else if (angka>=76 || angka==80){
            System.out.println("B+");
        } else if (angka>=71 || angka==75){
            System.out.println("B");
        } else if (angka>=66 || angka==70){
            System.out.println("B-");
        } else if (angka>=61 || angka==65){
            System.out.println("C+");
        } else if (angka>=56 || angka==60){
            System.out.println("C");
        } else if (angka>=51 || angka==55){
            System.out.println("C-");
        } else if (angka>=46 || angka==50){
            System.out.println("D");
        } else if (angka<=45){
            System.out.println("E");
        }
    }
}