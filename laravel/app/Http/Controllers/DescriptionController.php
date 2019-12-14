<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /* Home page */
    public function index() {
        return view('about.index');
    }
    /* Men page */
    public function pageHomme() {
        return view('about.pageHomme');
    }
    /* Women page */
    public function pageFemme() {
        return view('about.pageFemme');
    }
    /* Soldes page */
    public function pageSoldes() {
        return view('about.pageSoldes');
    }
    /* Legal mentions page */
    public function pageMentionsLegales() {
        return view('about.pageMentionsLegales');
    }
    /* Press page */
    public function pagePresse() {
        return view('about.pagePresse');
    }
    /* Fabrication page */
    public function pageFabrication() {
        return view('about.pageFabrication');
    }
    /* Contact page */
    public function pageContact() {
        return view('about.pageContact');
    }
    /* Delivery page */
    public function pageLivraison() {
        return view('about.pageLivraison');
    }
    /* Sale conditions page */
    public function pageConditionsDeVente() {
        return view('about.pageConditionsDeVente');
    }
}
