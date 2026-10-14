<?php
// biodata.php

function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

function statusSemester(int $semester): string
{
    if ($semester <= 2) return 'Mahasiswa Baru';
    if ($semester <= 4) return 'Mahasiswa Menengah';
    return 'Mahasiswa Tingkat Lanjut';
}

$mahasiswa = [
    'nim' => '4524210110',
    'nama' => 'Kholil Irsyad Marwan',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.72,
    'status' => 'Aktif'
];

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata</title>
</head>

<body>

    <h1>Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li>
                <?= ucfirst($kunci) ?>:
                <?= htmlspecialchars((string)$nilai) ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>
        Predikat:
        <?= statusKelulusan($mahasiswa['ipk']) ?>
    </p>


    <p>
        Status Semester:
        <?= statusSemester($mahasiswa['semester']) ?>
    </p>

</body>

</html>