<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css') ?>"/>	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/bootstrap/css/font-awesome.min.css') ?>"/>
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/custom_style.css') ?>"/>	
	</style>
</head>
<body>

<div id="container">
	<!-- Judul -->
	<h1>Tambah Kendaraan</h1>

	
	<div id="body">
		<form action="<?php echo base_url('Welcome/action_tambah_data') ?>" method="post" accept-charset="utf-8">
			<div class="col-md-12">
	            <button type="submit" class="btn btn-tambah btn-sm pull-right btn-primary">
	                Simpan Data
	            </button>
	        </div>
			<table id="" width="" class="table table-striped table-bordered table-hover">
				<tr>
					<td>Plat Nomer (contoh : AB1234BA)</td>
					<td><input class="form-control" type="text" name="plat_nomer" required></td>
				</tr>
				<tr>
					<td>Jam Masuk (contoh : 08:30)</td>
					<td><input class="form-control" type="text" name="jam_masuk" required></td>
				</tr>
				<tr>
					<td>Jam Keluar (Bisa dikosongkan saat kendaraan masuk)</td>
					<td><input class="form-control" type="text" name="jam_keluar"></td>
				</tr>
			</table>
        </form>
	</div>

	<p class="footer">by Nurfandi Yoga, powered by Medika Buwana Informatika</p>
</div>

</body>
</html>