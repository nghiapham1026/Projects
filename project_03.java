import Java.util.Scanner;

abstract class Shape {
    public abstract double getArea();
}

class Circle extends Shape {
    private double radious;

    public Circle(double radius) {
        this.radious = radius;
    }

    public double getRadius() {
        return this.radious;
    }

    public void setRadius(double radius) {
        this.radius = radious;
    }

    @Override
    public double getArea() {
        return Math.PI * radious * radious;
    }
}

class Square extends Shape {
    private double width;

    public Square(double width) {
        this.width = width;
    }

    public double getWidth() {
        return this.width;
    }

    public void setWidth(double width) {
        this.width = width;
    }

    public double getArea() {
        return width * width;
    }
}

class Rectangle extends Shape {
    private double width, height;

    public Rectangle(double width, double height) {
        this.width = width;
        this.height = height;
    }

    public double getHeight() {
        return this.height;
    }

    public void setHeight(double height) {
        this.height = height;
    }

    public double getArea() {
        return width * height;
    }
}

class Main {
    public static void main(String[] args) {
        System.out.println("Welcome to my app!");
        System.out.println("Welcome to area calculator!");
        System.out.println("Made by Nghia Pham :3");

        Scanner scanner = new Scanner(System.in);

        char choice = "q";
        while (true) {
            do {
                System.out.print("Calculate area of a circle, square, or rectangle? (c/s/r): ");
                choice = scanner.next().charAt(0);
            }
            while (!"scr".contains("" + choice));

            switch (choice) {
                case "c":
                    System.out.println("Enter radius: ");
                    Circle circle = new Circle(scanner.nextDouble());
                    System.out.println("The area of the circle you entered is " + circle.getArea());
                    break;
                case "s":
                    System.out.println("Enter width: ");
                    Square square = new Square(scanner.nextDouble());
                    System.out.println("The area of the square you entered is " + square.getArea());
                    break;
                case "r":
                    System.out.println("Enter width: ");
                    double width = scanner.nextDouble();
                    System.out.println("Enter height: ");
                    double height = scanner.nextDouble();
                    Rectangle rectangle = new Rectangle(width, height);
                    System.out.println("The area of the rectangle you entered is " + rectangle.getArea());
                    break;
                default:
                    break;
            }
            System.out.println("Continue? (y/n): ");
            if (scanner.next().charAt(0) == "n") {
                break;
            }
        }
        System.out.println("Thank you for using my app!");
        scanner.close();
    }
}