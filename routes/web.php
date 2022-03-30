<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\DistricController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\VideoCategoryController;
use App\Http\Controllers\Admin\VideoPostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UpozilaController;
use App\Http\Controllers\Admin\GallaryController;
use App\Http\Controllers\Front\MainController;
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
//     return view('welcome');
// });

//front route
  Route::get('/',[MainController::class,'main']);


  Route::get('category/{slug}',[MainController::class,'categorywish']);
  Route::get('subcategory/{slug}',[MainController::class,'subcategory']);
  Route::get('single/{slug}',[MainController::class,'Single']);

  
  Route::get('/contact-us',[MainController::class,'contactUS']);
  Route::get('/privacy-policy',[MainController::class,'PrivacyPolicy']);
  Route::get('/terms-and-condition',[MainController::class,'TermCondition']);

  Route::get('/videos',[MainController::class,'AllVideo']);
  Route::get('/video/{slug}',[MainController::class,'VideoSingle']);

   Route::get('get/division_new/{division_id}', [MainController::class, 'GetDivision']);
  Route::get('get/distric_new/{distric_id}', [MainController::class, 'GetDIstric']);


 Route::get('post/get', [MainController::class, 'PostDevision']);

  
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//backend route
  Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');
  Route::post('admin/store',[AdminController::class,'store'])->name('admin.store');

  Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('admin');
  Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout')->middleware('admin');
  Route::get('admin/profile',[AdminController::class,'profile'])->name('admin.profile')->middleware('admin');
  Route::post('update/profile',[AdminController::class,'update'])->name('update.profile')->middleware('admin');
  Route::get('change/password',[AdminController::class,'changePassord'])->name('change.password')->middleware('admin');
  Route::post('update/password',[AdminController::class,'UpdatePassword'])->name('update.password')->middleware('admin');


//category route
  Route::get('all/category',[CategoryController::class,'all'])->name('all.category')->middleware('admin');
  Route::get('add/category',[CategoryController::class,'add'])->name('add.category')->middleware('admin');
  Route::post('store/category',[CategoryController::class,'store'])->name('store.category')->middleware('admin');
  Route::get('edit/category/{id}',[CategoryController::class,'edit'])->name('edit.category')->middleware('admin');
  Route::get('delete/category/{id}',[CategoryController::class,'delete'])->name('delete.category')->middleware('admin');
  Route::post('update/category/{id}',[CategoryController::class,'update'])->name('update.category')->middleware('admin');


  //subcategory route
    Route::get('all/subcategory',[SubCategoryController::class,'all'])->name('all.subcategory')->middleware('admin');
    Route::get('add/subcategory',[SubCategoryController::class,'add'])->name('add.subcategory')->middleware('admin');
    Route::post('store/subcategory',[SubCategoryController::class,'store'])->name('store.subcategory')->middleware('admin');
    Route::get('edit/subcategory/{id}',[SubCategoryController::class,'edit'])->name('edit.subcategory')->middleware('admin');
    Route::get('delete/subcategory/{id}',[SubCategoryController::class,'delete'])->name('delete.subcategory')->middleware('admin');
    Route::post('update/subcategory/{id}',[SubCategoryController::class,'update'])->name('update.subcategory')->middleware('admin');


//division route
  Route::get('all/division',[DivisionController::class,'all'])->name('all.division')->middleware('admin');
  Route::get('add/division',[DivisionController::class,'add'])->name('add.division')->middleware('admin');
  Route::post('store/division',[DivisionController::class,'store'])->name('store.division')->middleware('admin');
  Route::get('edit/division/{id}',[DivisionController::class,'edit'])->name('edit.division')->middleware('admin');
  Route::get('delete/division/{id}',[DivisionController::class,'delete'])->name('delete.division')->middleware('admin');
  Route::post('update/division/{id}',[DivisionController::class,'update'])->name('update.division')->middleware('admin');

  //distric route
  Route::get('all/distric',[DistricController::class,'all'])->name('all.distric')->middleware('admin');
  Route::get('add/distric',[DistricController::class,'add'])->name('add.distric')->middleware('admin');
  Route::post('store/distric',[DistricController::class,'store'])->name('store.distric')->middleware('admin');
  Route::get('edit/distric/{id}',[DistricController::class,'edit'])->name('edit.distric')->middleware('admin');
  Route::get('delete/distric/{id}',[DistricController::class,'delete'])->name('delete.distric')->middleware('admin');
  Route::post('update/distric/{id}',[DistricController::class,'update'])->name('update.distric')->middleware('admin');


  //upzila route
  Route::get('all/upzila',[UpozilaController::class,'all'])->name('all.upzila')->middleware('admin');
  Route::get('add/upzila',[UpozilaController::class,'add'])->name('add.upzila')->middleware('admin');
  Route::post('store/upzila',[UpozilaController::class,'store'])->name('store.upzila')->middleware('admin');
  Route::get('edit/upzila/{id}',[UpozilaController::class,'edit'])->name('edit.upzila')->middleware('admin');
  Route::get('delete/upzila/{id}',[UpozilaController::class,'delete'])->name('delete.upzila')->middleware('admin');
  Route::post('update/upzila/{id}',[UpozilaController::class,'update'])->name('update.upzila')->middleware('admin');





