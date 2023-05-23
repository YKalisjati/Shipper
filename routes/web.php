<?php

use App\Http\Controllers\admin_menu_controller;
use App\Http\Controllers\AktivasiAkunController;
use App\Http\Controllers\BuatPesananDomestik;
use App\Http\Controllers\CariPesananDenganWaktu;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\download_file_controller;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\jemput_pesanan_controller;
use App\Http\Controllers\LacakPaket;
use App\Http\Controllers\lupaSandiController;
use App\Http\Controllers\penjemputan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserEditController;
use App\Http\Controllers\viewPage;
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
// THIS IS GROUP PAGE ABOUT US                      {{
Route::get('/privacy-policy', [viewPage::class, 'privacy']);

Route::get('/help/create-order', [viewPage::class, 'create_order']);

Route::get('/help/create-pickup', [viewPage::class, 'create_pickup']);

Route::get('/help/report', [viewPage::class, 'create_pickup']);

Route::get('/warehouse', [viewPage::class, 'warehouse']);

Route::get('/integrasi-api', [viewPage::class, 'integrasi_api']);

Route::get('/mitra', [viewPage::class, 'mitra']);

Route::get('/faq', [viewPage::class, 'faq']);

Route::get('/faq-umum', [viewPage::class, 'faq_umum']);

Route::get('/faq-mitra', [viewPage::class, 'faq_mitra']);

Route::get('/faq-api', [viewPage::class, 'faq_api']);

Route::get('/faq-jasa-pengiriman', [viewPage::class, 'faq_pengiriman']);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'save'])->name('contact.store');

Route::get('/tarif-pengiriman', 'App\Http\Controllers\TarifPengirimanController@index')->name('tarifpengiriman');
Route::post('/tarif-pengiriman', 'App\Http\Controllers\TarifPengirimanController@check_ongkir')->name('tarifpengiriman.post');

Route::get('/lacak-paket', [LacakPaket::class, 'getPage'])->name('getPageLacak_paket');
Route::post('/lacak-paket', [LacakPaket::class, 'lacakPaketPengiriman'])->name('lacak_paket');
// THIS IS THE END OF PAGE ABOUT US                 }}

