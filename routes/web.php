<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;



Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [PostCommentsController::class, 'store']);

// Route::get('categories/{category:slug}',function(Category $category){
//     return view('menu',[
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()
//     ]);
// })->name('category');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('newsletter', NewsletterController::class);

Route::middleware('can:admin')->group(function(){
    Route::get('admin/posts', [AdminPostController::class,'index']);
    Route::get('admin/posts/create', [AdminPostController::class,'create']);
    Route::post('admin/posts', [AdminPostController::class,'store']);
    Route::get('admin/posts/{post}/edit', [AdminPostController::class,'edit']);
    Route::patch('admin/posts/{post}', [AdminPostController::class,'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class,'destroy']);
});
