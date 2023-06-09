<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
$routes->get('/register', 'Auth::registerpage');
$routes->add('/register/save', 'Auth::userRegister');
$routes->get('/home', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/pelayanan-info-A', 'Home::pelayananA');
$routes->get('/pelayanan-info-B', 'Home::pelayananB');
$routes->get('/pelayanan-info-C', 'Home::pelayananC');
$routes->get('/pelayanan-info-D', 'Home::pelayananD');
$routes->post('/tambah_capai/(:any)', 'Home::tambahCapai/$1');
$routes->post('/kurang_capai/(:any)', 'Home::kurangiCapai/$1');
$routes->post('/hapus_upy/(:any)', 'Home::hapusUpy/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
