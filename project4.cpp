// Programming Project Chapter #4
// CIT-130A EVC Fall 2021
// Name: Nghia Pham

#include <iostream>
using namespace std;

void input(int& hours, int& minutes);
void output(int hours, int minutes, char type);
int convert(int hours, char& type);

int main() {
    cout << "Made by Nghia Pham" << endl;
    
    int hours;
    int minutes;
    char type;
    char answer;
    
    do {
        input(hours, minutes);
        hours = convert(hours, type);
        output(hours, minutes, type);
        
        cout << "Continue? (y/n) ";
        cin >> answer;
    } while ((answer == 'Y') || (answer == 'y'));
    
    return 0;
}

void input(int& hours, int& minutes) {
    cout << "Enter the hour in 24hr format: ";
    cin >> hours;
    
    cout << "Enter the minute in 24hr format: ";
    cin >> minutes;
}

void output(int hours, int minutes, char type) {
    cout << "The time in 12hr format is " << hours << ":";
    cout.width(2);
    cout.fill('0');
    cout << minutes;
    
    if (type == 'A') 
        cout << " AM" << endl;
    else 
        cout << " PM" << endl;
}

int convert(int hours, char& type) {
    type = 'A';
    int ree = hours;
    if (hours == 0 || hours == 12)
        ree = 12;
    
    if (hours > 12)
        ree = hours - 12;

    if (hours >= 12)
        type = 'P';

    return ree;
}