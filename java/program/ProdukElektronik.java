public class ProdukElektronik extends Produk {
    protected String merek;
    protected String model;
    protected int tegangan;

    public ProdukElektronik(String idProduk, String nama, String deskripsi, double harga,
                            String merek, String model, int tegangan) {
        super(idProduk, nama, deskripsi, harga);
        this.merek = merek;
        this.model = model;
        this.tegangan = tegangan;
    }

    public String getMerek() { return merek; }
    public String getModel() { return model; }
    public int getTegangan() { return tegangan; }
}
