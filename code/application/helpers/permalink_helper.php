<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('set_permalink'))
{
	function set_permalink($id_artikel,$artikel_isi)
	{
		$karakter = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');
		$hapus_karakter_aneh = strtolower(str_replace($karakter,"",$artikel_isi));
		$tambah_strip = strtolower(str_replace(' ', '-', $hapus_karakter_aneh));
		$link_akhir = $id_artikel.'-'.$tambah_strip;
		return $link_akhir;
	}
}