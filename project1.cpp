// Programming Project Chapter #1
// CIT-130A EVC Fall 2021
// Name: Nghia Pham


#include <iostream>
using namespace std;

int main()
{
        double milliGrams;
        
        cout << "Made by Nghia Pham\n";
        
        cout << "Enter number of milligrams of caffeine in drink: ";
        cin >> milliGrams;
        
        cout << (10000/milliGrams)<<" cans of this drink can kill you."<<endl;
        
        return 0;
}