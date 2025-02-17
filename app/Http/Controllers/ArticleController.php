<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($id = null)
    {
        if (is_null($id)) {
            return 'Halaman Artikel tanpa ID';
        }

        return "Halaman Artikel dengan ID {$id}";
    }
}
