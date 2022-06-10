<!DOCTYPE html>
<html lang="en" dir="ltr">

<head?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hhhh</title>
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN link -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- <style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }
    </style> -->
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="page-header">
                                <h2 align="center">Form Pemesanan</h2>
                            </div>
                            <p align="center">Silakan isi form pemesanan berikut
                            </p>
                            <form action="insertDo.php" method="POST">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nomor identitas</label>
                                    <input type="text" name="nomor" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>No.HP</label>
                                    <input type="text" name="hp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kelas penumpang</label>
                                    <!-- <input type="text" name="kelas" class="form-control"> -->
                                        <select id="kelas" name="kelas">
                                            <option value="ekonomi">Ekonomi</option>
                                            <option value="bisnis">Bisnis</option>
                                            <option value="eksekutif">Eksekutif</option>
                                        </select>
                                <div class="form-group">
                                    <label>Jadwal Keberangkatan</label>
                                    <input type="date" name="jadwal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Penumpang (bukan lansia - usia lebih dari 60)</label>
                                    <input type="text" name="penumpang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Penumpang Lansia</label>
                                    <input type="text" name="penumpangLansia" class="form-control">
                                </div>
                                    </div>
                                <div class="form-group">
                                    <label>Harga Tiket</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Total Bayar</label>
                                    <input type="text" name="total" class="form-control">
                                </div>
                                <div id="button">
                                    <input type="submit" class="btn btn-secondary" name="total" value="Hitung Total Bayar">
                                    <input type="submit" class="btn btn-primary" name="pesan" value="Pesan Tiket">
                                    <input type="submit" class="btn btn-secondary" name="cancel" value="Cancel">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>