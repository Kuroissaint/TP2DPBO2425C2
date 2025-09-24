import java.util.Scanner;

public class ProdukImpor extends ProdukElektronik {
    private String negara;
    private String nomorApi;
    private String invoice;

    public ProdukImpor(String idProduk, String nama, String deskripsi, double harga,
                       String merek, String model, int tegangan,
                       String negara, String nomorApi, String invoice) {
        super(idProduk, nama, deskripsi, harga, merek, model, tegangan);
        this.negara = negara;
        this.nomorApi = nomorApi;
        this.invoice = invoice;
    }

    public String getNegara() { return negara; }
    public String getNomorApi() { return nomorApi; }
    public String getInvoice() { return invoice; }

    public static ProdukImpor tambah(Scanner sc) {
        System.out.println("\n--- Isi Data Produk Elektronik Impor Baru ---");
        System.out.print("ID Produk: ");
        String id = sc.nextLine();
        System.out.print("Nama: ");
        String nama = sc.nextLine();
        System.out.print("Deskripsi: ");
        String deskripsi = sc.nextLine();
        System.out.print("Harga: ");
        double harga = Double.parseDouble(sc.nextLine());
        System.out.print("Merek: ");
        String merek = sc.nextLine();
        System.out.print("Model: ");
        String model = sc.nextLine();
        System.out.print("Tegangan: ");
        int tegangan = Integer.parseInt(sc.nextLine());
        System.out.print("Negara: ");
        String negara = sc.nextLine();
        System.out.print("Nomor API: ");
        String api = sc.nextLine();
        System.out.print("Invoice: ");
        String invoice = sc.nextLine();

        return new ProdukImpor(id, nama, deskripsi, harga, merek, model, tegangan, negara, api, invoice);
    }
}
