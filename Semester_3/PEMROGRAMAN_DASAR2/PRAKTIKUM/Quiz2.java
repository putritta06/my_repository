import java.util.Scanner;

public class Quiz2{
    public static void main (String [] args){
        int lahir;
        int umur;
        int tahun;
        Scanner keyboard = new Scanner (System.in);

        System.out.print("Tahun lahir : ");
        lahir = keyboard.nextInt();

        System.out.print("Umur di tahun : ");
        tahun = keyboard.nextInt();

        umur = tahun - lahir;

        System.out.println("Saya lahir pada tahun " + lahir + " dan akan berumur " + umur + " tahun pada tahun " + tahun);

    }
}