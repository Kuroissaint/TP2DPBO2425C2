import java.util.*;

public class Main {
    private static ArrayList<ProdukImpor> daftarProduk = new ArrayList<>();

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Data hardcode 5 produk awal
        daftarProduk.add(new ProdukImpor("P001", "Laptop Gaming", "Laptop spek tinggi", 15000000,
                "Asus", "ROG Strix", 225, "Jepang", "API123", "INV001"));
        daftarProduk.add(new ProdukImpor("P002", "Smartphone", "HP flagship terbaru", 12000000,
                "Samsung", "Galaxy S25", 5, "Korea Selatan", "API456", "INV002"));
        daftarProduk.add(new ProdukImpor("P003", "TV LED", "TV layar lebar", 7000000,
                "LG", "OLED55", 300, "Korea Selatan", "API789", "INV003"));
        daftarProduk.add(new ProdukImpor("P004", "Kulkas", "Kulkas 2 pintu hemat energi", 8500000,
                "Panasonic", "NR-BX421", 220, "Thailand", "API321", "INV004"));
        daftarProduk.add(new ProdukImpor("P005", "Headphone", "Noise Cancelling Headset", 3500000,
                "Sony", "WH-1000XM6", 10, "Jepang", "API654", "INV005"));

        while (true) {
            System.out.println("\n====  MENU PRODUK IMPOR ====");
            System.out.println("1. Lihat semua produk");
            System.out.println("2. Tambah produk baru");
            System.out.println("3. Keluar");
             System.out.println("============================\n");

            System.out.print(" Pilih menu (1-3): ");
            String pilihan = sc.nextLine();

            switch (pilihan) {
                case "1":
                    tampilkanTabel();
                    break;
                case "2":
                    ProdukImpor baru = ProdukImpor.tambah(sc);
                    daftarProduk.add(baru);
                    System.out.println(" Data berhasil ditambahkan!");
                    break;
                case "3":
                    System.out.println(" Keluar dari program...");
                    sc.close();
                    return;
                default:
                    System.out.println(" Pilihan tidak valid, coba lagi.");
            }
        }
    }

    private static void tampilkanTabel() {
        if (daftarProduk.isEmpty()) {
            System.out.println("\n Belum ada data produk impor.\n");
            return;
        }

        String[] header = {"ID", "Nama", "Deskripsi", "Harga (Rp)", "Merek", "Model",
                           "Tegangan", "Negara", "API", "Invoice"};

        // Hitung lebar kolom
        int[] colWidths = new int[header.length];
        for (int i = 0; i < header.length; i++) colWidths[i] = header[i].length();

        for (ProdukImpor p : daftarProduk) {
            String[] row = {
                p.getIdProduk(), p.getNama(), p.getDeskripsi(),
                String.format("Rp %,d", (long)p.getHarga()).replace(",", "."),
                p.getMerek(), p.getModel(), 
                String.format("%d", (int)p.getTegangan()),
                p.getNegara(), p.getNomorApi(), p.getInvoice()
            };
            for (int i = 0; i < row.length; i++) {
                colWidths[i] = Math.max(colWidths[i], row[i].length());
            }
        }

        // Cetak header
        int totalWidth = Arrays.stream(colWidths).sum() + 3 * header.length;
        System.out.println("\n" + "~".repeat(totalWidth));
        for (int i = 0; i < header.length; i++) {
            System.out.printf("%-" + (colWidths[i] + 3) + "s", header[i]);
        }
        System.out.println();
        System.out.println("-".repeat(totalWidth));

        // Cetak isi
        for (ProdukImpor p : daftarProduk) {
            String[] row = {
                p.getIdProduk(), p.getNama(), p.getDeskripsi(),
                String.format("Rp %,d", (long)p.getHarga()).replace(",", "."),
                p.getMerek(), p.getModel(), 
                String.format("%d V", (int)p.getTegangan()),
                p.getNegara(), p.getNomorApi(), p.getInvoice()
            };
            for (int i = 0; i < row.length; i++) {
                System.out.printf("%-" + (colWidths[i] + 3) + "s", row[i]);
            }
            System.out.println();
        }
        System.out.println("~".repeat(totalWidth));
    }
}
