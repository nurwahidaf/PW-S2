<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Siswa</title>
</head>
<body>
    <?php
        $siswa1 = ['id' => 1, 'nim' => '01101', 'uts' => 83, 'uas' => 85, 'tugas' => 77];
        $siswa2 = ['id' => 2, 'nim' => '01102', 'uts' => 88, 'uas' => 76, 'tugas' => 90];
        $siswa3 = ['id' => 3, 'nim' => '01103', 'uts' => 79, 'uas' => 82, 'tugas' => 81];
        $siswa4 = ['id' => 4, 'nim' => '01104', 'uts' => 77, 'uas' => 87, 'tugas' => 85];
        
        $data_nilai = [$siswa1, $siswa2, $siswa3, $siswa4];
        $nomor = 1;
    ?>

    <h3>DATA NILAI SISWA</h3>
    <table width="700px" border="1">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ID</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>NILAI AKHIR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data_nilai as $nilai) {
                    echo '<tr><td>' . $nomor . '</td>';
                    echo '<td>' . $nilai['id'] . '</td>';
                    echo '<td>' . $nilai['nim'] . '</td>';
                    echo '<td>' . $nilai['uts'] . '</td>';
                    echo '<td>' . $nilai['uas'] . '</td>';
                    echo '<td>' . $nilai['tugas'] . '</td>';
                    
                    $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
                    echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                    
                    echo '</tr>';
                    
                    $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>