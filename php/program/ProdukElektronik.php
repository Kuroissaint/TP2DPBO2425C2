<?php
require_once "Produk.php";

class ProdukElektronik extends Produk {
    protected $merek;
    protected $model;
    protected $tegangan;

    public function __construct($id = "", $nama = "", $deskripsi = "", $harga = 0,
                                $merek = "", $model = "", $tegangan = "") {
        parent::__construct($id, $nama, $deskripsi, $harga);
        $this->merek = $merek;
        $this->model = $model;
        $this->tegangan = $tegangan;
    }

    public function getMerek() { return $this->merek; }
    public function getModel() { return $this->model; }
    public function getTegangan() { return $this->tegangan; }
}
