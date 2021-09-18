import java.util.Scanner;
public class project01 {
    public static void main(String[] args) {
        System.out.println("Welcome to my App\n--------------------");
        System.out.println();
        
        Scanner sc = new Scanner(System.in);
        
        String choice = "y";
        while (choice.equalsIgnoreCase("y")) {
            System.out.println("Enter miles: ");
            double miles = sc.nextDouble();
            System.out.println("Enter miles per hour: ");
            double mph = sc.nextDouble();
            System.out.println();
            
            System.out.println("Estimated Travel Time\n--------------");
            double hours = miles / mph;
            double minutes = (((miles % mph) / mph) * 60);

			System.out.println("Hours: " + Math.floor(hours));
			System.out.println("Minutes: " + Math.floor(minutes));
            System.out.println();
			
            System.out.print("Continue? (y/n): ");
            choice = sc.next();
            System.out.println();
        }
    }
}