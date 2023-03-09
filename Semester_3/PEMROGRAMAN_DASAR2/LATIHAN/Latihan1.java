public class Latihan1{
    public static void main (String[] args){
        int[] nilai = {15, 5, 20, 1, 7, 3, 8, 9};

        System.out.println(nilai[2]);
        System.out.println(nilai[6]);

        int min = nilai[0];
        for (int i=0; i < nilai.length; i++){
            if (nilai[i] < min) {
                min = nilai[i];
            }
        }
        System.out.println(min);
    }
}

