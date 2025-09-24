#include "ProdukElektronik.cpp"
#include <iostream>
using namespace std;

class ProdukImpor : public ProdukElektronik {
private:
    string negara;
    string nomorAPI;
    string invoice;

public:
    ProdukImpor(string id = "", string n = "", string d = "", double h = 0,
                string m = "", string mdl = "", string t = "",
                string neg = "", string api = "", string inv = "")
        : ProdukElektronik(id, n, d, h, m, mdl, t),
          negara(neg), nomorAPI(api), invoice(inv) {}

    string getNegara() const { return negara; }
    string getNomorAPI() const { return nomorAPI; }
    string getInvoice() const { return invoice; }

    static ProdukImpor tambah() {
        string id, n, d, m, mdl, t, neg, api, inv;
        double h;

        cout << "\n=== Input Data Produk Impor ===\n";
        cout << "ID Produk   : "; getline(cin, id);
        cout << "Nama        : "; getline(cin, n);
        cout << "Deskripsi   : "; getline(cin, d);
        cout << "Harga       : "; cin >> h; cin.ignore();
        cout << "Merek       : "; getline(cin, m);
        cout << "Model       : "; getline(cin, mdl);
        cout << "Tegangan    : "; getline(cin, t);
        cout << "Negara      : "; getline(cin, neg);
        cout << "Nomor API   : "; getline(cin, api);
        cout << "Invoice     : "; getline(cin, inv);

        return ProdukImpor(id, n, d, h, m, mdl, t, neg, api, inv);
    }
};
