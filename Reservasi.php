<?php

abstract class Reservasi
{
    protected $idReservasi;
    protected $namaPelanggan;
    protected $tanggalBooking;
    protected $durasiJam;
    protected $tarifDasarPerJam;

    public function __construct($data)
    {
        $this->idReservasi = $data['id_reservasi'];
        $this->namaPelanggan = $data['nama_pelanggan'];
        $this->tanggalBooking = $data['tanggal_booking'];
        $this->durasiJam = $data['durasi_jam'];
        $this->tarifDasarPerJam = $data['tarif_dasar_per_jam'];
    }

    public function getId()
    {
        return $this->idReservasi;
    }

    public function getNama()
    {
        return $this->namaPelanggan;
    }

    public function getTanggal()
    {
        return $this->tanggalBooking;
    }

    public function getDurasi()
    {
        return $this->durasiJam;
    }

    abstract public function hitungTotalBiaya();
}