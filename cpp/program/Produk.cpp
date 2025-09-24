#include <string>
using namespace std;

class Produk {
protected:
    string idProduk;
    string nama;
    string deskripsi;
    double harga;

public:
    Produk(string id = "", string n = "", string d = "", double h = 0)
        : idProduk(id), nama(n), deskripsi(d), harga(h) {}

    string getIdProduk() const { return idProduk; }
    string getNama() const { return nama; }
    string getDeskripsi() const { return deskripsi; }
    double getHarga() const { return harga; }
};
