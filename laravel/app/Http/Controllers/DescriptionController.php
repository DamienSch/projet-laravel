<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index() {
        return view('about.index');
    }
    public function pageHomme() {
        return view('about.pageHomme');
    }
    public function pageFemme() {
        return view('about.pageFemme');
    }
    public function pageSoldes() {
        return view('about.pageSoldes');
    }
    public function pageMentionsLegales() {
        return view('about.pageMentionsLegales');
    }
    public function pagePresse() {
        return view('about.pagePresse');
    }
    public function pageFabrication() {
        return view('about.pageFabrication');
    }
    public function pageContact() {
        return view('about.pageContact');
    }
    public function pageLivraison() {
        return view('about.pageLivraison');
    }
    public function pageConditionsDeVente() {
        return view('about.pageConditionsDeVente');
    }
}
