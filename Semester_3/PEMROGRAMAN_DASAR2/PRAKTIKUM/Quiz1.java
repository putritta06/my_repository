import java.util.Scanner;

public class Quiz1{
    public static void main (String [] args){
        int keranjang;
        int buah;
        int jumlah;
        Scanner keyboard = new Scanner (System.in);

        System.out.print("Jumlah keranjang : ");
        keranjang = keyboard.nextInt();

        System.out.print("Isi buah di dalam keranjang : ");
        buah = keyboard.nextInt();

        jumlah = keranjang * buah;

        System.out.println("Jumlah keranjang adalah  : " + keranjang);
        System.out.println("Jumlah buah di tiap keranjang adalah : " + buah);
        System.out.println("Total buah yang dimiliki : " + jumlah);

    }
}