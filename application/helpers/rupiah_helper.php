<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function rupiah($nilai) {	
	$hasil_rupiah = "Rp " . number_format($nilai,2,',','.');
	return $hasil_rupiah;
}