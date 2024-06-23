<?php
//index.php
include_once '../functions/db.php';
session_start();

if (isset($_SESSION['sweetAlert'])) {
  $sweetAlert = $_SESSION['sweetAlert'];

  // Hapus pesan SweetAlert dari session setelah ditampilkan
  unset($_SESSION['sweetAlert']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>PETRUK - Pengaduan Infrastruktur</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
  <!-- Libraries Stylesheet -->
  <link href="../../lib/animate/animate.min.css" rel="stylesheet" />
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="../../css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ---NAVBAR---- -->
  <?php
  require_once 'admin_header.php';
  ?>
  <!-- Content Start -->
  <section id="dataJalan">
    <div class="container-fluid content-pelapor">
      <div class="container mt-5">
        <h2 class="pt-lg-5">DATA BERITA</h2>
        <p>Berikut data terkait informasi yang telah melakukan pengaduan</p>
        <div class="table py-4">

          <table class="table table-striped">
            <thead class="bg-primary text-center text-light">
              <tr>
                <th>No.</th>
                <th>judul</th>
                <th>isi</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php

              $query = "SELECT id, judul,isi, gambar FROM berita ";
              $rows = mysqli_query($conn, $query);
              $i = 1;
              while ($row = mysqli_fetch_assoc($rows)) {

              ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['judul']; ?></td>
                  <td><?= $row['isi']; ?></td>   
                  <td>
                    <img src="../img/fotoberita/<?= $row['gambar']; ?>" width="300px">
                  </td>
                  <td>
                    <a href="ubahPengaduan.php?ubah=<?= $row['id']; ?>" class="btn btn-success btn-sm">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="../controller/tambah_berita.php?hapus=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus???')">
                      <i class="fa fa-trash"></i>
                    </a>

                    <!-- <button type="button" class="btn btn-aksi btn-sm btn-success"> <span class="glyphicon glyphicon-edit"></span></button>
                    <button type="button" class="btn btn-aksi btn-sm btn-danger">Hapus</button> -->
                  </td>
                </tr>
              <?php
                $i++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="fcad201b-6c71-47e7-bead-6ea1aaa2fa4e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </section>
  <!-- ----Content End----- -->

  <!-- ---FOOTER--- -->
  <?php
  require_once 'footer.php';
  ?>
  <script src="../js/sweetalert/package/dist/sweetalert2.all.min.js"></script>
  <!-- <script>
  function confirmDelete() {
    Swal.fire({
      title: 'Konfirmasi Hapus',
      text: 'Anda yakin ingin menghapus data?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Hapus',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        // Jika dikonfirmasi, hapus data
        return true;
      } else {
        return false;
      }
    });
  }
</script> -->
  <?php if (isset($sweetAlert)) { ?>
    <script>
        Swal.fire({
            title: '<?php echo $sweetAlert['title']; ?>',
            text: '<?php echo $sweetAlert['text']; ?>',
            icon: '<?php echo $sweetAlert['type']; ?>',
        });
    </script>
<?php } ?>

</body>

</html>