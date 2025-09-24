<?php
class Produk {
    protected $idProduk;
    protected $nama;
    protected $deskripsi;
    protected $harga;

    public function __construct($id = "", $nama = "", $deskripsi = "", $harga = 0) {
        $this->idProduk = $id;
        $this->nama = $nama;
        $this->deskripsi = $deskripsi;
        $this->harga = $harga;
    }

    public function getIdProduk() { return $this->idProduk; }
    public function getNama() { return $this->nama; }
    public function getDeskripsi() { return $this->deskripsi; }
    public function getHarga() { return $this->harga; }
}
