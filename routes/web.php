<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
return view('posts',[
    'posts'=>  Post::all()
]);
});


Route::get('posts/{post}', function ($id) {
// encontrar una publicación por su slug y pasarla a una vista llamada "post"
  return view('post',[
   'post'=> Post::findOrFail($id)
   ]);
});
