<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Admin Route
$routes->get('/', 'AdminControllers::index');
$routes->get('/admin', 'AdminControllers::dashboard');
$routes->get('/pasangan_calon', 'AdminControllers::calonPasangan');
$routes->get('/tambah_calon', 'AdminControllers::tambahCalon');
$routes->get('/panitia', 'AdminControllers::panitia');
$routes->get('/suara', 'AdminControllers::getSuara');
$routes->get('/generate', 'AdminControllers::generate');
$routes->post('/create_panitia', 'AdminControllers::createPanitia');

///Mobile REST API
$routes->get('/pasangancalon/(:segment)', 'MobileController::pasanganCalon/$1');
$routes->post('/suara', 'MobileController::kirimSuara');
$routes->post('/login', 'MobileController::Login');
$routes->get('/detail/(:segment)', 'MobileController::detailPanitia/$1');
$routes->get('/getsuara/(:segment)', 'MobileController::getSuara/$1');

//mencoba gagal
$routes->post('/auth/login', 'AuthController::login');
// $routes->post('/loginn', 'MobileController::cekLogin');
// $routes->resource('pasangancalon');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
