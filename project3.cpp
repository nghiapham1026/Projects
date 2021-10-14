// Programming Project Chapter #3
// CIT-130A EVC Fall 2020
// Name: Nghia Pham

#include <iostream>
using namespace std;

const double gallon = 0.264179;

double milesPerGallon(double liters, double miles) {
    return miles / (liters * gallon);
}

int main() {
    
    cout << "Made by Nghia Pham" << endl;
    string choice;
    
    while (true) {
        double liters, miles;
        cout << "Enter the amount of gasoline used: ";
        cin >> liters;
        
        cout << "Enter the distance travelled: ";
        cin >> miles;
        
        cout << "The mileage of the car is " << milesPerGallon(liters, miles) << " mpg." << endl;
        
        cout << "Continue? (y/n) ";
        cin >> choice;
        cout << endl;
        
        if (!(choice == "Y" or choice == "y")) {
            break;
        }
    }
    return 0;
}