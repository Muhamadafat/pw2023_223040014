<?php
require '../functions.php';

if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];
    $artis = cari($keyword);
    $rowNum = 1;

    if (!empty($artis)) {
        foreach ($artis as $row) {
            echo '<tr>
                <td>' . $rowNum . '</td>
                <td><img src="img/' . $row['gambar'] . '" width="85"></td>
                <td>' . $row['nama'] . '</td>
                <td>' . $row['jenis_kelamin'] . '</td>
                <td>' . $row['tanggal_lahir'] . '</td>
                <td>' . $row['nama_pekerjaan'] . '</td>
                <td>
                    <a href="ubah.php?id=' . $row['id'] . '" class="btn badge bg-primary">Change</a> |
                    <a href="hapus.php?id=' . $row['id'] . '" class="btn badge bg-warning" onclick="return confirm(\'Are you sure?\');">Delete</a>
                </td>
            </tr>';
            $rowNum++;
        }
    } else {
        echo '<tr>
            <td colspan="7">No data found</td>
        </tr>';
    }
}
