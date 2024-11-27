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
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

	<!-- Untuk View Bootstrap JQuery Database-->
	<!-- Bootstrap core CSS 
           <link href="css/bootstrap.css" rel="stylesheet">
           <!-- Bootstrap core JavaScript
           <script src="js/jquery.min.js"></script>
           <script src="js/bootstrap.js"></script>
	-->
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
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Table</h3><!-- /.menu-title -->
                    <!--<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>-->
                    <li class="menu-item-has-children dropdown">
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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Data Detail Table Pelanggan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
							
                            <div class="modal-body">
                                <!-- Ini isinya modul pop up-->
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
						//mysqli_select_db("dataku");

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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>



           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#>">Tampil Data</a>
									<a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
						
               
						<?php
							$host='localhost';
							$user='root';
							$pass='';
							$database='shop';

						$konek=mysqli_connect($host, $user, $pass);

						mysqli_select_db($konek, $database);

						$kueri="select * from pelanggan";
						$hasil=mysqli_query($konek, $kueri);
						$count_pelanggan=mysqli_num_rows($hasil);
						?>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $count_pelanggan; ?></span>
                        </h4>
                        <p class="text-light">Jumlah Pelanggan</p>
						<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                          Detail Pelanggan
						</button>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>

            <!--/.col-->
            <div class="modal fade" id="mediumModalProduk" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelProduk" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabelProduk">Data Detail Table Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
							
                            <div class="modal-body">
                                <!-- Ini isinya modul pop up-->
								<div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID Produk</th>
                                  <th scope="col">Nama Produk</th>
								  <th scope="col">Harga Produk</th>
                                  <th scope="col">Deskripsi Produk</th>
                                  <th scope="col">Expired Produk</th>
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
						//mysqli_select_db("dataku");

						$tampilprod="select * from produk";
						$hasilproduk=mysqli_query($konek, $tampilprod);
						
						$no=1;
						while ($data=mysqli_fetch_array($hasilproduk, MYSQLI_ASSOC)){
						  echo "<tr>
                                    <td>$no</td>
                                    <td>$data[ID_Product]</td>
                                    <td>$data[NamaProduk]</td>
                                    <td>$data[Harga]</td>
                                    <td>$data[Deskripsi]</td>
                                    <td>$data[Expired]</td>
                                </tr>";
						  $no++;
						}
                      
                  echo "</tbody></table>";
						?>
                        </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>	
                        </div>
						<?php
							$host='localhost';
							$user='root';
							$pass='';
							$database='shop';

						$konek=mysqli_connect($host, $user, $pass);

						mysqli_select_db($konek, $database);

						$kueri="select * from produk";
						$hasil=mysqli_query($konek, $kueri);
						$count_produk=mysqli_num_rows($hasil);
						?>
						
                        <h4 class="mb-0">
                            <span class="count"><?php echo $count_produk; ?></span>
                        </h4>
                        <p class="text-light">Jumlah Produk</p>
                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModalProduk">
                          Detail Produk
						</button>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->
            <div class="modal fade" id="mediumModalTransaksi" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelTransaksi" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabelTransaksi">Data Detail Table Transaksi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
							
                            <div class="modal-body">
                                <!-- Ini isinya modul pop up-->
								<div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID Transaksi</th>
                                  <th scope="col">ID Penjualan</th>
                                  <th scope="col">Tanggal Pembayaran</th>
								  <th scope="col">Jumlah Pembayaran</th>
                                  <th scope="col">Metode Bayar</th>
                                  <th scope="col">Tanggal Kirim</th>
                                  <th scope="col">Status Kirim</th>
                                  <th scope="col">Alamat Kirim</th>
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
						//mysqli_select_db("dataku");

						$tampil="select * from pembayaran_pengiriman";
						$hasil=mysqli_query($konek, $tampil);
						
						$no=1;
						while ($data=mysqli_fetch_array($hasil, MYSQLI_ASSOC)){
						  echo "<tr>
                                    <td>$no</td>
                                    <td>$data[ID_pembayaran_pengiriman]</td>
                                    <td>$data[ID_penjualan]</td>
                                    <td>$data[tanggal_pembayaran]</td>
                                    <td>$data[jumlah_pembayaran]</td>
                                    <td>$data[metode_pembayaran]</td>
                                    <td>$data[tanggal_pengiriman]</td>
                                    <td>$data[status_pengiriman]</td>
                                    <td>$data[alamat_pengiriman]</td>
                                </tr>";
						  $no++;
						}
                      
                  echo "</tbody></table>";
						?>
                        </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>	
                        </div>
						<?php
							$host='localhost';
							$user='root';
							$pass='';
							$database='shop';

						$konek=mysqli_connect($host, $user, $pass);

						mysqli_select_db($konek, $database);

						$kueri="select * from pembayaran_pengiriman";
						$hasil=mysqli_query($konek, $kueri);
						$count_pembayaran=mysqli_num_rows($hasil);
						?>
						
                        <h4 class="mb-0">
                            <span class="count"><?php echo $count_pembayaran; ?></span>
                        </h4>
                        <p class="text-light">Jumlah Transaksi</p>
                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModalTransaksi">
                          Detail Transaksi
						</button>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>

             <!--/.col-->
             <div class="modal fade" id="mediumModalPenjualan" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelPenjualan" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabelPenjualan">Data Detail Penjualan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
							
                            <div class="modal-body">
                                <!-- Ini isinya modul pop up-->
								<div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">ID Penjualan</th>
                                  <th scope="col">Tanggal Penjualan</th>
								  <th scope="col">ID Produk</th>
                                  <th scope="col">Jumlah Produk</th>
                                  <th scope="col">Total Harga</th>
                                  
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
						//mysqli_select_db("dataku");

						$tampil="select * from penjualan";
						$hasil=mysqli_query($konek, $tampil);
						
						$no=1;
						while ($data=mysqli_fetch_array($hasil, MYSQLI_ASSOC)){
						  echo "<tr>
                                    <td>$no</td>
                                    <td>$data[id_penjualan]</td>
                                    <td>$data[tgl_penjualan]</td>
                                    <td>$data[id_produk]</td>
                                    <td>$data[jumlah_produk]</td>
                                    <td>$data[total_harga]</td>
                                </tr>";
						  $no++;
						}
                      
                  echo "</tbody></table>";
						?>
                        </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>	
                        </div>
						<?php
							$host='localhost';
							$user='root';
							$pass='';
							$database='shop';

						$konek=mysqli_connect($host, $user, $pass);

						mysqli_select_db($konek, $database);

						$kueri="select * from penjualan";
						$hasil=mysqli_query($konek, $kueri);
						$count_penjualan=mysqli_num_rows($hasil);
						?>
						
                        <h4 class="mb-0">
                            <span class="count"><?php echo $count_penjualan; ?></span>
                        </h4>
                        <p class="text-light">Jumlah Penjualan</p>
                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModalPenjualan">
                          Detail Penjualan
						</button>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>

            <div style="width: 1000px; margin: 0 auto; display: flex; justify-content: space-around;">
    
    <div style="width: 700px;">
        <canvas id="myChart"></canvas>
    </div>
   
    <div style="width: 700px;">
        <canvas id="myChartPie"></canvas>
    </div>
