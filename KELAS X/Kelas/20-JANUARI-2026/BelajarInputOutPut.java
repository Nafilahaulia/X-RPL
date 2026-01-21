
import java.util.Scanner;

public class BelajarInputOutPut {

    public static void main(String[] args) {
        
        Scanner inputUser= new Scanner(System.in);
            System.out.print("Inputkan Nama Anda: ");
        String nama= inputUser.nextLine();
            System.out.println("Nama yang diinput: "+nama);
            
            System.out.print("Berapakah Nomor absen anda: ");
        int absen= inputUser.nextInt();
            System.out.println("Nomor Absen anda: "+absen);
            
            System.out.print("Berapa uang saku anda: ");
        double uang= inputUser.nextDouble();
        System.out.println("Uang saku anda: Rp."+uang);
            
        Scanner masukan= new Scanner(System.in);
            System.out.print("Character yang kamu sukai: ");
        String simbol= masukan.nextLine();
            System.out.println("Character yang kamu suka "+simbol);
            
            
        
        
    }
    
}
