#include <iostream>
#include <string>
using namespace std;

bool isValidDate(int day, int month){

    if (month <1 || month >12)return false;
    int daysInMonth;

    switch (month){
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        daysInMonth = 31;
        break;
    case 4: case 6: case 9: case 11:
        daysInMonth = 31;
        break;

    case 2:
        daysInMonth = 29; // anggap bisa tahun kabisat
        break;
    default:
        return false;
    }
    return day >= 1 && day <= daysInMonth;
}

string getZodiac(int day, int month) {
    if (day < 1 || day > 31 || month < 1 || month > 12)
        return "tanggal tidak valid";

    if ((month == 12 && day >= 22) || (month == 1 && day <= 20))
        return "Capricorn";

    else if ((month == 1 && day >= 21) || (month == 2 && day <= 18))
        return "Aquarius";

    else if ((month == 2 && day >= 19) || (month == 3 && day <= 20))
        return "Pisces";

    else if ((month == 3 && day >= 21) || (month == 4 && day <= 20))
        return "Aries";

    else if ((month == 4 && day >= 21) || (month == 5 && day <= 20))
        return "Taurus";

    else if ((month == 5 && day >= 21) || (month == 6 && day <= 20))
        return "Gemini";

    else if ((month == 6 && day >= 21) || (month == 7 && day <= 22))
        return "Cancer";

    else if ((month == 7 && day >= 23) || (month == 8 && day <= 22))
        return "Leo";

    else if ((month == 8 && day >= 23) || (month == 9 && day <= 22))
        return "Virgo";

    else if ((month == 9 && day >= 23) || (month == 10 && day <= 22))
        return "Libra";

    else if ((month == 10 && day >= 23) || (month == 11 && day <= 22))
        return "Scorpio";

    else if ((month == 11 && day >= 23) || (month == 12 && day <= 21))
    return "Sagittarius";

    else return "Tanggal tidak valid";
}

int main() {
    int day, month;
    cout << "Masukkan tanggal lahir, dan bulan lahir (dd mm): ";
    cin >> day >> month;

    cout << "Zodiak anda: " << getZodiac(day, month) << endl;

    return 0;
}

