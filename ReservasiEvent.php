<?php

require_once 'Reservasi.php';

class ReservasiEvent extends Reservasi
{
    private $namaLokasiLuar;
    private $biayaTransportasiTim;

    public function __construct($data)
    {
        parent::__construct($data);

        $this->namaLokasiLuar = $data['nama_lokasi_luar'];
        $this->biayaTransportasiTim = $data['biaya_transportasi_tim'];
    }

    public static function getData($conn)
    {
        $query = "
        SELECT *
        FROM tabel_reservasi
        WHERE jenis_paket='Event'
        ";

        return mysqli_query($conn,$query);
    }

    public function hitungTotalBiaya()
    {
        return
        ($this->durasiJam * $this->tarifDasarPerJam)
        +
        $this->biayaTransportasiTim;
    }

    public function getLokasi()
    {
        return $this->namaLokasiLuar;
    }

    public function getTransport()
    {
        return $this->biayaTransportasiTim;
    }
}