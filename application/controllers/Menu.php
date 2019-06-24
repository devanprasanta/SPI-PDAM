<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index(){
		$this->menuTree();
	}
	public function menuTree(){
		$rss = '
			[{
				"id":"1",
				"text":"Master",
				"children":[{
						"id":11,
						"text":"Jenis",
						"attributes":"ts/jenis_ts"
					},{
						"id":12,
						"text":"Respon SPK",
						"attributes":"ts/realisasi_ts"
					},{
						"id":22,
						"text":"Rekap Per Petugas",
						"attributes":"ts/rekap_petugas_ts"
					},{
						"id":13,
						"text":"Rekap & Laporan",
						"attributes":"",
						"children":[{
								"id":16,
								"text":"Rekap Tutup Sementara",
								"attributes":"ts/laporan_ts/rekapTS"
							},{
								"id":19,
								"text":"Detail Realisasi",
								"attributes":"ts/laporan_ts/detailRealisasiTS"
							}]
					}
					],
				"attributes":""
			}]
		';
		echo $rss;
	}
}