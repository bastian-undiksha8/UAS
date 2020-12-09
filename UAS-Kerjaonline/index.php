<?php
session_start();

// if (!isset($_SESSION["login"])) {
//     header("location: index.php");
//     exit;
// }
require 'function.php';
$penyedia = query("SELECT * FROM tb_penyediajasa ");
//jika tombol cari di klik maka 
if (isset($_POST["cari"])) {
    $penyedia = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">


        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <form action="" method="post">
                                <input type="text" name="keyword" size="" autofocus placeholder="MASUKKAN KEYWORD PENCARIAN......" autocomplete="off">
                                <button type="submit">Cari!</button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="tambah.php" class="active"><i class="fa fa-dashboard fa-fw"></i>TAMBAH DATA</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">DAFTAR PENYEDIA JASA </h1>
                    </div>
                </div>

                <body>
                    <div id="all">
                        <table id="wrap" border="1" cellpadding="10" cellspacing="0">
                            <tr>
                                <th>NO.</th>
                                <th>AKSI</th>
                                <th>Gambar</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>JASA</th>

                            </tr>
                            <?php $i = 1; ?>
                            <?php foreach ($penyedia as $row) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">Hapus</a>

                                    </td>

                                    <td><img src="assets/<?= $row["gambar"]; ?>" width="50"></td>
                                    <td><?= $row["nik"] ?></td>
                                    <td><?= $row["nama"] ?></td>
                                    <td><?= $row["email"] ?></td>
                                    <td><?= $row["jasa"] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </table>
                    </div>
                </body>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

</body>

</html>