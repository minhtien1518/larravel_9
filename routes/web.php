<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;

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
// thu muc view : resources/views/"welcome".blade.php
// Route::get('/', function () {
//     $students =[
//       [
//         'name' => 'chu',
//         'age' => '20',
//         'class' => 'web111',
//         'id' => '1',
//         'avatar' => ''

//       ],
//       [
//         'name' => 'chu123',
//         'age' => '22',
//         'class' => 'web222',
//         'id' => '2'
//       ],
//     ];
//     return view('welcome', ['students' => $students]);
// });
// Route::get('/users/{userId}/{userName?}', function(
//     Request $request,
//     $userId,
//     $userName ='profile'
//     ){    
// });
// });
// thu muc view : resources/views/auth/login.blade.php
// Route::get('/login', function () {
//     // dd('login view');
//     $text = 'Xin chao ca nha';
//     return view('auth.login')->with('text', $text);
// });
Route::get('users/{usersId?}/{usersName?}/{usersClass?}/{usersInfo?}',function (
  Request $request,
  $usersId ='1',
  $usersName = 'tien11',
  $usersClass = 'web16201',
  $usersInfo = 'title'
  )
{
      $users = 
      [
          [
              'name' => 'Minh Tiến',
              'height' => '1m72',
              'weight' => '66',
              'gender' => 'Nam',
              'age' => '22',
              'class'=> 'we16201', 
              'id' => '1',
              'avatar' =>'https://media-cdn-v2.laodong.vn/storage/newsportal/2019/6/10/738354/595097-01.jpg'
          ],
      ];
return view('welcome',
[
  'users' => $users,
  
  'usersId' => $usersId,
  'usersName' => $usersName,
  'usersClass'  => $usersClass,
  'usersInfo' => $usersInfo,
  'request' => $request,

  ]);
});
Route::get('/', function () {
  $users = 
      [
          [
              'name' => 'Minh Tiến',
              'height' => '1m72',
              'weight' => '66',
              'gender' => 'Nam',
              'age' => '22',
              'class'=> 'we16201', 
              'id' => '1',
              'avatar' =>'https://media-cdn-v2.laodong.vn/storage/newsportal/2019/6/10/738354/595097-01.jpg'
          ],
      ];

  return view('home',['users'=> $users]);
})->name('home');
// Route::get('/product', function(){
//   return view('product');
// });

// Route::get('/categories', [CategoryController::class, 'index'])
// ->name('categories');
// prefix là  đường dẫn chung của group. nối /categories/create
// name là name chung của group, nối các name con: categories.index

Route::prefix('/categories')->name('categories.')->group(function () {
  Route::get('/', [CategoryController::class, 'index'])->name('index');
  Route::get('/create', [CategoryController::class, 'create'])->name('create');
  Route::post('/store', [CategoryController::class, 'store'])->name('store');
  Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('edit');
  Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
  Route::delete('/{cate}', [CategoryController::class, 'delete'])->name('delete');
  
});
Route::prefix('/products')->name('products.')->group(function () {
  Route::get('/', [ProductController::class, 'index'])->name('index');
  Route::delete('delete/{delete}',[ProductController::class, 'delete'])->name('delete');  
});