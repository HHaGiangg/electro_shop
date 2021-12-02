<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class BackendHomeController extends Controller
{
    public function index()
    {
        $countUser  = User::select('id')->count();
        $countProduct   = Product::select('id')->count();
        $countTransaction   = Transaction::select('id')->count();
        $countArticle   = Article::select('id')->count();

        $transactions   = Transaction::orderByDesc('id')
            ->limit(10)
            ->get();
        $users  = User::orderByDesc('id')
            ->limit(10)
            ->get();
        $viewData   = [
            'countUser' => $countUser,
            'countProduct' => $countProduct,
            'countTransaction' => $countTransaction,
            'countArticle'  => $countArticle,
            'transactions' => $transactions,
            'users' => $users,
        ];
        return view('backend.index', $viewData);
    }
}
