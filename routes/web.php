<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('{path}', 'HomeController@index')->where( 'path','([A-z\d\-\/_.]+)' );


Route::resource('/users','UserController');
//Route::get('/userlist','UserController@listUsers');
Route::resource('/posts','PostController');




/*Route::get('/',function(){
	// return view ('welcone');
	// Basic php

	/*$a=5;
	$b = 10;
	echo $a;
	echo ' ';
	return $a+$b;*/

/*
	$a = 'Rohit';
	$b= 'maharjan';

	$n=strlen($a);
	return $n;
	$rev=strrev($a);
	return ("the sring is ".$a." and its str count is " .$n. "and reverse string is" . $rev);*/


/*$a="this\tis\nRohit Maharjan";
$b=trim($a);
echo $b;
*/

/*$a="this, is \nRohit, Maharjan";
$b = preg_split("/[\s,]+/",$a );
echo $b[0];*/


// conditional 

/*$a=17;
if ($a>=13 && $a<=20) {
	echo "teen";
}
else if ($a>20) {
	# code...]
	echo "Adlut";
}
else{
	echo "child";
}
*/

//switch

/*$a =1;
switch ($a) {
	case 0 :
	echo "case 1 selected";
	break;

	case 1:
	echo "case 2 selected";
	break;

	default:
	echo "no case selected";

}*/

//loop

// for

/* for($i=1;$i<=10;$i++)
 {
 	echo $i.' ';	
 }
*/

//while
/*$i=1;
while ($i<=10){
	echo $i.' ' ;
	$i++;
}*/

//do while
/*$i=10;
do {
	echo $i.' ' ;
	$i--;
}while($i<=1);*/

//for each

/*$a=['ram','shyam','hari'];
foreach ($a as $b ) {
	# code...
	echo $b.' ';
}

print_r($a);*/


//});
