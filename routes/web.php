<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Messagemail;
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
    return redirect()->route('login');
});

///<!Homepage and admin Registration!>///
Route::get('login', [App\Http\Controllers\AdminhompageController::class, 'index'])->name('login');
Route::post('submit-login', [App\Http\Controllers\AdminhompageController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [App\Http\Controllers\AdminhompageController::class, 'registration'])->name('register');
Route::post('submit-registration', [App\Http\Controllers\AdminhompageController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [App\Http\Controllers\AdminhompageController::class, 'dashboard']); 
Route::get('logout', [App\Http\Controllers\AdminhompageController::class, 'logout'])->name('logout');
///<!END OF ROUTE GROUP!>///  

///<!Mailing Operations!>///
Route::get('/email',function() {
Mail::to ('uncleallan6969@gmail.com')->send(new Messagemail());
return new Messagemail();
});
Route::get('/send/email',[App\Http\Controllers\ArtistController::class,'send_mail' ])->name('sendmessage');
///<!END OF ROUTE GROUP!>/// 

///<!Admin Phonebook!>///
Route::get('/addcontact',[App\Http\Controllers\ContactController::class,'create' ])->name('executive_phonebookreg');
Route::post('/addcontact/registered',[App\Http\Controllers\ContactController::class,'store' ])->name('phonebook_register');
Route::get('/phonebook',[App\Http\Controllers\ContactController::class,'show' ])->name('phonebook_showdata');
Route::get('/phonebook/edit/{id}',[App\Http\Controllers\ContactController::class,'edit' ])->name('phonebook_updata');
Route::post('/phonebook/edit/{id}/updated',[App\Http\Controllers\ContactController::class,'update' ])->name('phonebook_updataprocess');
Route::get('contact/delete/{id}',[App\Http\Controllers\ContactController::class,'destroycontact' ])->name('phonebook_updatadelete');
Route::post('contact/delete/{id}',[App\Http\Controllers\ContactController::class,'destroycontact' ])->name('phonebook_updatadeletedel');
///<!END OF ROUTE GROUP!>///  

///<!Admin Agenda!>///
Route::get('/homepage',[App\Http\Controllers\AdminhompageController::class,'show' ])->name('executive_homepage')->middleware('auth');;
Route::get('/addagenda',[App\Http\Controllers\AdminhompageController::class,'agendaindex' ])->name('executive_agendareg');
Route::post('/homepage/addagenda/register',[App\Http\Controllers\AdminhompageController::class,'agendastore' ])->name('executive_agendaregister');
Route::get('/updateagenda/{id}',[App\Http\Controllers\AdminhompageController::class,'edit' ])->name('executive_agenupdata');
Route::post('/updateagenda/updated!',[App\Http\Controllers\AdminhompageController::class,'update' ])->name('executive_agenupdataprocess');
Route::get('/delete/{id}',[App\Http\Controllers\AdminhompageController::class,'destroy' ])->name('executive_agendatadelete');
Route::post('agenda/delete/{id}',[App\Http\Controllers\AdminhompageController::class,'destroy' ])->name('executive_agendatadeleteprocess');
///<!END OF ROUTE GROUP!>///  

///<!Admin Calendar!>///
Route::get('/calendar',[App\Http\Controllers\AdminhompageController::class,'widgetcalendar' ])->name('executive_calendar');
Route::get('/calendar',[App\Http\Controllers\AdminhompageController::class,'showschedule' ])->name('executive_calendar');
Route::post('/calendar/addschedule',[App\Http\Controllers\AdminhompageController::class,'scheduleregister' ])->name('executive_scheculereg');
///<!END OF ROUTE GROUP!>///

///<!Admin Artistlist!>///
Route::get('/addartist',[App\Http\Controllers\ArtistController::class,'create' ])->name('executive_artistregister');
Route::post('/addartist/registered-processed',[App\Http\Controllers\ArtistController::class,'artist_register' ])->name('executive_artistregisterprocess');
Route::get('/artistlist',[App\Http\Controllers\ArtistController::class,'show' ])->name('admin_artistlist');
Route::get('/artistlist/edit/{id}',[App\Http\Controllers\ArtistController::class,'edit_artist' ])->name('executive_artitsprofileupdate_view');
Route::post('/artistlist/edited',[App\Http\Controllers\ArtistController::class,'update_artist' ])->name('executive_artist_update_post');
Route::get('artist/delete/{id}',[App\Http\Controllers\ArtistController::class,'destroy_artist' ])->name('executive_artistsdelete_view');
Route::post('artist/delete/{id}',[App\Http\Controllers\ArtistController::class,'destroy_artist' ])->name('executive_artistsdelete_view_post');
///<!END OF ROUTE GROUP!>///

///<!Admin Artistprofile_VIEW!>///  
Route::get('/artistinfo',[App\Http\Controllers\ArtistController::class,'artistprofile_view  ' ])->name('test_artistprofile');
Route::get('/artistinfo-show-profile/{id}',[App\Http\Controllers\ArtistController::class,'artist_profile' ])->name('executive_artistprofile');
///<!END OF ROUTE GROUP!>///                    

///<!Admin Artist_song_VIEW!>///
Route::get('/song-listing/{id}',[App\Http\Controllers\ArtistController::class,'artist_musiclisting'])->name('executive_songlisting_show');  
Route::get('/song-listing/{id}',[App\Http\Controllers\ArtistController::class,'initialize_song_showdata'])->name('executive_songlisting_show');  
Route::get('/register-song',[App\Http\Controllers\ArtistController::class,'register_song_view' ])->name('executive_songregister_view');
Route::post('/register-song/process-registered',[App\Http\Controllers\ArtistController::class,'song_register' ])->name('executive_songregisterprocess');
Route::get('/update-song/post',[App\Http\Controllers\ArtistController::class,'song_update' ])->name('executive_songupdate_process');
Route::get('/update-song/{id}',[App\Http\Controllers\ArtistController::class,'song_update_view' ])->name('executive_songupdate');
Route::post('/songlist/process-registered',[App\Http\Controllers\ArtistController::class,'song_register' ])->name('executive_songupdate_post');
Route::get('/song/{id}',[App\Http\Controllers\ArtistController::class,'delete_songs' ])->name('executive_artistsdelete');
Route::post('/void/{id}',[App\Http\Controllers\ArtistController::class,'delete_songs' ])->name('executive_artistsdeleteprocess');
///<!END OF ROUTE GROUP!>///    

///<!Admin Employee_profileVIEW!>///
Route::get('/employeeinfo',[App\Http\Controllers\EmployeesController::class,'employeeprofile_view' ])->name('test_employeeprofile');
Route::get('/employeeinfo/{id}',[App\Http\Controllers\EmplosyeesController::class,'employeecredentials' ])->name('executive_employeeprofile');
///<!END OF ROUTE GROUP!>///    

///<!Admin Employeelist!>///
Route::get('/employeelist',[App\Http\Controllers\EmployeesController::class,'show'])->name('admin_employeelist');
Route::get('/employeeregister',[App\Http\Controllers\EmployeesController::class,'create'])->name('executive_employeeregister');
Route::post('/employeeregister/registered',[App\Http\Controllers\EmployeesController::class,'store'])->name('executive_employeeregisterprocess');
Route::get('/employeeupdate/{id}',[App\Http\Controllers\EmployeesController::class,'edit'])->name('executive_employeeupdate');
Route::post('/employeeupdate/proccessing',[App\Http\Controllers\EmployeesController::class,'Update'])->name('executive_employeeupdateprocessing');
Route::get('remove/{id}',[App\Http\Controllers\EmployeesController::class,'destroy' ])->name('executive_employeedelete');
Route::post('employee/fire/{id}',[App\Http\Controllers\EmployeesController::class,'destroy' ])->name('executive_employeedeleteprocess');
///<!END OF ROUTE GROUP!>///

///<!Admin INBOX_VIEW!>///
Route::get('/messages',[App\Http\Controllers\AdminhompageController::class,'admin_inbox_view' ])->name('executive_inbox');
///<!END OF ROUTE GROUP!>///    

///<!Admin Employeelist!>///
Route::get('/product-list',[App\Http\Controllers\ArtistController::class,'product_index'])->name('admin_product_index');
Route::get('/product-listing',[App\Http\Controllers\ArtistController::class,'show_product'])->name('executive_productlist');
Route::get('/product-register',[App\Http\Controllers\ArtistController::class,'create_product'])->name('product_register');
Route::post('/product-registered',[App\Http\Controllers\ArtistController::class,'store_product'])->name('product_register_post');
Route::get('/product/{id}',[App\Http\Controllers\ArtistController::class,'edit_product'])->name('product_update_view');
Route::post('/product/proccessing',[App\Http\Controllers\ArtistController::class,'update_product'])->name('product_update_post');
Route::get('trash/{id}',[App\Http\Controllers\ArtistController::class,'destroy_product' ])->name('product_delete');
Route::post('product/trash/{id}',[App\Http\Controllers\ArtistController::class,'destroy_product' ])->name('product_delete_post');
///<!END OF ROUTE GROUP!>///

///<!Admin Document!>///
Route::get('/document',[App\Http\Controllers\AdminhompageController::class,'document_index' ])->name('executive_documents');
Route::get('/document-register',[App\Http\Controllers\AdminhompageController::class,'create_document' ])->name('executive_document_register');
Route::post('/document_store',[App\Http\Controllers\AdminhompageController::class,'document_store' ])->name('executive_document_register_post');
Route::get('/document',[App\Http\Controllers\AdminhompageController::class,'show_document' ])->name('executive_documents');
Route::get('/document-update',[App\Http\Controllers\AdminhompageController::class,'edit_document' ])->name('executive_document_update');
Route::post('/document-update',[App\Http\Controllers\AdminhompageController::class,'update_document' ])->name('executive_document_update');
Route::get('/document-delete/{id}',[App\Http\Controllers\AdminhompageController::class,'document_delete' ])->name('executive_document_delete');
///<!END OF ROUTE GROUP!>///    








