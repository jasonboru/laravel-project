<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index() {
    $site_title = "about my larasite";
    $first_names = ["Jason", "Brad", "Jose"];
    //$last_name = "O'Brien";
    $emails = ["jasonboru@gmail.com", "bradisrad@gmail.com", "josevelez@gmail.com"];
      return view('about', compact('site_title', 'first_names', 'emails'));
  }
}
