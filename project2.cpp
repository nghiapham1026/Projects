// Programming Project Chapter #2 
// CIT-130A EVC Fall 2020
// Name: Nghia Pham

#include <iostream>
using namespace std;

int main()
{
    int i = 0;
    int num = 0;
    string prime = "";

    for (i = 3; i <= 300; i++) {
        int counter = 0;
        for (num = i; num >= 1; num--) {
            if (i % num == 0) {
                counter = counter + 1;
            }
        }
        if (counter == 2) {
            prime = prime + to_string(i) + " ";
        }
    }
    cout << "Made by Nghia Pham :3\n";
    cout << "Prime numbers: ";
    cout << prime;
    return 0;
}
