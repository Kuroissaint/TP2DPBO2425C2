public class Produk {
    protected String idProduk;
    protected String nama;
    protected String deskripsi;
    protected double harga;

    public Produk(String idProduk, String nama, String deskripsi, double harga) {
        this.idProduk = idProduk;
        this.nama = nama;
        this.deskripsi = deskripsi;
        this.harga = harga;
    }

    public String getIdProduk() { return idProduk; }
    public String getNama() { return nama; }
    public String getDeskripsi() { return deskripsi; }
    public double getHarga() { return harga; }
}
