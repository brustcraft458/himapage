<?php
$rootdir = ".";
if (isset($_GET['form'])) {
    $target = $_GET['form'];

    if ($target == "event") {
        // Event Terdekat Tanggalnya
        $depatermen = "penristek";
        $idsection = "event";
    } elseif ($target == "panitia") {
        // Oprec Panitia Terdekat Tanggalnya
        $depatermen = "penristek";
        $idsection = "panitia";
    } elseif ($target == "store") {
        // Store
        $depatermen = "kwu";
        $idsection = "event";
    } else {
        header("Location: $rootdir");
        exit;
    }

    header("Location: $rootdir/depatermen/$depatermen#$idsection");
}
?>