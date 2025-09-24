<?php
require_once "ProdukElektronik.php";

class ProdukImpor extends ProdukElektronik {
    private $negara;
    private $nomorAPI;
    private $invoice;
    private $gambar;

    public function __construct($id = "", $nama = "", $deskripsi = "", $harga = 0,
                                $merek = "", $model = "", $tegangan = "",
                                $negara = "", $api = "", $invoice = "", $gambar = "") {
        parent::__construct($id, $nama, $deskripsi, $harga, $merek, $model, $tegangan);
        $this->negara = $negara;
        $this->nomorAPI = $api;
        $this->invoice = $invoice;
        $this->gambar = $gambar;
    }

    public function getNegara() { return $this->negara; }
    public function getNomorAPI() { return $this->nomorAPI; }
    public function getInvoice() { return $this->invoice; }
    public function getGambar() { return $this->gambar; }
}
