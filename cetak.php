<?php

include 'koneksi.php';

$nim = $_POST['nim'];

require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
use FontLib\Table\Type\head;

$dompdf = new Dompdf();
$select = $conn->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
// var_dump($select);

$html = '<center><h3>Data Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>NIM</th>
 <th>Nama</th>
 <th>Prodi</th>
 <th>Kelas</th>
 <th>Alamat</th>
 <th>Telepon</th>
 </tr>';

while($row = $select->fetch_assoc())
{
  $nama = $row['nama'];
 $html .= "<tr>
 <td>".$row['nim']."</td>
 <td>".$row['nama']."</td>
 <td>".$row['prodi']."</td>
 <td>".$row['kelas']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['telepon']."</td>
 </tr>";
}
$html .= "</html>";

// echo $html;
$dompdf->loadHtml($html);
// // Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// // Rendering dari HTML Ke PDF
$dompdf->render();
// // Melakukan output file Pdf
$dompdf->stream('data-'.$nama.'.pdf');