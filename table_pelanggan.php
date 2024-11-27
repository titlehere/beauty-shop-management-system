<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BEAUTY SHOP</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logoBeauty2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Table</h3><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Master</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="table_pelanggan.php">Tabel Pelanggan</a></li>
                            <li><i class="fa fa-table"></i><a href="table_produk.php">Tabel Produk</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Data Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="table_penjualan.php">Tabel Penjualan</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="table_pembayaran.php">Tabel Pembayaran</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Cetak Tabel</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="cetakProduk.php">Cetak Tabel Produk</a></li>
                            <li><i class="fa fa-table"></i><a href="cetakPelanggan.php">Cetak Tabel Pelanggan</a></li>
                            <li><i class="fa fa-table"></i><a href="cetakPenjualan.php">Cetak Tabel Penjualan</a></li>
                            <li><i class="fa fa-table"></i><a href="cetakPembayaran.php">Cetak Tabel Pembayaran</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="ProdukC.php">Chart Tabel Produk</a></li>
                            <li><i class="fa fa-table"></i><a href="PelangganC.php">Chart Tabel Pelanggan</a></li>
                            <li><i class="fa fa-table"></i><a href="PenjualanC.php">Chart Tabel Penjualan</a></li>
                            <li><i class="fa fa-table"></i><a href="PembayaranC.php">Chart Tabel Pembayaran</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="gmaps.php">Location</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Pelanggan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div>

                    <div class="card">
                      <div class="card-header">
                        <strong>Data Pelanggan</strong>
                      </div>
                      <div class="card-body card-block">
                        <form method=post action=table_pelanggan.php class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">ID Pelanggan</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="id_cust" placeholder="id pelanggan" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Nama Pelanggan</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="nama_cust" placeholder="nama pelanggan" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Telp Pelanggan</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="telp_cust" placeholder="telp pelanggan" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Alamat Pelanggan</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="alamat_cust" placeholder="alamat pelanggan" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-5"><label for="input-normal" class=" form-control-label">Tanggal Pembelian</label></div>
                            <div class="col col-sm-6"><input type=text id="input-normal" name="tgl_pembelian" placeholder="tgl pembelian" class="form-control"></div>
                          </div>
                        
                      </div>
                      <div class="card-footer">
                        <input type=submit class="btn btn-outline-info" name=insert value=Insert>
                        <input type=submit class="btn btn-outline-info" name=update value=Update>
                        <input type=submit class="btn btn-outline-info" name=delete value=Delete>
                          
                        
                        <button type="reset" class="btn btn-outline-danger">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</form>
                      </div>
                    </div>
					
						<!--<form method=post action=tables-basic.php>
						Isikan ID Produk : <input type=text name="id_prod"><br>
						Isikan Nama Produk : <input type=text name="nama_prod"> <br>
						Isikan Jenis Produk : <input type=text name="harga"> <br>
						<input type=submit name=insert value=InsertData>
						</form>-->
						<?php
						if(isset($_POST['insert'])=="Insert") {
							$con=mysqli_connect("localhost", "root", "", "shop");
							$sql="INSERT INTO pelanggan (ID_pelanggan, nama_pelanggan, telp_pelanggan, alamat_pelanggan, tanggal_pembelian)
							VALUES
							('$_POST[id_cust]','$_POST[nama_cust]',$_POST[telp_cust],'$_POST[alamat_cust]','$_POST[tgl_pembelian]')";

							if (!mysqli_query($con,$sql))
							  {
							  die('Error: ' . mysqli_error($con));
							  }
							echo "1 Data Ditambahkan";
						}
						?>

                        <?php
                        if(isset($_POST['update'])=="Update") {
                        $con=mysqli_connect("localhost", "root", "", "shop");
                        $sql="UPDATE pelanggan SET nama_pelanggan ='$_POST[nama_cust]', 
                        telp_pelanggan='$_POST[telp_cust]', alamat_pelanggan='$_POST[alamat_cust]', tanggal_pembelian= DATE '$_POST[tgl_pembelian]'
                        WHERE ID_pelanggan='$_POST[id_cust]'";

                        if (!mysqli_query($con,$sql))
                            {
                            die('Error: ' . mysqli_error($con));
                            }
                        echo "1 Data Terupdate";
                        }
                        ?>

                        <?php
                        if(isset($_POST['delete'])=="Delete") {
                        $con=mysqli_connect("localhost", "root", "", "shop");
                        $sql="DELETE FROM pelanggan WHERE ID_pelanggan ='$_POST[id_cust]'";


                        if (!mysqli_query($con,$sql))
                            {
                            die('Error: ' . mysqli_error($con));
                            }
                        echo "1 Data Terhapus";
                        }
                        ?>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID Pelanggan</th>
                                  <th scope="col">Nama Pelanggan</th>
								  <th scope="col">Telepon Pelanggan</th>
                                  <th scope="col">Alamat Pelanggan</th>
                                  <th scope="col">Tanggal Pembelian</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php
							$host='localhost';
							$user='root';
							$pass='';
							$database='shop';

						$konek=mysqli_connect($host, $user, $pass);

						mysqli_select_db($konek, $database);
						//mysqli_connect("localhost","root","");
						//mysqli_select_db("pertanian");

						$tampil="select * from pelanggan";
						$hasil=mysqli_query($konek, $tampil);
						
						$no=1;
						while ($data=mysqli_fetch_array($hasil, MYSQLI_ASSOC)){
						  echo "<tr>
                      <td>$no</td>
                      <td>$data[ID_pelanggan]</td>
                      <td>$data[nama_pelanggan]</td>
                      <td>$data[telp_pelanggan]</td>
                      <td>$data[alamat_pelanggan]</td>
                      <td>$data[tanggal_pembelian]</td>
                    </tr>";
						  $no++;
						}
                      
                  echo "</tbody></table>";
						?>
                        </div>
						<!--Cetak PRINT -->
						<a href="cetakPelanggan.php" target="_blank"><input type=submit class="btn btn-primary btn-sm" name=insert value=Cetak></a>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
