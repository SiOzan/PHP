<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mantap Pisan</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#" style="padding: 0px;">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="form.php">Pendaftaran <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Data Orang Tua <span class="sr-only">(current)</span></a>
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
    <div class="flex card mt-5 ml-5 mr-5 md-5" style="padding-right: 0px; padding-left: 0px;">
        <div class="card-header bg-secondary">
            <h5>Form Pendaftaran</h5>
        </div>
        <div class="card-body bg-light">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah" placeholder="masukan nama">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir (Ayah)</label>
                    <input type="date" class="form-control" name="tanggal_lahir1">
                </div>
                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" placeholder="masukan nama">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir (Ibu)</label>
                    <input type="date" class="form-control" name="tanggal_lahir2">
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

    $nama_ayah = $_POST['nama_ayah'];
    $tanggal_lahir1 = $_POST['tanggal_lahir'];
    $nama_ibu = $_POST['nama_ibu'];
    $tanggal_lahir2 = $_POST['tanggal_lahir'];


    class hasil{
        public function Pendaftaran($a,$b,$c,$d){?>
            <center>
            <div class="card text-white bg-dark mb-3 mt-5" style="max-width: 40rem;">
                <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
                <div class="card-body">
                    <h4 class="card-title">Biodata</h4>
                    <table>
                        <tr>
                            <td>Nama Ayah</td>
                            <td> : </td>
                            <td><?php echo $a ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir (Ayah)</td>
                            <td> : </td>
                            <td><?php echo $b ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td> : </td>
                            <td><?php echo $c ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir (Ibu)</td>
                            <td> : </td>
                            <td><?php echo $d ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </center>
<?php   }
    }

    $cetak = new hasil();

    echo $cetak->Pendaftaran($nama_ayah,$tanggal_lahir1,$nama_ibu,$tanggal_lahir2);
}

?>