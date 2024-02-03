<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi PPDB by WebPro</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="shortcut icon" href="images/WebPro10.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>WebPro 7</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h4>Formulir Edit PPDB</h4>
    <?php
    include_once("config.php");
    $id    = $_GET['id'];
    $sql   = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r     = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-edit.php" method="post">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" value="<?= $r['nama']; ?>" require>
            </div>
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="alamat" cols="30" rows="10"><?= $r['alamat']; ?></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin']=='Laki-laki' ? 'checked' : ''?> value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin']=='Perempuan' ? 'checked' : ''?> value="Perempuan">Perempuan
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="Islam" <?= $r['agama']=='Islam' ? 'selected' : ''?>>Islam</option>
                    <option value="Kristen" <?= $r['agama']=='Kristen' ? 'selected' : ''?>>Kristen</option>
                    <option value="Katholik" <?= $r['agama']=='Katholik' ? 'selected' : ''?>>Katholik</option>
                    <option value="Hindu" <?= $r['agama']=='Hindu' ? 'selected' : ''?>>Hindu</option>
                    <option value="Budha" <?= $r['agama']=='Budha' ? 'selected' : ''?>>Budha</option>
                    <option value="Khonghucu" <?= $r['agama']=='Khonghucu' ? 'selected' : ''?>>Khonghucu</option>
                </select>
            </div>
            <div>
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" value="<?= $r['sekolah_asal']; ?>">
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $r['id']; ?>">
                <input type="reset">
                <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Student Day Programming Web<b></i>
    </footer>
</body>
</html>