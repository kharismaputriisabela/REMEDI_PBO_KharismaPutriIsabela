<?php

require_once 'koneksi.php';
require_once 'ReservasiRegular.php';
require_once 'ReservasiPremium.php';
require_once 'ReservasiEvent.php';

$totalRegular = mysqli_num_rows(ReservasiRegular::getData($conn));
$totalPremium = mysqli_num_rows(ReservasiPremium::getData($conn));
$totalEvent = mysqli_num_rows(ReservasiEvent::getData($conn));
$totalAll = $totalRegular + $totalPremium + $totalEvent;

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Reservasi Studio Foto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <header class="hero">
            <div>
                <p class="eyebrow">Dashboard Reservasi</p>
                <h1>Sistem Reservasi Studio Foto</h1>
                <p class="subtitle">Pantau semua jenis reservasi secara cepat dan terorganisir.</p>
            </div>
            <div class="hero-badge">Remedial PBO</div>
        </header>

        <main class="container">
            <section class="dashboard">
                <div class="dashboard-card primary">
                    <span class="label">Total Reservasi</span>
                    <h2><?= $totalAll ?></h2>
                    <p>Keseluruhan data</p>
                </div>

                <div class="dashboard-card blue">
                    <span class="label">Regular</span>
                    <h2><?= $totalRegular ?></h2>
                    <p>Reservasi Regular</p>
                </div>

                <div class="dashboard-card green">
                    <span class="label">Premium</span>
                    <h2><?= $totalPremium ?></h2>
                    <p>Reservasi Premium</p>
                </div>

                <div class="dashboard-card purple">
                    <span class="label">Event</span>
                    <h2><?= $totalEvent ?></h2>
                    <p>Reservasi Event</p>
                </div>
            </section>

            <section class="card">
                <div class="card-header">
                    <div>
                        <p class="eyebrow">Data</p>
                        <h3>Reservasi Regular</h3>
                    </div>
                    <span class="pill"><?= $totalRegular ?> data</span>
                </div>
                <div class="table-wrap">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Background</th>
                            <th>Cetak</th>
                            <th>Total Biaya</th>
                        </tr>

                        <?php
                        $data = ReservasiRegular::getData($conn);
                        while ($row = mysqli_fetch_assoc($data)) {
                            $obj = new ReservasiRegular($row);
                            echo "
                            <tr>
                                <td>{$obj->getId()}</td>
                                <td>{$obj->getNama()}</td>
                                <td>{$obj->getBackground()}</td>
                                <td>{$obj->getCetak()}</td>
                                <td>Rp " . number_format($obj->hitungTotalBiaya(), 0, ',', '.') . "</td>
                            </tr>
                            ";
                        }
                        ?>
                    </table>
                </div>
            </section>

            <section class="card">
                <div class="card-header">
                    <div>
                        <p class="eyebrow">Data</p>
                        <h3>Reservasi Premium</h3>
                    </div>
                    <span class="pill"><?= $totalPremium ?> data</span>
                </div>
                <div class="table-wrap">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Talent</th>
                            <th>Makeup</th>
                            <th>Total Biaya</th>
                        </tr>

                        <?php
                        $data = ReservasiPremium::getData($conn);
                        while ($row = mysqli_fetch_assoc($data)) {
                            $obj = new ReservasiPremium($row);
                            echo "
                            <tr>
                                <td>{$obj->getId()}</td>
                                <td>{$obj->getNama()}</td>
                                <td>{$obj->getTalent()}</td>
                                <td>" . ($obj->getMakeup() ? 'Ya' : 'Tidak') . "</td>
                                <td>Rp " . number_format($obj->hitungTotalBiaya(), 0, ',', '.') . "</td>
                            </tr>
                            ";
                        }
                        ?>
                    </table>
                </div>
            </section>

            <section class="card">
                <div class="card-header">
                    <div>
                        <p class="eyebrow">Data</p>
                        <h3>Reservasi Event</h3>
                    </div>
                    <span class="pill"><?= $totalEvent ?> data</span>
                </div>
                <div class="table-wrap">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Lokasi</th>
                            <th>Transport</th>
                            <th>Total Biaya</th>
                        </tr>

                        <?php
                        $data = ReservasiEvent::getData($conn);
                        while ($row = mysqli_fetch_assoc($data)) {
                            $obj = new ReservasiEvent($row);
                            echo "
                            <tr>
                                <td>{$obj->getId()}</td>
                                <td>{$obj->getNama()}</td>
                                <td>{$obj->getLokasi()}</td>
                                <td>Rp " . number_format($obj->getTransport(), 0, ',', '.') . "</td>
                                <td>Rp " . number_format($obj->hitungTotalBiaya(), 0, ',', '.') . "</td>
                            </tr>
                            ";
                        }
                        ?>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>