<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

public function user ($id, $nom) {
    return ("Bonjour Id: $id , nom : $nom");
}


}
