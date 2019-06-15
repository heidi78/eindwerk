<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\User;
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


Route::get('/', 'Front@index');
Route::get('/products', 'Front@products');
Route::get('/products/details/{id}', 'Front@products_details');
Route::get('/products/categories', 'Front@product_categories');
Route::get('/products/brands', 'Front@product_brands');
Route::get('/login', 'Front@login');
Route::get('/logout', 'Front@logout');
Route::get('/complete', 'OrdersController@index')->name('c');

Route::get('/checkout', 'Front@checkout');


Route::post('/checkout', function(Request $request){
	 $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);
   
    $amount = $request->amount;
    $nonce = $request->payment_method_nonce;
    /***betaling transactie zelf**/
    $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => $nonce,
        'options' => [
            'submitForSettlement' => true
        ],

    ]);
    /** gegevens van de klant bewaren in de vault van braintree***/
    $result2 = $gateway->customer()->create([
        'firstName' => 'Mike',
        'lastName' => 'Jones',
        'company' => 'Jones Co.',
        'email' => 'mike.jones@example.com',
        'phone' => '281.330.8004',
        'fax' => '419.555.1235',
        'website' => 'http://example.com'
    ]);//keuze ofwel naar braintree ofwel naar tabel in database dynamisch maken store in database

    if ($result->success) {
        $transaction = $result->transaction;
        // header("Location: transaction.php?id=" . $transaction->id);
       /* $mytransaction = "Betaling gelukt:" . $transaction->id;
        return view('complete',compact('mytransaction'));*/
         return back()->with('success_message', 'Transaction success. The ID is:'. $transaction->id);
    } else {
        $errorString = "";
        foreach($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }
        //$_SESSION["errors"] = $errorString;
        //header("Location: " . $baseUrl . "index.php");
        return back()->withErrors('An error occurred with the message: '.$result->message);

        
    }


});

Route::get('/insert', function(){
	App\Category::create(array('name'=>'Music'));
	return'category added';
});

Route::get('/read', function(){
	$category = new App\Category();

	$data = $Category->all(array('name', 'id'));
	foreach ($data as $list){
		echo $list->id . ' ' . $list->name . '';
	}
});

Route::get('/update', function(){
	$Category = App\Category::find(4);
	$Category->name = 'HEAVY METAL';
	$Category->save();

	$data = $Category->all(array('name', 'id'));

	foreach($data as $list){
		echo $list->id . ' ' . $list->name . '';
	}
});

Route::get('/delete', function(){
	$Category = App\Category::find(4);
	$Category->delete();

	$data = $Category->all(array('name', 'id'));

	foreach($data as $list){
		echo $list->id . ' ' . $list->name . '';
	}
});


Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/admin', 'DashboardController@index');
	Auth::routes();
	Route::resource('/admin/brands','BrandsController');
	Route::resource('/admin/categories','CategoriesController');
	Route::resource('/admin/products','ProductsController');
	Route::resource('/admin/users','AdminUsersController');
	Route::resource('/admin/roles','RolesController');
	Route::resource('/admin/sliders','SlidersController');
});


Route::get('/admin/user/role', ['middleware'=>'role', function(){
    return "Middelware role";
}]);

Route::get('/admin', 'AdminController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'Front@cart');
Route::post('/cart','Front@cart');
Route::get('/clear-cart', 'Front@clear_cart');