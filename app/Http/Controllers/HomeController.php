<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index() {
        $pendidikan = User::whereHas('universities', function (Builder $query) {
            $query->whereHas('field', function (Builder $q) {
                $q->where('name', 'like', 'pendidikan');
            });
        })->with('generation', 'universities')->paginate(5);
        $kesehatan = User::whereHas('universities', function (Builder $query) {
            $query->whereHas('field', function (Builder $q) {
                $q->where('name', 'like', 'kesehatan');
            });
        })->with('generation', 'universities')->paginate(5);
        $teknik = User::whereHas('universities', function (Builder $query) {
            $query->whereHas('field', function (Builder $q) {
                $q->where('name', 'like', 'teknik');
            });
        })->with('generation', 'universities')->paginate(5);
        return view('index', compact('pendidikan', 'kesehatan', 'teknik'));
    }
}
