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
// custom routes

// Routes for frontend
$routes->get('/', 'Frontend::index');
$routes->get('/signin', 'Usersignin::index');



$routes->get('/admin/dashboard', 'UserDashboardController::index',['filter' => 'frontauthGuard']);

$routes->get('/admin/show_circle', 'UserDashboardController::circle_show',['filter' => 'frontauthGuard']);
$routes->get('/admin/add_circle', 'UserDashboardController::circle',['filter' => 'frontauthGuard']);
$routes->get('/admin/circle_edit/(:num)', 'UserDashboardController::circle_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/circle_delete/(:num)', 'UserDashboardController::circle_delete/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/show_company', 'UserDashboardController::company_show',['filter' => 'frontauthGuard']);
$routes->get('/admin/add_company', 'UserDashboardController::company',['filter' => 'frontauthGuard']);
$routes->get('/admin/company_edit/(:num)', 'UserDashboardController::company_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/company_delete/(:num)', 'UserDashboardController::company_delete/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/show_division', 'UserDashboardController::division_show',['filter' => 'frontauthGuard']);
$routes->get('/admin/add_division', 'UserDashboardController::division',['filter' => 'frontauthGuard']);
$routes->get('/admin/division_edit/(:num)', 'UserDashboardController::division_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/update', 'UserDashboardController::update',['filter' => 'frontauthGuard']);
$routes->get('/admin/delete/(:num)', 'UserDashboardController::delete/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/show_product', 'UserDashboardController::product_info',['filter' => 'frontauthGuard']);
$routes->get('/admin/add_product', 'UserDashboardController::product',['filter' => 'frontauthGuard']);
$routes->get('/admin/division_edit/(:num)', 'UserDashboardController::product_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/update', 'UserDashboardController::p_update',['filter' => 'frontauthGuard']);
$routes->get('/admin/delete/(:num)', 'UserDashboardController::p_delete/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/show_document', 'UserDashboardController::show_document',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_data/(:any)', 'UserDashboardController::document_info/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_add','UserDashboardController::document_upload',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_edit/(:num)', 'UserDashboardController::document_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_update', 'UserDashboardController::document_update',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_delete/(:num)', 'UserDashboardController::document_delete/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_views/(:num)', 'UserDashboardController::document_views/$1',['filter' => 'frontauthGuard']);




$routes->get('/admin/document_edit_delete/(:num)', 'UserDashboardController::document_edit_delete/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/documents-approver/(:any)', 'UserDashboardController::document_approve/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/doc_approve', 'UserDashboardController::doc_approve',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_ap_views/(:num)', 'UserDashboardController::document_ap_views/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/document_tender', 'UserDashboardController::document_ch_show',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_check/(:any)', 'UserDashboardController::document_checkrs/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_assign','UserDashboardController::document_assign',['filter' => 'frontauthGuard']);
$routes->get('/admin/document_assign_view/(:any)', 'UserDashboardController::document_checkr_assign_view/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/document_uploader', 'UserDashboardController::document_uploader',['filter' => 'frontauthGuard']);


$routes->get('/admin/tender_show', 'UserDashboardController::tender_show',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_data', 'UserDashboardController::tender_info',['filter' => 'frontauthGuard']);
$routes->get('/admin/add_tender', 'UserDashboardController::add_tender',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_edit/(:num)', 'UserDashboardController::tender_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_update', 'UserDashboardController::tender_update',['filter' => 'frontauthGuard']);
$routes->get('/admin/tenderdelete/(:num)', 'UserDashboardController::tend_delete/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_assigned_users/(:any)', 'UserDashboardController::tender_assigned_users/$1',['filter' => 'frontauthGuard']);



$routes->get('/admin/tender_view/(:num)', 'UserDashboardController::tender_view_show/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/cor_delete/(:num)', 'UserDashboardController::cor_delete/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/tender_approve', 'UserDashboardController::tender_approve',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_view/(:num)', 'UserDashboardController::tender_approve_view/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_assign/(:any)', 'UserDashboardController::tender_assign/$1',['filter' => 'frontauthGuard']);



// Routes for backend
$routes->get('/admin_user', 'SigninController::index');
$routes->get('/admin_user/dashboard', 'DashboardController::index',['filter' => 'authGuard']);

$routes->get('/admin_user/view_user', 'AdminUserlist::index',['filter' => 'authGuard']);
$routes->get('/admin_user/add_user', 'AdminUserlist::create',['filter' => 'authGuard']);
$routes->get('/admin_user/delete_user/(:num)', 'AdminUserlist::delete_user/$1',['filter' => 'authGuard']);
$routes->get('/admin_user/user_edit/(:num)', 'AdminUserlist::singleuser/$1',['filter' => 'authGuard']);
$routes->get('/admin_user/update', 'AdminUserlist::update',['filter' => 'authGuard']);

$routes->get('/admin_user/user_details/(:num)', 'AdminUserlist::detilsuser/$1',['filter' => 'authGuard']);

// Document List//

$routes->get('/admin_user/document_test', 'DashboardController::show_documenttest',['filter' => 'authGuard']);

$routes->get('/admin_user/document_shows', 'DashboardController::show_document',['filter' => 'authGuard']);
$routes->get('/admin_user/document_shows/technical_document', 'DashboardController::document_technical',['filter' => 'authGuard']);
$routes->get('/admin_user/document_edit/(:num)', 'DashboardController::document_master_edit/$1',['filter' => 'authGuard']);
$routes->get('/admin_user/documents_delete/(:num)', 'DashboardController::document_master_delete/$1',['filter' => 'authGuard']);


$routes->get('/admin_user/document_shows/financial_document', 'DashboardController::document_financial',['filter' => 'authGuard']);
$routes->get('/admin_user/document_shows/common_document', 'DashboardController::document_common',['filter' => 'authGuard']);
$routes->get('/admin_user/document_shows/one_time_document', 'DashboardController::document_one',['filter' => 'authGuard']);

//Document Upload //
$routes->get('/admin_user/document_add','DashboardController::technical_upload',['filter' => 'authGuard']);
$routes->get('/admin_user/document_add','DashboardController::financial_upload',['filter' => 'authGuard']);
$routes->get('/admin_user/document_add','DashboardController::common_upload',['filter' => 'authGuard']);
$routes->get('/admin_user/document_add','DashboardController::one_upload',['filter' => 'authGuard']);


$routes->get('/admin_user/document_edit/(:num)', 'DashboardController::document_edit/$1',['filter' => 'authGuard']);
$routes->get('/admin_user/document_update', 'DashboardController::document_update',['filter' => 'authGuard']);
$routes->get('/admin_user/document_delete/(:num)', 'DashboardController::document_delete/$1',['filter' => 'authGuard']);
$routes->get('/admin_user/document_views/(:num)', 'DashboardController::document_views/$1',['filter' => 'authGuard']);





$routes->get('/admin/price_maker/', 'UserDashboardController::price_maker',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_price', 'UserDashboardController::tender_price',['filter' => 'frontauthGuard']);
$routes->get('/admin/price_id/(:any)', 'UserDashboardController::price_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/price_checker', 'UserDashboardController::price_app_view',['filter' => 'frontauthGuard']);
$routes->get('/admin/tender_price_view/(:any)', 'UserDashboardController::tender_price_show/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/price_delete/(:num)', 'UserDashboardController::price_delete/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/price_views/(:any)', 'UserDashboardController::price_views/$1',['filter' => 'frontauthGuard']);


$routes->get('/admin/division_get/', 'UserDashboardController::division_get',['filter' => 'frontauthGuard']);


$routes->get('/admin/rfp/(:any)', 'UserDashboardController::rfp_extractor/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/add_rfp', 'UserDashboardController::rfp_document_info',['filter' => 'frontauthGuard']);
$routes->get('/admin/rfp_document_edit/(:num)', 'UserDashboardController::rfp_document_edit/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/rfp_document_delete/(:num)', 'UserDashboardController::rfp_document_delete/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/rfp_document_edit_delete/(:num)', 'UserDashboardController::rfp_document_edit_delete/$1',['filter' => 'frontauthGuard']);
$routes->get('/admin/rfp_price_view/(:any)', 'UserDashboardController::rfp_tender_price_show/$1',['filter' => 'frontauthGuard']);

$routes->get('/admin/special_document/', 'UserDashboardController::rfp_special_info',['filter' => 'frontauthGuard']);



$routes->get('/admin/dashboard/change_password', 'UserDashboardController::change_password_view',['filter' => 'frontauthGuard']);
$routes->get('/logout', 'UserDashboardController::logout',['filter' => 'frontauthGuard']);

$routes->get('/testpage', 'Frontend::testpage');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
