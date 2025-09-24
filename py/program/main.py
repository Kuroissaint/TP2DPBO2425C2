from produk_impor import ProdukImpor

# ====== Hardcode 5 produk awal ======
daftar_produk = [
    ProdukImpor("P001", "Laptop Gaming", "Laptop spek tinggi", 15000000,
                "Asus", "ROG Strix", "220V", "Jepang", "API123", "INV001"),
    ProdukImpor("P002", "Smartphone", "HP flagship terbaru", 12000000,
                "Samsung", "Galaxy S25", "5V", "Korea Selatan", "API456", "INV002"),
    ProdukImpor("P003", "TV LED", "TV layar lebar", 7000000,
                "LG", "OLED55", "220V", "Korea Selatan", "API789", "INV003"),
    ProdukImpor("P004", "Kulkas", "Kulkas 2 pintu hemat energi", 8500000,
                "Panasonic", "NR-BX421", "220V", "Thailand", "API321", "INV004"),
    ProdukImpor("P005", "Headphone", "Noise Cancelling Headset", 3500000,
                "Sony", "WH-1000XM6", "5V", "Jepang", "API654", "INV005"),
]

def tampilkan_tabel():
    if not daftar_produk:
        print("\n Belum ada data produk impor.\n")
        return

    header = ["ID", "Nama", "Deskripsi", "Harga (Rp)", "Merek", "Model",
              "Tegangan", "Negara", "API", "Invoice"]

    # Ambil semua data
    rows = []
    for p in daftar_produk:
        rows.append([
            p.id_produk,
            p.nama,
            p.deskripsi,
            f"Rp {p.harga:,.0f}".replace(",", "."),
            p.merek,
            p.model,
            p.tegangan,
            p.negara,
            p.nomor_api,
            p.invoice
        ])

    # Hitung lebar kolom
    col_widths = [len(h) for h in header]
    for row in rows:
        for i, val in enumerate(row):
            col_widths[i] = max(col_widths[i], len(str(val)))

    # Cetak header
    print("\n" + "=" * (sum(col_widths) + 3 * len(col_widths)))
    header_row = " | ".join(h.ljust(col_widths[i]) for i, h in enumerate(header))
    print(header_row)
    print("-" * (sum(col_widths) + 3 * len(col_widths)))

    # Cetak isi data
    for row in rows:
        row_line = " | ".join(str(val).ljust(col_widths[i]) for i, val in enumerate(row))
        print(row_line)

    print("=" * (sum(col_widths) + 3 * len(col_widths)))

def menu():
    while True:
        print("\n+== MENU PRODUK ELEKTRONIK IMPOR ==+")
        print("1 Lihat semua produk")
        print("2 Tambah produk baru")
        print("3 Keluar")
        print("+==================================+\n")
        pilihan = input(" Pilih menu (1-3): ")

        if pilihan == "1":
            tampilkan_tabel()
        elif pilihan == "2":
            baru = ProdukImpor.tambah()
            daftar_produk.append(baru)
            print("\n Data berhasil ditambahkan!\n")
        elif pilihan == "3":
            print("\n Terima kasih sudah menggunakan program ini!")
            break
        else:
            print("\n  Pilihan tidak valid, coba lagi.")

if __name__ == "__main__":
    menu()