// THIS IS LOGIN PAGE FOR USER                      }}
Route::get('/login', [UserController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::post('login-user', [UserController::class, 'loginUser'])->name('login-user');
// THIS IS THE END OF LOGIN PAGE USER               }}

// THIS IS REGISTER & ACTIVATION PAGE FOR USER      }}
Route::get('/register', [UserController::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::get('/aktivasi', [viewPage::class, 'aktivasi'])->middleware('AlreadyLoggedIn');
Route::get('/AktivasiAkun/getAktivasi/tkn={token}&email={email}', [AktivasiAkunController::class, 'success'])->name('successAktivasi');
// THIS IS THE END OF REGISTER & ACTIVATION PAGE    }}

// THIS IS RESET PASSWORD PAGE FOR USER             }}
Route::get('/lupa-sandi', 'App\Http\Controllers\lupaSandiController@view')->middleware('AlreadyLoggedIn');
Route::post('/lupa-sandi', 'App\Http\Controllers\lupaSandiController@password');

Route::get('/email/resetpassword/tkn={token}&email={email}', [lupaSandiController::class, 'showResetForm'])->name('link-email');
Route::post('/email/resetpassword', [lupaSandiController::class, 'newpassword'])->name('new-password');
// THIS IS THE END OF RESET PASSWORD PAGE           }}

Route::middleware(['isLoggedIn'])->group(static function () { // MIDDLEWARE GROUP CHECKED USER IS LOGIN?
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/help-dashboard', [UserController::class, 'helpDashboard']);
    Route::post('/help-dashboard', [ContactController::class, 'save'])->name('help.store');

    Route::get('/laporan-dashboard', [UserController::class, 'laporanDashboard']);
    Route::post('/laporan-dashboard', [UserController::class, 'getData']);

    Route::get('/pesanan-dashboard', [UserController::class, 'pesananDashboard']);
    Route::post('/pesanan-dashboard/Cari-Pesanan', [CariPesananDenganWaktu::class, 'cariRentangWaktuPesanan'])->name('cariDataPesanan.cek');
    Route::post('/pesanan-dashboard/Batalkan-Pesanan', [CariPesananDenganWaktu::class, 'batalkanPesanan'])->name('batalkanPesanan');

    Route::get('/cashless-dashboard', [UserController::class, 'cashlessDashboard']);

    Route::get('/buatpesandomestik-dashboard', [UserController::class, 'pesananDomestik']);
    Route::post('/buatpesandomestik-dashboard/buat-pesanan', [BuatPesananDomestik::class, 'buatPesanan'])->name('buatPesananDomestik');
    Route::post('/buatpesandomestik-dashboard/cek-kurir', [BuatPesananDomestik::class, 'check_ongkir'])->name('cekKurir');

    Route::get('/PesananExport', [UserController::class, 'pesananExport']);
    Route::post('/import', [UserController::class, 'store'])->name('excel.store');

    Route::get('/buatpesancashless-dashboard', [UserController::class, 'pesananCashless']);

    Route::get('/bulk-upload-domestik-dashboard', [UserController::class, 'bulkDomestik']);

    Route::get('/bulk-upload-cashless-dashboard', [UserController::class, 'bulkCashless']);

    Route::get('/ajukan-penjemputan-dashboard', [UserController::class, 'ajukanPenjemputan']);
    Route::post('/ajukan-penjemputan-dashboard', [penjemputan::class, 'ajukanPenjemputan'])->name('postAjukanPenjemputan');

    Route::get('/setting-dashboard', [UserController::class, 'settingDashboard']);
    Route::get('/download-template-domestik', [download_file_controller::class, 'downloadFile'])->name('downloadTemplateDomestik');
    Route::post('/setting-dashboard/editUser', [UserEditController::class, 'editUser'])->name('editUser');
    Route::post('/setting-dashboard/editPassword', [UserEditController::class, 'gantiPassword'])->name('editPassword');
    Route::post('/setting-dashboard/editAlamat', [UserEditController::class, 'ubahAlamat'])->name('editAlamat');
    Route::post('/setting-dashboard/upload', [ImageUploadController::class, 'upload'])->name('upload');
    Route::post('/setting-dashboard/hapusAlamat', [UserEditController::class, 'hapusAlamat'])->name('hapusAlamat');
    Route::post('/setting-dashboard/hapusImage', [ImageUploadController::class, 'hapusImage'])->name('hapusImage');
    Route::post('/setting-dashboard/editAlamatPenerima', [UserEditController::class, 'editAlamatPenerima'])->name('editAlamatPenerima');
    Route::post('/setting-dashboard/hapusAlamatPenerima', [UserEditController::class, 'hapusAlamatPenerima'])->name('hapusAlamatPenerima');
});

// THIS IS LOGIN PAGE FOR ADMIN                     }}
Route::get('/login-admin', [admin_menu_controller::class, 'viewLoginAdmin'])->middleware('AlreadyLoggedInAdmin');
Route::post('/login-admin', [admin_menu_controller::class, 'LoginAdminPost'])->name('goDashbordAdmin');
// THIS IS THE END OF LOGIN PAGE ADMIN              }}

Route::middleware(['isLoggedInAdmin'])->group(static function () { // MIDDLEWARE GROUP CHECKED ADMIN IS LOGIN?
    Route::get('/jemput-pesanan', [jemput_pesanan_controller::class, 'viewJemputPesanan']);
    Route::post('/jemput-pesanan', [jemput_pesanan_controller::class, 'JemputPesanan'])->name('jemputPesanan');
    Route::get('/terima-pesanan', [jemput_pesanan_controller::class, 'viewTerimaPesanan']);
    Route::post('/terima-pesanan', [jemput_pesanan_controller::class, 'TerimaPesanan'])->name('terimaPesanan');
    Route::get('/warehouse-terima-paket', [jemput_pesanan_controller::class, 'viewTerimaWarehouse']);
    Route::post('/warehouse-terima-paket', [jemput_pesanan_controller::class, 'TerimaWarehouse'])->name('WarehouseTerimaPaket');
    Route::get('/dashboard-admin', [admin_menu_controller::class, 'viewDashboard'])->name('adminDashboard');
    Route::get('/logoutAdmin', [admin_menu_controller::class, 'logoutAdmin']);
});
