<?php

require_once 'config/koneksi.php';

require_once 'classes/ReservasiRegular.php';
require_once 'classes/ReservasiPremium.php';
require_once 'classes/ReservasiEvent.php';

$totalRegular =
mysqli_num_rows(
ReservasiRegular::getData($conn)
);

$totalPremium =
mysqli_num_rows(
ReservasiPremium::getData($conn)
);

$totalEvent =
mysqli_num_rows(
ReservasiEvent::getData($conn)
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Reservasi Studio Foto</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="header">
<h1>Sistem Reservasi Studio Foto</h1>
<p>Remedial Pemrograman Berorientasi Objek</p>
</div>

<div class="container">

<div class="dashboard">

<div class="box">
<h2><?= $totalRegular ?></h2>
<p>Reservasi Regular</p>
</div>

<div class="box">
<h2><?= $totalPremium ?></h2>
<p>Reservasi Premium</p>
</div>

<div class="box">
<h2><?= $totalEvent ?></h2>
<p>Reservasi Event</p>
</div>

</div>

<!-- REGULAR -->

<div class="card">

<h2>Reservasi Regular</h2>

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

while($row=mysqli_fetch_assoc($data)){

$obj = new ReservasiRegular($row);

echo "
<tr>
<td>".$obj->getId()."</td>
<td>".$obj->getNama()."</td>
<td>".$obj->getBackground()."</td>
<td>".$obj->getCetak()."</td>
<td>Rp ".number_format($obj->hitungTotalBiaya(),0,',','.')."</td>
</tr>
";
}

?>

</table>

</div>

<!-- PREMIUM -->

<div class="card">

<h2>Reservasi Premium</h2>

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

while($row=mysqli_fetch_assoc($data)){

$obj = new ReservasiPremium($row);

echo "
<tr>
<td>".$obj->getId()."</td>
<td>".$obj->getNama()."</td>
<td>".$obj->getTalent()."</td>
<td>".($obj->getMakeup() ? 'Ya' : 'Tidak')."</td>
<td>Rp ".number_format($obj->hitungTotalBiaya(),0,',','.')."</td>
</tr>
";
}

?>

</table>

</div>

<!-- EVENT -->

<div class="card">

<h2>Reservasi Event</h2>

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

while($row=mysqli_fetch_assoc($data)){

$obj = new ReservasiEvent($row);

echo "
<tr>
<td>".$obj->getId()."</td>
<td>".$obj->getNama()."</td>
<td>".$obj->getLokasi()."</td>
<td>Rp ".number_format($obj->getTransport(),0,',','.')."</td>
<td>Rp ".number_format($obj->hitungTotalBiaya(),0,',','.')."</td>
</tr>
";
}

?>

</table>

</div>

</div>

</body>
</html>