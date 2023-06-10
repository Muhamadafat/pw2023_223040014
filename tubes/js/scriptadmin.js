jQuery(document).ready(function () {
  // Ketika ada perubahan pada input keyword
  $("#keyword").on("input", function () {
    // Ambil nilai keyword
    var keyword = $(this).val();

    // Kirim permintaan AJAX ke server
    $.ajax({
      url: "../ajax/artisadmin.php", // Ganti dengan URL yang sesuai
      method: "POST",
      data: { keyword: keyword },
      success: function (response) {
        // Isi konten tabel dengan hasil pencarian
        $("#container").html(response);
      },
    });
  });
});
