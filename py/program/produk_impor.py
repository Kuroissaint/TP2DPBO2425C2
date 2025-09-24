from produk_elektronik import ProdukElektronik

class ProdukImpor(ProdukElektronik):
    def __init__(self, id_produk, nama, deskripsi, harga,
                 merek, model, tegangan, negara, nomor_api, invoice):
        super().__init__(id_produk, nama, deskripsi, harga, merek, model, tegangan)
        self.negara = negara
        self.nomor_api = nomor_api
        self.invoice = invoice

    @staticmethod
    def tambah():
        print("\n**** Tambah Data Produk Elektronik Impor ****")
        id_produk = input("ID Produk   : ")
        nama = input("Nama        : ")
        deskripsi = input("Deskripsi   : ")
        harga = float(input("Harga       : "))
        merek = input("Merek       : ")
        model = input("Model       : ")
        tegangan = input("Tegangan    : ")
        negara = input("Negara      : ")
        nomor_api = input("Nomor API   : ")
        invoice = input("Invoice     : ")
        print("*********************************************\n")
        
        return ProdukImpor(id_produk, nama, deskripsi, harga,
                           merek, model, tegangan, negara, nomor_api, invoice)
