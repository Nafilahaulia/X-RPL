
public class BelajarOperator {

    
    public static void main(String[] args) {
        // Operator Arimatika
        
        int a=10;
        int b=3;
        int penjumlahan= a+b;
        System.out.println("Hasil penjumlahan 2 angka adalah : "+penjumlahan);
            
//        int c=10;
//        int d=3;
        int pengurangan= a-b;
        System.out.println("Hasil pengurangan 2 angka adalah : "+pengurangan);
        
//        int e=10;
//        int f=3;
        int perkalian= a*b;
        System.out.println("Hasil perkalian 2 angka adalah : "+perkalian);
        
//        int g=9;
//        int h=3;
        int pembagian= a/b;
        System.out.println("Hasil pembagian 2 angka adalah : "+pembagian);
        
//        int i=10;
//        int j= 3;
        int modulo= a%b;
        System.out.println("Hasil modulo 2 angka adalah : "+modulo);
        
        //Operator penugasan
        //= memberi nilai
        //+= penjumlahan nilai
        //-= pengurangan nilai
        //*= perkalian nilai
        // /= pembagian nilai
        // %= modulo nilai (sisa dari pembagian)
        
        int c=20;
        int d=30;
        int e=100;
        
        c +=5;
        a -=2;
        b *=100;
        d /=3;
        e %=8;
        
        
        System.out.println(c);
        System.out.println(a);
        System.out.println(b);
        System.out.println(d);
        
        //Operator pembandingan
        
        int f=50;
        int g=10;
        
        boolean hasil= f==g;
        boolean hasil1= f>=g;
        boolean hasil2= f!=g;
        boolean hasil3= f<=g;
        
        System.out.println(hasil);
        System.out.println(hasil1);
        System.out.println(hasil2);
        System.out.println(hasil3);
        
        //Operator logika
        boolean result = true && true;
        boolean result2 = f>g && f==g;
        boolean result3 = true || true;
        boolean result4 = f!=e || f<g;
        
        System.out.println("operator logika-1 "+result);
        System.out.println("operator logika-2 "+result2);
        System.out.println("operator logika-3 "+result3);
        System.out.println("operator logika-4"+result4);
        
        
        
    }
    
}