</div>

<div style="width: 1000px; margin: 50px auto 0; display: flex; justify-content: space-around;">
   
    <div style="width: 700px;">
        <canvas id="myChartProductPie"></canvas>
    </div>
    
    <div style="width: 700px;">
        <canvas id="myChartCityLine"></canvas>
    </div>
</div>


<script type="text/javascript" src="chartjs/Chart.js"></script>
<?php 
    include 'koneksi.php';
?>

<script>
   
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Tunai", "Transfer Bank", "Kartu Kredit"],
            datasets: [{
                label: 'Jumlah Transaksi',
                data: [
                    <?php 
                        $Tunai = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM pembayaran_pengiriman WHERE metode_pembayaran='Tunai'");
                        echo mysqli_fetch_assoc($Tunai)['jumlah'];
                    ?>, 
                    <?php 
                        $Transfer_bank = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM pembayaran_pengiriman WHERE metode_pembayaran='Transfer Bank'");
                        echo mysqli_fetch_assoc($Transfer_bank)['jumlah'];
                    ?>,
                    <?php 
                        $Kartu = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM pembayaran_pengiriman WHERE metode_pembayaran='Kartu Kredit'");
                        echo mysqli_fetch_assoc($Kartu)['jumlah'];
                    ?>
                ],
                backgroundColor: [
                    'rgba(128, 0, 128, 0.6)',
                    'rgba(255, 105, 180, 0.6)',
                    'rgba(255, 215, 0, 0.6)'
                ],
                borderColor: [
                    'rgba(128, 0, 128, 1)',
                    'rgba(255, 105, 180, 1)',
                    'rgba(255, 215, 0, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'GRAFIK METODE PEMBAYARAN',
                fontSize: 18,
                fontColor: '#333'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    
    var ctx2 = document.getElementById("myChartPie").getContext('2d');
    var myChartPie = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ["Pendapatan"],
            datasets: [{
                label: 'Total Pendapatan',
                data: [
                    <?php 
                        $query_total = mysqli_query($koneksi, "SELECT SUM(total_harga) AS total_pendapatan FROM penjualan");
                        $row = mysqli_fetch_assoc($query_total);
                        echo $row['total_pendapatan'];
                    ?>
                ],
                backgroundColor: [
                    'rgba(128, 0, 128, 0.6)',
                    'rgba(255, 105, 180, 0.6)',
                    'rgba(255, 215, 0, 0.6)'
                ],
                borderColor: [
                    'rgba(128, 0, 128, 1)',
                    'rgba(255, 105, 180, 1)',
                    'rgba(255, 215, 0, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'GRAFIK TOTAL PENDAPATAN',
                fontSize: 18,
                fontColor: '#333'
            }
        }
    });

    
    var ctx3 = document.getElementById("myChartProductPie").getContext('2d');
    var myChartProductPie = new Chart(ctx3, {
        type: 'pie',
        data: {
            labels: [
                <?php 
                    $query_produk = "SELECT p.NamaProduk, SUM(j.jumlah_produk) AS total_terjual
                                    FROM produk p
                                    INNER JOIN penjualan j ON p.ID_Product = j.id_produk
                                    GROUP BY p.NamaProduk
                                    ORDER BY total_terjual DESC
                                    LIMIT 3";

                    $result_produk = mysqli_query($koneksi, $query_produk);
                    $labels_produk = [];
                    while ($row_produk = mysqli_fetch_assoc($result_produk)) {
                        $labels_produk[] = "'" . $row_produk['NamaProduk'] . "'";
                    }
                    echo implode(',', $labels_produk);
                ?>
            ],
            datasets: [{
                label: 'Produk Terjual',
                data: [
                    <?php 
                        $result_produk = mysqli_query($koneksi, $query_produk);
                        $data_produk = [];
                        while ($row_produk = mysqli_fetch_assoc($result_produk)) {
                            $data_produk[] = $row_produk['total_terjual'];
                        }
                        echo implode(',', $data_produk);
                    ?>
                ],
                backgroundColor: [
                    'rgba(128, 0, 128, 0.6)',
                    'rgba(255, 105, 180, 0.6)',
                    'rgba(255, 215, 0, 0.6)'
                ],
                borderColor: [
                    'rgba(128, 0, 128, 1)',
                    'rgba(255, 105, 180, 1)',
                    'rgba(255, 215, 0, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'GRAFIK PRODUK TERLARIS',
                fontSize: 18,
                fontColor: '#333'
            }
        }
    });

   
    var ctx4 = document.getElementById("myChartCityLine").getContext('2d');
    var myChartCityLine = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: [
                <?php 
                    $query_kota = "SELECT alamat_pelanggan, COUNT(ID_pelanggan) AS jumlah_pembelian
                                    FROM pelanggan
                                    GROUP BY alamat_pelanggan
                                    ORDER BY jumlah_pembelian DESC
                                    LIMIT 5";

                    $result_kota = mysqli_query($koneksi, $query_kota);
                    $labels_kota = [];
                    while ($row_kota = mysqli_fetch_assoc($result_kota)) {
                        $labels_kota[] = "'" . $row_kota['alamat_pelanggan'] . "'";
                    }
                    echo implode(',', $labels_kota);
                ?>
            ],
            datasets: [{
                label: 'Jumlah Pembelian',
                data: [
                    <?php 
                        $result_kota = mysqli_query($koneksi, $query_kota);
                        $data_kota = [];
                        while ($row_kota = mysqli_fetch_assoc($result_kota)) {
                            $data_kota[] = $row_kota['jumlah_pembelian'];
                        }
                        echo implode(',', $data_kota);
                    ?>
                ],
                fill: false,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointRadius: 6,
                pointHoverRadius: 8,
                pointBorderWidth: 2,
                pointBorderColor: 'rgba(255, 255, 255, 1)'
            }]
        },
        options: {
            title: {
                display: true,
                text: 'GRAFIK KOTA PEMBELIAN TERBANYAK',
                fontSize: 18,
                fontColor: '#333'
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    });
</script>


<



<!-- GRAFIK -->




            

            

            <!--/.col-->


            <!--/.col-->

            <!--/.col-->


                        

                    

           

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
