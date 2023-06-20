<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\Category\AddCategoryComponent;
use App\Http\Livewire\Admin\Category\AllCategoryComponent;
use App\Http\Livewire\Admin\Category\EditCategoryComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CoursesComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\InstructorComponent;
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

Route::get('/', HomeComponent::class)->name("home");
Route::get('/courses', CoursesComponent::class)->name("course");
Route::get('/contact', ContactComponent::class)->name("contact");
Route::get('/about-us', AboutComponent::class)->name("about");
Route::get('/instructors', InstructorComponent::class)->name("instructors");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin-dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/all-categories', AllCategoryComponent::class)->name('all_category');
    Route::get('/add-category', AddCategoryComponent::class)->name('add_category');
    Route::get('/edit-category/{id}', EditCategoryComponent::class)->name('edit_category');
});
