<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mantap Anjay</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Pendaftaran <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="form2.php">Data Orang Tua<span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-white">Disabled</a>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- CLOSE NAVBAR -->



    <!-- CONTENT -->
    <div class="flex card mt-5 ml-5 mr-5 mb-5" style="padding-right: 0px; padding-left: 0px;">
        <div class="card-header bg-secondary">
            <h5>Form Pendaftaran</h5>
        </div>
        <div class="card-body bg-light">
            <form method="POST" action="">
                <div class="form-row">
                    <div class="col-6">
                        <label>Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan" placeholder="masukan nama depan anda">
                    </div>
                    <div class="col-6">
                        <label>Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" placeholder="masukan nama belakang anda">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control col-6" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control col-6" name="tempat_lahir" placeholder="masukan tempat lahir anda">
                </div>
                <div class="form-group">
                    <label class="row ml-1">Jenis Kelamin</label>
                    <div class="col form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineLaki-laki" value="Laki-laki">
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="col form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlinePerempuan" value="Perempuan">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control col-6" name="agama">
                        <option selected>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Khatolik">Khatolik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control col-6" name="alamat" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control col-6" name="asal_sekolah" placeholder="asal sekolah anda">
                </div>
                <div class="form-group mt-3">
                    <label>Jurusan</label>
                    <select class="form-control col-6" name="jurusan" id="exampleFormControlJurusan">
                        <option>Pilih Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TKRO">TKRO</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" name="simpan">Daftar</button>
            </form>
        </div>
    </div>
    <!-- CLOSE CONTENT -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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

    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jurusan = $_POST['jurusan'];

    class hasil{
        public function Pendaftaran($a,$b,$c,$d,$e,$f,$g,$h,$i){?>
            <center>
            <div class="card text-white bg-dark mb-3 mt-5" style="max-width: 40rem;">
                <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
                <div class="card-body">
                    <h4 class="card-title">Biodata</h4>
                    <table>
                        <tr>
                            <td>Nama Depan</td>
                            <td> : </td>
                            <td><?php echo $a ?></td>
                        </tr>
                        <tr>
                            <td>Nama Belakang</td>
                            <td> : </td>
                            <td><?php echo $b ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td> : </td>
                            <td><?php echo $c ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td> : </td>
                            <td><?php echo $d ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td> : </td>
                            <td><?php echo $e ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td> : </td>
                            <td><?php echo $f ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : </td>
                            <td><?php echo $g ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td> : </td>
                            <td><?php echo $h ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td> : </td>
                            <td><?php echo $i ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </center>
<?php   }
    }

    $cetak = new hasil();

    echo $cetak->Pendaftaran($nama_depan,$nama_belakang,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$asal_sekolah,$jurusan);
}

?>