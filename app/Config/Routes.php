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
$routes->get('/proyectos', 'Home::proyectos');
// $routes->get('/servicios-quieres-rentar-vender', 'Home::quieres_vender_rentar');
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
$routes->get('san-antonio-monserrat-petite', 'Home::san_antonio_monserrat_petite');
$routes->get('san-antonio-monserrat', 'Home::san_antonio_monserrat');
$routes->get('/contacto', 'Home::contacto');
$routes->post('contacto/enviarMensaje', 'Home::enviarMensaje');
$routes->get('/sitemap', 'Sitemap::index');

//end public views routing 
$routes->post('login', 'Auth::login',['filter'=>'cors']);
// Route for a single project detail page
$routes->get('proyectos/(:segment)', 'Projects::detail/$1');
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
    //Proyectos
    // Admin routes for managing projects
    $routes->get('proyectos/(:segment)', 'Proyectos::getById/$1');
    $routes->post('proyectos/save', 'Proyectos::store');
    $routes->get('proyectos', 'Proyectos::index');
    $routes->post('proyectos/(:segment)', 'Proyectos::update/$1');
    $routes->delete('proyectos/(:segment)', 'Proyectos::delete/$1');
    //Admin routes for managing testimonios
    $routes->get('testimonios', 'Testimonios::index');
    $routes->get('testimonios/(:segment)', 'Testimonios::show/$1');
    $routes->post('testimonios', 'Testimonios::create');
    $routes->put('testimonios/(:segment)', 'Testimonios::update/$1');
    $routes->delete('testimonios/(:segment)', 'Testimonios::delete/$1');
    

});