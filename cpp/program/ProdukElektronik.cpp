#include "Produk.cpp"

class ProdukElektronik : public Produk {
protected:
    string merek;
    string model;
    string tegangan;

public:
    ProdukElektronik(string id = "", string n = "", string d = "", double h = 0,
                     string m = "", string mdl = "", string t = "")
        : Produk(id, n, d, h), merek(m), model(mdl), tegangan(t) {}

    string getMerek() const { return merek; }
    string getModel() const { return model; }
    string getTegangan() const { return tegangan; }
};
