<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.sidebar ul.nav .active a, .sidebar ul.nav li.parent a.active,
.sidebar ul.nav .active > a:hover, .sidebar ul.nav li.parent a.active:hover,
.sidebar ul.nav .active > a:focus, .sidebar ul.nav li.parent a.active:focus {
	color: #fff;
	background-color: #3b3838;
	border-radius: 8px;
}
a, a:hover, a:focus {
	color: #3b3838;
}
a{
	border-bottom: 1px solid white;
}
</style>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="background-color: #f2f2f2;">
	<br />
	<ul class="nav menu">
		<li <?php if (isset($_antrian)) 		  echo 'class="active"';?>><a href="<?php echo site_url('Klinik/home')?>"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;  Home</a></li>
		<li <?php if (isset($_konfirmasi)) 		  echo 'class="active"';?>><a href="<?php echo site_url('Klinik/Konfirmasi_janji')?>"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; Konfirmasi Janji</a></li>
		<li <?php if (isset($_registrasi)) 		  echo 'class="active"';?>><a href="<?php echo site_url('Klinik/registrasi_janji')?>"><i class="fa fa-check-circle-o" aria-hidden="true"></i> &nbsp;  Registrasi / Ubah Janji</a></li>
		<li <?php if (isset($_pembayaran)) 		  echo 'class="active"';?>><a href="<?php echo site_url('Klinik/pembayaran')?>"><i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp;   Pembayaran</a></li>
		<li <?php if (isset($_laporan_transaksi)) echo 'class="active"';?>><a href="<?php echo site_url('Klinik/laporan_harian')?>"><i class="fa fa-line-chart" aria-hidden="true"></i> &nbsp;   Laporan Harian</a></li>
		<li role="presentation" class="divider"></li>
    </ul>
</div><!--/.sidebar-->