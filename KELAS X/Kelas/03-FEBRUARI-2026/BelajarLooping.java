public class BelajarLooping {
    public static void main(String[] args) {
        for (int a=0; a<=5; a++)
                System.out.println("nafilah");
        int tinggi = 5;

        System.out.println("SEGITIGA RATA KIRI");
        for (int i = 1; i <= tinggi; i++) {
            for (int j = 1; j <= i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }

        System.out.println("\nSEGITIGA RATA KANAN TERBALIK");
        for (int i = tinggi; i >= 1; i--) {
            for (int j = i; j < tinggi; j++) {
                System.out.print(" ");
            }
            for (int k = 1; k <= i; k++) {
                System.out.print("*");
            }
            System.out.println();
        }

        System.out.println("\nSEGITIGA RATA KIRI TERBALIK");
        for (int i = tinggi; i >= 1; i--) {
            for (int j = 1; j <= i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }
    }
}
