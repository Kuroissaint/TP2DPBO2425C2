#include <iostream>
#include <iomanip>
#include <vector>
#include "ProdukImpor.cpp"
using namespace std;

vector<ProdukImpor> daftarProduk = {
    ProdukImpor("P001", "Laptop Gaming", "Laptop spek tinggi", 15000000,
                "Asus", "ROG Strix", "220V", "Jepang", "API123", "INV001"),
    ProdukImpor("P002", "Smartphone", "HP flagship terbaru", 12000000,
                "Samsung", "Galaxy S25", "5V", "Korea Selatan", "API456", "INV002"),
    ProdukImpor("P003", "TV LED", "TV layar lebar", 7000000,
                "LG", "OLED55", "220V", "Korea Selatan", "API789", "INV003"),
    ProdukImpor("P004", "Kulkas", "Kulkas hemat energi", 8500000,
                "Panasonic", "NR-BX421", "220V", "Thailand", "API321", "INV004"),
    ProdukImpor("P005", "Headphone", "Noise Cancelling Headset", 3500000,
                "Sony", "WH-1000XM6", "5V", "Jepang", "API654", "INV005")
};

void tampilkanTabel() {
    if (daftarProduk.empty()) {
        cout << "\n[!] Belum ada data produk impor.\n";
        return;
    }

    vector<string> header = {"ID", "Nama", "Deskripsi", "Harga (Rp)",
                             "Merek", "Model", "Tegangan", "Negara", "API", "Invoice"};

    // Tentukan lebar kolom dinamis
    vector<int> colWidths(header.size());
    for (size_t i = 0; i < header.size(); i++)
        colWidths[i] = header[i].size();

    for (auto &p : daftarProduk) {
        vector<string> row = {
            p.getIdProduk(),
            p.getNama(),
            p.getDeskripsi(),
            to_string((long long)p.getHarga()),
            p.getMerek(),
            p.getModel(),
            p.getTegangan(),
            p.getNegara(),
            p.getNomorAPI(),
            p.getInvoice()
        };
        for (size_t i = 0; i < row.size(); i++) {
            colWidths[i] = max(colWidths[i], (int)row[i].size());
        }
    }

    auto garis = [&]() {
        cout << "+";
        for (int w : colWidths) {
            cout << string(w + 2, '-') << "+";
        }
        cout << "\n";
    };

    // Header
    garis();
    cout << "|";
    for (size_t i = 0; i < header.size(); i++) {
        cout << " " << left << setw(colWidths[i]) << header[i] << " |";
    }
    cout << "\n";
    garis();

    // Data
    for (auto &p : daftarProduk) {
        vector<string> row = {
            p.getIdProduk(),
            p.getNama(),
            p.getDeskripsi(),
            to_string((long long)p.getHarga()),
            p.getMerek(),
            p.getModel(),
            p.getTegangan(),
            p.getNegara(),
            p.getNomorAPI(),
            p.getInvoice()
        };
        cout << "|";
        for (size_t i = 0; i < row.size(); i++) {
            cout << " " << left << setw(colWidths[i]) << row[i] << " |";
        }
        cout << "\n";
    }
    garis();
}

void menu() {
    while (true) {
        cout << "\n===== MENU PRODUK IMPOR =====\n";
        cout << "1. Lihat semua produk\n";
        cout << "2. Tambah produk baru\n";
        cout << "3. Keluar\n";
        cout << "Pilih menu (1-3): ";

        int pilihan;
        cin >> pilihan;
        cin.ignore();

        if (pilihan == 1) {
            tampilkanTabel();
        } else if (pilihan == 2) {
            ProdukImpor baru = ProdukImpor::tambah();
            daftarProduk.push_back(baru);
            cout << "\n[+] Data berhasil ditambahkan!\n";
        } else if (pilihan == 3) {
            cout << "\nKeluar dari program...\n";
            break;
        } else {
            cout << "\n[!] Pilihan tidak valid.\n";
        }
    }
}

int main() {
    menu();
    return 0;
}