// post route
  Route::get('all/post',[PostController::class,'all'])->name('all.post')->middleware('admin');
  Route::get('add/post',[PostController::class,'add'])->name('add.post')->middleware('admin');
  Route::post('store/post',[PostController::class,'store'])->name('store.post')->middleware('admin');
  Route::get('edit/post/{id}',[PostController::class,'edit'])->name('edit.post')->middleware('admin');
  Route::get('delete/post/{id}',[PostController::class,'delete'])->name('delete.post')->middleware('admin');
  Route::post('update/post/{id}',[PostController::class,'update'])->name('update.post')->middleware('admin');
  Route::get('get/division/{division_id}', [PostController::class, 'GetSubcat'])->middleware('admin');
  Route::get('get/category/{category_id}', [PostController::class, 'GetCat'])->middleware('admin');
  Route::get('get/distric/{distric_id}', [PostController::class, 'GetDis'])->middleware('admin');


//video post caegory route
  Route::get('all/videocategory',[VideoCategoryController::class,'all'])->name('all.videocategory')->middleware('admin');
  Route::get('add/videocategory',[VideoCategoryController::class,'add'])->name('add.videocategory')->middleware('admin');
  Route::post('store/videocategory',[VideoCategoryController::class,'store'])->name('store.videocategory')->middleware('admin');
  Route::get('edit/videocategory/{id}',[VideoCategoryController::class,'edit'])->name('edit.videocategory')->middleware('admin');
  Route::get('delete/videocategory/{id}',[VideoCategoryController::class,'delete'])->name('delete.videocategory')->middleware('admin');
  Route::post('update/videocategory/{id}',[VideoCategoryController::class,'update'])->name('update.videocategory')->middleware('admin');



  //video post  route
    Route::get('all/video',[VideoPostController::class,'all'])->name('all.video')->middleware('admin');
    Route::get('add/video',[VideoPostController::class,'add'])->name('add.video')->middleware('admin');
    Route::post('store/video',[VideoPostController::class,'store'])->name('store.video')->middleware('admin');
    Route::get('edit/video/{id}',[VideoPostController::class,'edit'])->name('edit.video')->middleware('admin');
    Route::get('delete/video/{id}',[VideoPostController::class,'delete'])->name('delete.video')->middleware('admin');
    Route::post('update/video/{id}',[VideoPostController::class,'update'])->name('update.video')->middleware('admin');


    //gallry post  route
      Route::get('all/gallry',[GallaryController::class,'all'])->name('all.gallry')->middleware('admin');
      Route::get('add/gallry',[GallaryController::class,'add'])->name('add.gallry')->middleware('admin');
      Route::post('store/gallry',[GallaryController::class,'store'])->name('store.gallry')->middleware('admin');
      Route::get('edit/gallry/{id}',[GallaryController::class,'edit'])->name('edit.gallry')->middleware('admin');
      Route::get('delete/gallry/{id}',[GallaryController::class,'delete'])->name('delete.gallry')->middleware('admin');
      Route::post('update/gallry/{id}',[GallaryController::class,'update'])->name('update.gallry')->middleware('admin');



    //ads route
  Route::get('all/ads',[AdsController::class,'all'])->name('all.ads')->middleware('admin');
  Route::get('add/ads',[AdsController::class,'add'])->name('add.ads')->middleware('admin');
  Route::post('store/ads',[AdsController::class,'store'])->name('store.ads')->middleware('admin');
  Route::get('edit/ads/{id}',[AdsController::class,'edit'])->name('edit.ads')->middleware('admin');
  Route::get('delete/ads/{id}',[AdsController::class,'delete'])->name('delete.ads')->middleware('admin');
  Route::post('update/ads/{id}',[AdsController::class,'update'])->name('update.ads')->middleware('admin');




  Route::get('all/user',[UserController::class,'all'])->name('all.user')->middleware('admin');
  Route::get('add/user',[UserController::class,'add'])->name('add.user')->middleware('admin');
  Route::post('store/user',[UserController::class,'store'])->name('store.user')->middleware('admin');
  Route::get('edit/user/{id}',[UserController::class,'edit'])->name('edit.user')->middleware('admin');
  Route::get('delete/user/{id}',[UserController::class,'delete'])->name('delete.user')->middleware('admin');
  Route::post('update/user/{id}',[UserController::class,'update'])->name('update.user')->middleware('admin');





  //setting route
  Route::get('website/setting',[SettingController::class,'setting'])->name('website.setting')->middleware('admin');
  Route::post('update/setting/{id}',[SettingController::class,'update'])->name('update.setting')->middleware('admin');