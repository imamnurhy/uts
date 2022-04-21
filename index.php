<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <title>UTS Pemerograman Web 1</title>
</head>

<body>
     <h2>Input Data Pemantauan Covid19</h2>
     <hr>
     <form action="" method="post">
          Nama wilayah :
          <select name="wilayah">
               <option value="DKI Jakarta">DKI Jakarta</option>
               <option value="Jawa Barat">Jawa Barat</option>
               <option value="Banten">Banten</option>
               <option value="Jawa Tengah">Jawa Tengah</option>
          </select>
          <br>
          Jumlah Positif :
          <input type="text" name="positif" required>
          <br>
          Jumlah Dirawat :
          <input type="text" name="rawat" required>
          <br>
          Jumlah Sembuh :
          <input type="text" name="sembuh" required>
          <br>
          Jumlah Meninggal :
          <input type="text" name="meninggal" required>
          <br>
          Nama Operator :
          <input type="text" name="nama" required>
          <br>
          NIM Mahasiswa :
          <input type="text" name="nim" required>
          <td><input type="submit" name="simpan" value="simpan"></td>
          </tr>
          </table>
     </form>
</body>

<?php
if (isset($_POST['simpan'])) {
     date_default_timezone_set("Asia/Jakarta");
     $date = date('d F Y,  h:i:s');;
     $wilayah = trim($_POST['wilayah']);
     $nama = trim($_POST['nama']);
     $positif = trim($_POST['positif']);
     $dirawat = trim($_POST['rawat']);
     $sembuh = trim($_POST['sembuh']);
     $meninggal = trim($_POST['meninggal']);
     $nim = trim($_POST['nim']);

     $buka = fopen("db.html", 'a');
     fwrite($buka, '<!DOCTYPE html>
          <html lang="en">

          <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="style.css">
          </head>

          <body>
          <div class="atas">
               <h2>Data Pemantauan Covid19 Wilayah ' . $wilayah . '</h2>

               <h2>Per ' . $date . '</h2>
               <h2>' . $nama . ' / ' . $nim . '</h2>
          </div>
          <table width="100%" border="">
               <tr>
                    <th>Positif</th>
                    <th>Dirawat</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>

               </tr>
               <tr>
                    <td>' . $positif . '</td>
                    <td>' . $dirawat . '</td>
                    <td>' . $sembuh . '</td>
                    <td>' . $meninggal . '</td>
               </tr>
          </table>
          </body>

          </html>');
     fclose($buka);
     print "data berhasil disimpan";
}
?>

</html>