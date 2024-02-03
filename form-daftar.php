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

    <h4>Formulir PPDB</h4>
    <div>
        <form action="proses-pendaftaran.php" method="post">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" require>
            </div>
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="alamat" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>
            <div>
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah_asal">
            </div>
            <div>
                <input type="reset">
                <input type="submit" name="simpan" value="Simpan">
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Student Day Programming Web<b></i>
    </footer>
</body>
</html>