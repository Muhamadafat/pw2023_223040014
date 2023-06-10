<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin Page</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");

        * {
            text-align: center;
            background-color: #adabab;
            color: black;
        }

        body {
            background-color: #adabab;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            font-family: 'Poppins', sans-serif;
            color: black;
            margin-top: 5%;
            font-weight: bold;
        }

        .add-artist a {
            font-family: 'Poppins';
            font-weight: bold;
            border: 2px solid rgb(204, 204, 204);
            border-radius: 10px;
            padding: 15px;
            display: block;
            width: 15%;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
        }

        .search {
            font-family: 'Poppins', sans-serif;
        }

        .search button {
            border-radius: 5px;
        }

        .table {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            color: black;
            position: relative;
            border-radius: 5px;
        }

        .table img {
            border-radius: 35%;
        }

        tr {
            font-family: 'poppins';
            font-size: 15px;
        }

        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>

<body>

    <h1 class="no-print">Hai, Muhamad Afat!</h1>

    <!-- TULISAN ADD ARTIST -->
    <div class="add-artist no-print">
        <br>
        <a href="tambah.php" class="btn btn-dark">Add Artist Data</a>
        <br>
        <a href="index.php" class="btn btn-dark ">Home Page</a>
    </div>
    <br><br>

    <!-- TOMBOL SEARCH -->
    <div class="search no-print">
        <form action="" method="post">
            <input type="text" name="keyword" class="btn" size="65" placeholder="What do you looking for?" autocomplete="off" id="keyword" value="<?= isset($_POST['keyword']) ? $_POST['keyword'] : ''; ?>">
            <button type="submit" name="cari" class="btn btn-dark" id="tombol-cari">Search</button>
        </form>
    </div>

    <br>

    <!-- TABEL -->
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Picture</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="artisTableBody">
                <?php if (!empty($artis)) : ?>
                    <?php $rowNum = 1; ?>
                    <?php foreach ($artis as $row) : ?>
                        <tr>
                            <td><?= $rowNum; ?></td>
                            <td><img src="img/<?= $row["gambar"]; ?>" width="85"></td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["jenis_kelamin"]; ?></td>
                            <td><?= $row["tanggal_lahir"]; ?></td>
                            <td><?= $row["nama_pekerjaan"]; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn badge bg-primary">Change</a> |
                                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn badge bg-warning" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                        <?php $rowNum++; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7">No data found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>



    <br>
    <a href="logout.php" class="btn btn-dark no-print">Log Out</a>
    <br>


    <div class="container no-print">
        <button class="btn btn-danger mt-3" onclick="window.print()">
            <i class="bi bi-journal-plus">Print PDF</i>
        </button>
    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/49181759c3.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Ketika halaman selesai dimuat
            loadArtistData();

            // Ketika ada perubahan pada input keyword
            $("#keyword").on("input", function() {
                // Ambil nilai keyword
                var keyword = $(this).val();

                // Memuat data artist berdasarkan keyword
                loadArtistData(keyword);
            });
        });

        // Fungsi untuk memuat data artist
        function loadArtistData(keyword = "") {
            // Kirim permintaan AJAX ke server
            $.ajax({
                url: "ajax/artisadmin.php",
                method: "POST",
                data: {
                    keyword: keyword
                },
                success: function(response) {
                    // Isi konten tabel dengan hasil pencarian
                    $("#artisTableBody").html(response);
                }
            });
        }
    </script>
</body>

</html>