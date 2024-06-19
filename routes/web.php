<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboardkaprodi', function () {
    return view('dashboardkaprodi', ['title' => 'Dashboard']);
});

Route::get('/pemilihandosen', function () {
    return view('pemilihandosen', ['title' => 'Pemilihan Dosen']);
});

Route::get('/perhitungan', function () {
    return view('perhitungan', ['title' => 'Pemilihan Dosen']);
});

Route::get('/dosen', function () {
    return view('dosen', ['title' => 'Dosen']);
});

Route::get('/tambahdosen', function () {
    return view('tambahdosen', ['title' => 'Dosen']);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa', ['title' => 'Mahasiswa']);
});

Route::get('/tambahmahasiswa', function () {
    return view('tambahmahasiswa', ['title' => 'Mahasiswa']);
});

Route::get('/aspek', function () {
    return view('aspek', ['title' => 'Aspek']);
});

Route::get('/tambahaspek', function () {
    return view('tambahaspek', ['title' => 'Aspek']);
});

Route::get('/kriteria', function () {
    return view('kriteria', ['title' => 'Kriteria']);
});

Route::get('/tambahkriteria', function () {
    return view('tambahkriteria', ['title' => 'Kriteria']);
});

Route::get('/nilaiprofile', function () {
    return view('nilaiprofile', ['title' => 'Nilai Profile']);
});

Route::get('/tambahcore', function () {
    return view('tambahcore', ['title' => 'Nilai Profile']);
});

Route::get('/nilaiprofilesecond', function () {
    return view('nilaiprofilesecond', ['title' => 'Nilai Profile']);
});

Route::get('/tambahsecond', function () {
    return view('tambahsecond', ['title' => 'Nilai Profile']);
});

Route::get('/dashboarddosen', function () {
    return view('dashboarddosen', ['title' => 'Dashboard']);
});