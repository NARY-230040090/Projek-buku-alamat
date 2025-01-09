<?php
include "koneksi.php"; 
include "header.php"; 

$tgl = date('Y-m-d'); 
$no = 1;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
   
    $query = mysqli_query($koneksi, "SELECT * FROM data_pengguna WHERE id = '$id'");
    $dataEdit = mysqli_fetch_array($query);
}

// Cek apakah ada parameter 'hapus' 
if (isset($_GET['hapus'])) {
    $idHapus = $_GET['hapus'];
    $hapusQuery = "DELETE FROM data_pengguna WHERE id = '$idHapus'";

    if (mysqli_query($koneksi, $hapusQuery)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat menghapus data');</script>";
    }
}

// Proses tambah / update data
if (isset($_POST['bsimpan'])) {
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $no_hp = htmlspecialchars($_POST['no_hp'], ENT_QUOTES);
    $kategori = htmlspecialchars($_POST['kategori'], ENT_QUOTES);

    // memastikan panjang nomor HP
    if (strlen($no_hp) > 12) {
        echo "<script>alert('Nomor HP tidak boleh lebih dari 12 digit. Silakan periksa kembali!');</script>";
    } else {
        if (isset($_GET['id'])) {
            // Proses update data
            $updateQuery = "UPDATE data_pengguna SET nama = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', kategori = '$kategori' WHERE id = '$id'";
            if (mysqli_query($koneksi, $updateQuery)) {
                echo "<script>alert('Data berhasil diupdate'); window.location.href='admin.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan saat mengupdate data');</script>";
            }
        } else {
            // Proses tambah data
            $insertQuery = "INSERT INTO data_pengguna (tanggal, nama, alamat, email, no_hp, kategori) VALUES ('$tgl', '$nama', '$alamat', '$email', '$no_hp', '$kategori')";
            if (mysqli_query($koneksi, $insertQuery)) {
                echo "<script>alert('Data berhasil disimpan'); window.location.href='admin.php';</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan saat menyimpan data');</script>";
            }
        }
    }
}

// Menampilkan data
$tampil = mysqli_query($koneksi, "SELECT * FROM data_pengguna WHERE tanggal LIKE '%$tgl%' ORDER BY id DESC");
?>

<!-- Form Input Baru / Edit -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= isset($dataEdit) ? 'Edit Data Kontak' : 'Tambah Data Baru' ?></h6>
    </div>
    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($dataEdit) ? $dataEdit['nama'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= isset($dataEdit) ? $dataEdit['alamat'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($dataEdit) ? $dataEdit['email'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= isset($dataEdit) ? $dataEdit['no_hp'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= isset($dataEdit) ? $dataEdit['kategori'] : ''; ?>" required>
            </div>
            <button type="submit" name="bsimpan" class="btn btn-primary"><?= isset($dataEdit) ? 'Update' : 'Simpan' ?></button>
        </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kontak Hari Ini [<?= date('d-m-Y') ?>]</h6>
    </div>
    <div class="card-body">
        <a href="rekapitulasi.php" class="btn btn-success mb-3"><i class="fa fa-table"></i> Rekapitulasi Kontak</a>
        <a href="logout.php" class="btn btn-danger mb-3"><i class="fa fa-sign-out-alt"></i> Logout</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Kategori</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Kategori</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($tampil)) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['tanggal'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['no_hp'] ?></td>
                            <td><?= $data['kategori'] ?></td>
                            <td>
                                <a href="admin.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="admin.php?hapus=<?= $data['id']; ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                   Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
