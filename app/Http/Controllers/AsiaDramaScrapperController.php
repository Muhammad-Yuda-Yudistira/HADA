<?php

include('');
namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsiaDramaScrapperController extends Controller
{
    public function scrape()
{
   // Inisialisasi sesi cURL
   $ch = curl_init();

   // Atur opsi cURL
   curl_setopt($ch, CURLOPT_URL, "https://www.imdb.com/chart/boxoffice/?ref_=nv_ch_cht");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   // Jalankan permintaan cURL
   $response = curl_exec($ch);

   // Tutup sesi cURL
   curl_close($ch);

   // Buat objek DOMDocument baru
   $doc = new DOMDocument();

   // Muat HTML ke dalam DOMDocument
   @$doc->loadHTML($response);

   // Dapatkan semua element dengan kelas "title"
   $titles = $doc->getElementsByTagName("titleColumn");

   // Buat array untuk menyimpan judul film
   $movies = array();

   // Iterasi setiap element title
   foreach ($titles as $title) {
       // Dapatkan element a yang terdapat dalam element title
       $anchor = $title->getElementsByTagName("a")[0];
       // Tambahkan judul film ke array movies
       $movies[] = $anchor->nodeValue;
   }

   // Kembalikan array movies
   return $movies;
}
}
