public class OperasiMatematika {

    // Method 1: Perkalian dua bilangan bulat (int)
    public int perkalian(int a, int b) {
        return a * b;
    }

    // Method 2: Perkalian tiga bilangan bulat (int)
    public int perkalian(int a, int b, int c) {
        return a * b * c;
    }

    // Method 3: Perkalian dua bilangan desimal (double)
    public double perkalian(double a, double b) {
        return a * b;
    }

    public static void main(String[] args) {
        OperasiMatematika hitung = new OperasiMatematika();

        // Memanggil method pertama
        System.out.println("Hasil 5 x 4       : " + hitung.perkalian(5, 4));

        // Memanggil method kedua
        System.out.println("Hasil 2 x 3 x 4   : " + hitung.perkalian(2, 3, 4));

        // Memanggil method ketiga
        System.out.println("Hasil 2.5 x 4.2   : " + hitung.perkalian(2.5, 4.2));
    }
}