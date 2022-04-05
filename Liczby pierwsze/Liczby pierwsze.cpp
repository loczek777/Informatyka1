#include <iostream>

using namespace std;


int main()
{

    int lp = 0;
    int p = 2;
    int h;
    int d;
    bool x;
    cout << "Podaj ilosc liczb: " << endl;
    cin >> h;

    while (lp < h) {
        x = true;
        for (int d = 2; d <= p - 1; d++) {
            if (p % d == 0) {
                x = false;
            }
        }
        if (x == true) {
            cout << p << " :Jest to liczba pierwsza" << endl;
            lp = lp + 1;
        }
        p = p + 1;
    }
}