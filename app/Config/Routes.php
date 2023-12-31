<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/register', 'Login::register');
$routes->get('/login/register', 'Login::prosesRegister');
$routes->get('/login/proseslogin', 'Login::prosesLogin');
$routes->get('/Login/logout', 'Login::prosesLogout');
$routes->get('/home', 'Home::index');
// Admin
$routes->get('/admin', 'Admin::dashboard');
$routes->get('/admin/users', 'Admin::users');
$routes->get('/admin/input', 'Admin::input');
$routes->get('/admin/proses-input', 'Admin::InputData');
$routes->get('/cariUsers', 'Admin::cariUsers');
$routes->get('/cariAppointment', 'Admin::cariAppointment');
$routes->get('/cariMonitoring', 'Admin::cariMonitoring');
$routes->get('/admin/appointment', 'Admin::appointment');
$routes->get('/admin/appointmentbaru', 'Admin::appointmentBaru');
$routes->get('/admin/proses-appointment', 'Admin::prosesAppointment');
// check
$routes->get('/admin/upload', 'Admin::upload');
$routes->get('/admin/setting', 'Admin::setting');
$routes->get('/admin/profile', 'Admin::profile');
$routes->get('/pesanan/baru', 'Pesanan::pesananBaru');
$routes->get('/admin/monitoring', 'Admin::monitoring');
$routes->get('/admin/monitoring/update', 'Admin::monitoringUpdate');
// Pesan Cus
$routes->get('/pesanan/prosesDataPesananBaru', 'Pesanan::prosesDataPesananBaru');
$routes->get('/pesanan/pilihPaket', 'Pesanan::pilihPaket');
$routes->get('/pesanan/cekPesananBaru', 'Pesanan::cekPesananBaru');
$routes->get('/pesanan/kontrak', 'Pesanan::kontrak');
$routes->get('/pesanan/down-payment', 'Pesanan::downPayment');
$routes->get('/pesanan/full-payment', 'Pesanan::fullPayment');
$routes->get('/profile', 'Customer::index');
$routes->get('/profile/setting', 'Customer::setting');
$routes->get('/profile/file', 'Customer::unduh');
$routes->get('/admin/dashboard', 'Admin::dashboard');
// 
$routes->get('/pesanan/survei', 'Pesanan::survei');
$routes->get('/Cetak/laporan', 'CetakPDF::generatePdf');

