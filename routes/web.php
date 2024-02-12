<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Data Event Terdekat
    $eventList = [
        [
            "title" => "Technoclub",
            "available" => true,
            "checklist" => [
                [true, "Lorem lorem lorem"],
                [true, "Lorem lorem lorem"],
                [true, "Lorem lorem lorem"],
                [false, "Lorem lorem lorem"],
                [false, "Lorem lorem lorem"],
            ],
            "url" => ""
        ],
        [
            "title" => "Badminton",
            "available" => false,
            "checklist" => [
                [true, "Lorem lorem lorem"],
                [true, "Lorem lorem lorem"],
                [true, "Lorem lorem lorem"],
                [false, "Lorem lorem lorem"],
                [false, "Lorem lorem lorem"],
            ],
            "url" => ""
        ],
        [
            "title" => "Tidak Tahu",
            "available" => false,
            "checklist" => [
                [true, "Lorem lorem lorem"],
                [true, "Lorem lorem lorem"],
                [true, "Lorem lorem lorem"],
                [false, "Lorem lorem lorem"],
                [false, "Lorem lorem lorem"],
            ],
            "url" => ""
        ]
    ];

    return view('home/home', [
        "rootdir" => ".",
        "eventList" => $eventList
    ]);
});

Route::get('/miba', function () {
    // Data Depatermen
    $depatermen = [
        "name" => "Miba",
        "fullname" => "Minat Dan Bakat",
        "description" => "mantra yang menggema di ruang-ruang kuliah, laboratorium, dan komunitas-komunitas pengembang di seluruh penjuru. Itu lebih dari sekadar kata-kata; itu adalah simbol dari semangat kolaboratif, eksplorasi tak terbatas, dan dedikasi terhadap kemajuan teknologi"
    ];

    // Data Proker
    $prokerList = [];

    // Data Event Miba
    $eventList = [];

    return view('home/depatermen', [
        "rootdir" => ".",
        "eventList" => $eventList,
        "depatermen" => $depatermen
    ]);
});

Route::get('/sosial', function () {
    // Data Depatermen
    $depatermen = [
        "name" => "Sosial",
        "fullname" => "Sosial Dan Budaya",
        "description" => "mantra yang menggema di ruang-ruang kuliah, laboratorium, dan komunitas-komunitas pengembang di seluruh penjuru. Itu lebih dari sekadar kata-kata; itu adalah simbol dari semangat kolaboratif, eksplorasi tak terbatas, dan dedikasi terhadap kemajuan teknologi"
    ];

    // Data Proker
    $prokerList = [];

    // Data Event Miba
    $eventList = [];

    // Member List
    $memberList = [];

    // Data Documentation Foto
    $documentationList = [];

    return view('home/depatermen', [
        "rootdir" => ".",
        "depatermen" => $depatermen,
        "eventList" => $eventList,
    ]);
});
