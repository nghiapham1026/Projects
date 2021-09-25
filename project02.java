import java.util.Scanner;

class Project02 {

    private static int rollDie() {
        int num_random2 = (int) (Math.random() * 6) + 1;
        System.out.println("Die 2: " + num_random2);
        return num_random2;
    }

    private static int rollDie2() {
        int num_random = (int) (Math.random() * 6) + 1;
        System.out.println("Die 1: " + num_random);
        return num_random;
    }

    private static void printDice(int num_random, int num_random2) {
        int total = num_random + num_random2;
        total = num_random + num_random2;
        System.out.println("Total: " + total);
    }

    private static void printSpecialMessage(int total) {
        String message1 = "Snake Eyes";
        String message2 = "Box cars";
        if (total == 12) {
            System.out.println(message2);
        }
        else if (total == 2) {
            System.out.println(message1);
        }
    }

    public static void main(String[] args) {
        System.out.println("Welcome to my app!");
        System.out.println();
        System.out.println("Dice Roller");
        System.out.println();

        Scanner sc = new Scanner(System.in);
        String choice = "y";
        do {
            int one = rollDie();
            int two = rollDie2();
            printDice(one, two);
            printSpecialMessage(one + two);

            System.out.print("Roll Again? (y/n): ");
            choice = sc.next();
            System.out.println();
        } while (choice.equalsIgnoreCase("y"));

        System.out.println();
        System.out.println("Thank you for using my app!");
    }
}