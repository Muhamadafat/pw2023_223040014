<?php
require 'functions.php';
$conn = koneksi();

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
        <script>
        alert('Delete Data Success!');
        document.location.href = 'admin.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Delete Data Declined!');
        document.location.href = 'admin.php';
        </script>
        ";
}
