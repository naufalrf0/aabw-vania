<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/akun1', 'Akun1::index', ['filter' => 'role:admin']);
$routes->post('/akun1', 'Akun1::store', ['filter' => 'role:admin']);
$routes->put('/akun1/edit/(:any)', 'Akun1::update/$1', ['filter' => 'role:admin']);
$routes->delete('/akun1/(:any)' , 'Akun1::destroy/$1', ['filter' => 'role:admin']);

$routes->get('/akun2/new','Akun2::new', ['filter' => 'role:admin']); 
$routes->get('/akun2/(:segment)/edit','Akun2::edit/$1', ['filter' => 'role:admin']);
$routes->put('/akun2/edit/(:any)', 'Akun2::update/$1', ['filter' => 'role:admin']);
$routes->post('/akun2/(:any)','Akun2::delete/$1', ['filter' => 'role:admin']);

$routes->get('/akun3/new','Akun3::new', ['filter' => 'role:admin']); 
$routes->post('/akun3/new','Akun3::create', ['filter' => 'role:admin']); 
$routes->get('/akun3/(:segment)/edit', 'Akun3::edit/$1', ['filter' => 'role:admin']);

$routes->get('/transaksi/new','Transaksi::new'); 
$routes->get('/transaksi','Transaksi::index'); 
$routes->post('/transaksi','Transaksi::create'); 
$routes->get('/transaksi/(:segment)/edit', 'Transaksi::edit/$1');
$routes->get('/transaksi/(:any)','Transaksi::show/$1'); 

$routes->get('/penyesuaian/new','Penyesuaian::new'); 
$routes->get('/penyesuaian','Penyesuaian::index'); 
$routes->post('/penyesuaian/(:any)','Penyesuaian::delete/$1');
$routes->get('/penyesuaian/(:segment)/edit', 'Penyesuaian::edit/$1');
$routes->get('/penyesuaian/(:any)','Penyesuaian::show/$1'); 

$routes->post('/jurnalumum','JurnalUmum::index');
$routes->post('/posting','Posting::index');

$routes->get('/admin','Admin::index', ['filter' => 'role:admin']); 
$routes->get('/admin/index','Admin::index', ['filter' => 'role:admin']); 
$routes->get('/admin/(:any)','Admin::detail/$1', ['filter' => 'role:admin']); 

$routes->resource('akun2');
$routes->resource('akun3');
$routes->resource('transaksi');
$routes->resource('penyesuaian');
    