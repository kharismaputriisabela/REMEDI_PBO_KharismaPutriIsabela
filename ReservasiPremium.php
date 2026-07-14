<?php

require_once 'Reservasi.php';

class ReservasiPremium extends Reservasi
{
    private $kuotaTalentOrang;
    private $layananMakeup;

    public function __construct($data)
    {
        parent::__construct($data);

        $this->kuotaTalentOrang = $data['kuota_talent_orang'];
        $this->layananMakeup = $data['layanan_makeup'];
    }

    public static function getData($conn)
    {
        $query = "
        SELECT *
        FROM tabel_reservasi
        WHERE jenis_paket='Premium'
        ";

        return mysqli_query($conn,$query);
    }

    public function hitungTotalBiaya()
    {
        $dasar = $this->durasiJam * $this->tarifDasarPerJam;

        return $dasar + ($dasar * 0.20);
    }

    public function getTalent()
    {
        return $this->kuotaTalentOrang;
    }

    public function getMakeup()
    {
        return $this->layananMakeup;
    }
}