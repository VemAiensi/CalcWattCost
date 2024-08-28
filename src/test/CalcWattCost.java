import java.util.Scanner;


public class CalcWattCost {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        System.out.print("Number of watts used: ");
        double watts = scanner.nextDouble();

        System.out.print("Number of hours used: ");
        double hours = scanner.nextDouble();
        
        System.out.print("Price per kWh: ");
        double price = scanner.nextDouble();

        System.out.println(calcWattCost(watts, hours, price));

    }

    public static double calcWattCost(double watts, double hours, double price) {
        return watts * hours * price / 1000;
   }
}
