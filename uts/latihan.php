<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>latihan</title>
    </head>
    <body>

    <!-- JUDUL -->
    <center>
        <img src="yayasan.png" alt="" style="max-width: 300px; margin-bottom: 2rem; margin-top: 2rem;">

        <div class="text">
            <h3>PENGGAJIHAN</h3>
            <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
            <!-- <p style="font-size: 2rem; margin-bottom: 0px;"><b>PENDAFTARAN SISWA</b></p>
            <p style="font-size: 2rem;"><b>SMK ASSALAM BANDUNG</b></p> -->
        </div>

        <div class="card text-left border-dark mb-3" style="max-width: 40rem; margin-top: 3rem;">
            <div class="card-header bg-success text-white" style="font-size: 20px;">Data Penggajihan</div>
            <div class="card-body text-dark bg-light">
                <form action="" method="post">
                    <div class="form-group">
                        <label>No</label>
                        <input type="text" class="form-control" name="no" placeholder="No">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="masukan nama">
                    </div>
                    <div class="form-group">
                        <label>Unit Pendidikan</label>
                        <select class="form-control" name="unit_pendidikan">
                            <option selected>Pilih Unit Pendidikan</option>
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Gaji</label>
                        <input type="date" class="form-control" name="tanggal_gaji">
                    </div>
                <div class="row text-center" style="font-size:30px;">
                    <div class="col font-italic" style="font-size:30px;">Gaji</div>
                    <div class="col font-italic" style="font-size:30px;">Potongan</div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" name="jabatan">
                                <option selected>Pilih Jabatan</option>
                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                <option value="Wakasek">Wakasek</option>
                                <option value="Guru">Guru</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lama Kerja</label>
                            <input type="text" class="form-control" name="lama_kerja" placeholder="Lama Kerja">
                        </div>
                        <div class="form-group">
                            <label>Status Kerja</label>
                            <select class="form-control" name="status_kerja">
                                <option selected>Pilih Status Kerja</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>BPJS</label>
                            <input type="number" class="form-control" name="bpjs">
                        </div>
                        <div class="form-group">
                            <label>Pinjaman</label>
                            <input type="number" class="form-control" name="pinjaman" placeholder="Pinjaman">
                        </div>
                        <div class="form-group">
                            <label>Tabungan</label>
                            <input type="number" class="form-control" name="tabungan" placeholder="Tabungan">
                        </div>
                        <div class="form-group">
                            <label>Lainnya</label>
                            <input type="number" class="form-control" name="lainnya" placeholder="Lainnya">
                        </div>
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-success" style="width: 8rem; font-size: 15px;" name="simpan">Proses</button>
                    <button type="reset" class="btn btn-success" style="width: 8rem; font-size: 15px;">Reset</button>
                </center>
                </form>
            </div>
        </div>
    </center>
    <!-- CLOSE JUDUL -->






        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        -->
    </body>
</html>

<?php

if(isset($_POST['simpan'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    if ($jabatan == "Kepala Sekolah") {
        $gaji = 5000000;
    } elseif ($jabatan == "Wakasek") {
        $gaji = 4000000;
    } elseif ($jabatan == "Guru") {
        $gaji = 3000000;
    } elseif ($jabatan == "Karyawan") {
        $gaji = 2000000;
    } else {
        echo "Isi formulir dengan Benar";
    }

    if ($status_kerja == "Tetap") {
        $bonus = 1000000;
    } else  {
        $bonus = 0;
    }    

    $gaji_bersih = ($gaji + $bonus) - $bpjs - $pinjaman - $tabungan - $lainnya;

    class Penggajihan{
        public function gaji($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){?>
            <center>
                <div class="card border-success mb-3" style="max-width: 30rem;">
                    <div class="card-header bg-success border-success text-white" style="font-size:20px;">Proses Penggajihan</div>
                    <div class="card-body bg-light text-success">
                        <h5 class="card-title">STRUK GAJI</h5>
                        <pre class="text-dark" style="font-size: 20px; margin-bottom: 0px;">
                            <table>
                                <tr>
                                    <td>No</td>
                                    <td> : </td>
                                    <td><?php echo $a ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td> : </td>
                                    <td><?php echo $b ?></td>
                                </tr>
                                <tr>
                                    <td>Unit Pendidikan</td>
                                    <td> : </td>
                                    <td><?php echo $c ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Gaji</td>
                                    <td> : </td>
                                    <td><?php echo $d ?></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td> : </td>
                                    <td><?php echo $e ?></td>
                                </tr>
                                <tr>
                                    <td>Gaji</td>
                                    <td> : </td>
                                    <td><?php echo $f ?></td>
                                </tr>
                                <tr>
                                    <td>Lama Kerja</td>
                                    <td> : </td>
                                    <td><?php echo $g ?></td>
                                </tr>
                                <tr>
                                    <td>Status Kerja</td>
                                    <td> : </td>
                                    <td><?php echo $h ?></td>
                                </tr>
                                <tr>
                                    <td>Bonus</td>
                                    <td> : </td>
                                    <td><?php echo $i ?></td>
                                </tr>
                                <tr>
                                    <td>BPJS</td>
                                    <td> : </td>
                                    <td><?php echo $j ?></td>
                                </tr>
                                <tr>
                                    <td>Pinjaman</td>
                                    <td> : </td>
                                    <td><?php echo $k ?></td>
                                </tr>
                                <tr>
                                    <td>Tabungan</td>
                                    <td> : </td>
                                    <td><?php echo $l ?></td>
                                </tr>
                                <tr>
                                    <td>Lainnya</td>
                                    <td> : </td>
                                    <td><?php echo $m ?></td>
                                </tr>
                                <tr>
                                    <td>gaji Bersih</td>
                                    <td> : </td>
                                    <td><?php echo $n ?></td>
                                </tr>
                            </table>
                        </pre>
                    </div>
                    <div class="card-footer bg-success border-success text-white" style="font-size:20px;">Selamat Menerima Gaji :)</div>
                </div>
            </center>
<?php       }
    }

    $cetak = new penggajihan();

    echo $cetak ->gaji($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);
}
?>