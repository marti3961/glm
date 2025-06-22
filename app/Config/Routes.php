<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->options('(:any)', function () {
    return response()->setStatusCode(200);
});
//public views routing 
$routes->get('/', 'Home::index');
$routes->get('/quienes-somos', 'Home::quienes_somos');
$routes->get('/servicios-quieres-rentar-vender', 'Home::quieres_vender_rentar');
$routes->get('/servicios-quieres-rentar', 'Home::quieres_rentar');
$routes->get('/servicios-quieres-vender', 'Home::quieres_vender');
$routes->get('/servicios-quieres-financiamiento', 'Home::quieres_financiamiento');
$routes->get('/desarrollo-san-antonio-pachuquilla', 'Home::san_antonio_pachuquilla');
$routes->get('/desarrollo-las-peras', 'Home::las_peras');
$routes->get('/desarrollo-paseo-de-las-reynas', 'Home::paseo_de_las_reynas');
$routes->get('/desarrollo-privada-la-palma', 'Home::privada_la_palma');
$routes->get('/desarrollo-valle-del-alamo', 'Home::valle_del_alamo');
$routes->get('/proximos-proyectos', 'Home::proximos_proyectos');
$routes->get('proximos-proyectos-locales', 'Home::proximos_proyectos_locales');
$routes->get('proximos-proyectos-casas', 'Home::proximos_proyectos_casas');
$routes->get('proximos-proyectos-plazas', 'Home::proximos_proyectos_plazas');
$routes->get('proximos-proyectos-terrenos', 'Home::proximos_proyectos_terrenos');
$routes->get('/contacto', 'Home::contacto');
$routes->post('contacto/enviarMensaje', 'Home::enviarMensaje');
$routes->get('/sitemap', 'Sitemap::index');

//end public views routing 
$routes->post('login', 'Auth::login',['filter'=>'cors']);
$routes->group('api', ['filter' => 'cors','auth'], function ($routes) {
    $routes->get('users', 'Users::index');
    $routes->get('users/(:num)', 'Users::show/$1');
    $routes->post('users', 'Users::create');
    $routes->put('users/(:num)', 'Users::update/$1');
    $routes->delete('users/(:num)', 'Users::delete/$1');
    //products
    $routes->get('products', 'Products::index');
    $routes->get('products/(:num)', 'Products::show/$1');
    $routes->post('products', 'Products::create');
    $routes->put('products/(:num)', 'Products::update/$1');
    $routes->delete('products/(:num)', 'Products::delete/$1');
    //products Extras
    $routes->get('productExtras', 'ProductsExtra::index');
    $routes->get('productExtras/(:num)', 'ProductsExtra::show/$1');
    $routes->post('productExtras', 'ProductsExtra::create');
    $routes->put('productExtras/(:num)', 'ProductsExtra::update/$1');
    $routes->delete('productExtras/(:num)', 'ProductsExtra::delete/$1');
    //Projects
    $routes->get('/', 'Projects::index');
    $routes->get('(:num)', 'Projects::show/$1');
    $routes->post('/', 'Projects::create');
    $routes->put('(:num)', 'Projects::update/$1');
    $routes->delete('(:num)', 'Projects::delete/$1');
    //Contactanos
    $routes->get('mensajes', 'Contactanos::index');
    $routes->get('mensajes/(:num)', 'Contactanos::show/$1');
    $routes->delete('mensajes/(:num)', 'Contactanos::delete/$1');
    //Contizacones
    $routes->get('cotizaciones', 'Cotizaciones::index');
    $routes->get('cotizaciones/(:num)', 'Cotizaciones::show/$1');
    $routes->delete('cotizaciones/(:num)', 'Cotizaciones::delete/$1');
    //Sliders
    $routes->get('sliders', 'Slider::index');
    $routes->get('sliders/(:num)', 'Slider::show/$1');
    $routes->post('sliders', 'Slider::create');
    $routes->post('sliders/(:num)', 'Slider::update/$1');
    $routes->delete('sliders/(:num)', 'Slider::delete/$1');
    $routes->get('general_settings','GeneralSettings::index');	
    $routes->post('general_settings','GeneralSettings::update');	
});