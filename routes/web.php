<?php

use App\http\Controllers\BiroController;
use App\http\Controllers\FrontendController;
use App\http\Controllers\KategoriController;
use App\http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome',KategoriController::class);
// });

Auth::routes(
    [
        'register' => false,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/', function () {
//         return 'Halaman Admin';
//     });

//     Route::get('profile', function () {
//         return 'Halaman profil Admin';
//     });
// });

// Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
//     Route::get('/', function () {
//         return 'Halaman Pengguna';
//     });

//     Route::get('profile', function () {
//         return 'Halaman profil pengguna';
//     });
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('buku', function () {
//         return view('buku.index');
//     });

//     Route::get('pengarang', function () {
//         return view('pengarang.index');
//     });
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('buku', function () {
//         return view('buku.index');
//     })->middleware(['role:admin']);

//     Route::get('pengarang', function () {
//         return view('pengarang.index');
//     })->middleware(['role:admin']);
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//         Route::get('layouts.admin', function () {
//             return view('layouts.admin');
//         })->middleware(['role:admin']);

Route::get('layouts', function () {
    return view('layouts.admin');
});
// Route::get('layouts', function () {
//     return view('layouts.frontend');
// });
Route::get('layouts', function () {
    return view('layouts.front');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('layouts', function () {
        return view('layouts.admin');
    });
    Route::get('layouts', function () {
        return view('layouts.frontend');
    });

    Route::get('kategori', function () {
        return view('kategori.index');
    })->middleware(['role:admin']);
    Route::resource('kategori', KategoriController::class);

    // Route::get('wisatawan', function () {
    //     return view('wisatawan.index');
    // })->middleware(['role:admin']);
    // Route::resource('wisatawan', WisatawanController::class);

    Route::get('biro', function () {
        return view('biro.index');
    })->middleware(['role:admin']);
    Route::resource('biro', BiroController::class);

    Route::get('wisata', function () {
        return view('wisata.index');
    })->middleware(['role:admin']);
    Route::resource('wisata', WisataController::class);

});
// Route::group(['prefix' => 'admin','pengunjung', 'middleware' => ['auth']], function () {
Route::resource('/', FrontendController::class);
Route::get('wisata/{wisata}', [FrontendController::class, 'singleblog']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('layouts', function () {
    return view('layouts.front');
});

// Route::get('', function(){
//     return view('layouts.front');
// });

// });
// Route::resource('/', FrontendController::class);

// Route::resource('/', DashboardController::class);

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('wisatawan', function () {
//         return view('wisatawan.index');
//     })->middleware(['role:admin']);
//     Route::resource('wisatawan', WisatawanController::class);
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('biro', function () {
//         return view('biro.index');
//     })->middleware(['role:admin']);
//     Route::resource('biro', BiroController::class);
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('wisata', function () {
//         return view('wisata.index');
//     })->middleware(['role:admin']);
//     Route::resource('wisata', WisataController::class);
// });
