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
	<h1>Laporan Parkir</h1>

	
	<div id="body">
		<div class="col-md-6">
			<p>Parkir Rp 2.000 untuk 2 jam pertama, selanjutnya 500/jam</p>
		</div>
		<div class="col-md-6 pb-3">
            <button data-toggle="modal" data-target="#modal-tambah-kendaraan" class="btn btn-tambah btn-sm pull-right btn-primary">
                Tambah Data
            </button>
        </div>
		<table id="" width="100%" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th width="5%">No</th>
					<th>Plat Nomer</th>
					<th>Jam Masuk</th>
					<th>Jam Keluar</th>
					<th>Bayar</th>
					<th>Status</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>AB1234BA</td>
					<td>08.30</td>
					<td>08.30</td>
					<td>4.000</td>
					<td><i class="btn-sm btn-success">Keluar</i></td>
				</tr>
				<tr>
					<td>2</td>
					<td>AB1234BA</td>
					<td>08.30</td>
					<td> - </td>
					<td> - </td>
					<td><i class="btn-sm btn-warning">Masuk</i></td>
				</tr>
			</tbody>
		</table>
	</div>

	<p class="footer">by Nurfandi Yoga, powered by Medika Buwana Informatika</p>
</div>

</body>
</html>