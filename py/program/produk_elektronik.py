from produk import Produk

class ProdukElektronik(Produk):
    def __init__(self, id_produk, nama, deskripsi, harga, merek, model, tegangan):
        super().__init__(id_produk, nama, deskripsi, harga)
        self.merek = merek
        self.model = model
        self.tegangan = tegangan
