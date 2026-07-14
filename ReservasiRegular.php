<?php

require_once 'Reservasi.php';

class ReservasiRegular extends Reservasi
{
    private $tipeBackground;
    private $cetakFotoLembar;

    public function __construct($data)
    {
        parent::__construct($data);

        $this->tipeBackground = $data['tipe_background'];
        $this->cetakFotoLembar = $data['cetak_foto_lembar'];
    }

    public static function getData($conn)
    {
        $query = "
        SELECT *
        FROM tabel_reservasi
        WHERE jenis_paket='Regular'
        ";

        return mysqli_query($conn,$query);
    }

    public function hitungTotalBiaya()
    {
        $dasar = $this->durasiJam * $this->tarifDasarPerJam;

        return ($dasar * 1.20) + 50000;
    }

    public function getBackground()
    {
        return $this->tipeBackground;
    }

    public function getCetak()
    {
        return $this->cetakFotoLembar;
    }
}