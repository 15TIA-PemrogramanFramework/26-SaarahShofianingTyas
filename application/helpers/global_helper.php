<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'"><i class="fa fa-list fa-fw"></i> Home</a>
	</li><li>
		<a href="'.site_url('karyawan').'"><i class="fa fa-list fa-fw"></i> Data Karyawan</a>
	</li><li>
		<a href="'.site_url('barang').'"><i class="fa fa-list fa-fw"></i> Data Barang</a>
	</li><li>
		<a href="'.site_url('customer').'"><i class="fa fa-list fa-fw"></i> Data Customer</a>
	</li><li>
		<a href="'.site_url('Melaundry').'"><i class="fa fa-list fa-fw"></i> MeLaundry</a>
	</li><li>
		<a href="'.site_url('kurir').'"><i class="fa fa-list fa-fw"></i> DataKurir</a>
	</li>';
	}
