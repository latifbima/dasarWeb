<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    ?>
    <h2>Data Dosen</h2>
    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <?php foreach ($Dosen as $key => $value): ?>
            <tr>
                <td><?php echo ucwords(str_replace('_', ' ', $key)); ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
