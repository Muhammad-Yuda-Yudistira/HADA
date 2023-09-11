<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require 'vendor/simple_html_dom/simple_html_dom.php';

class AsiaDramaScrapperController extends Controller
{
    public function scrape()
{
    return "Halaman Asia drama";
//    // Ambil file HTML
//     $html = file_get_html('https://mydramalist.com/search?adv=titles&ty=68,77&co=3,2&so=newest&or=desc');

//     // Ambil semua element dengan kelas "myClass"
//     $elements = $html->find('div.b-primary');

//     var_dump($elements);

//     foreach($elements as $element) {
//     // Lakukan sesuatu dengan element
//     }
}
}
