<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


$errors = array();

include_once('errors.php');
include_once('dbconnect.php');

function validate($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}




// ANASITEYE VERITABANINDAN URUN CEKME KODLARI
$tableNameProject = "project";
$columns = ['project_id ', 'project_name', 'project_short_description', 'project_description', 'project_result_description', 'project_tags', 'project_type', 'project_main_image', 'project_detail_image_1', 'project_detail_image_2', 'project_detail_image_3', 'project_detail_image_4', 'project_detail_image_5', 'project_detail_image_6', 'project_small_image', 'project_display_status', 'project_enable_comment', 'project_date_time', 'project_meta_title', 'project_meta_author', 'project_meta_description', 'project_meta_keywords'];
$editDataProject = edit_data_project($db, $tableNameProject, $columns);

function edit_data_project($db, $tableNameProject, $columns)
{
    if (empty($db)) {
        $msg = "Veritabanı bağlantı hatası";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Sütun adları dizide tanımlanmalıdır";
    } elseif (empty($tableNameProject)) {
        $msg = "Tablo adı boş";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableNameProject";
        $query .= " WHERE project_display_status = 1 ";
        $query .= " ORDER BY project_id ASC";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Aranan Veri Bulunamadı";
            }
        } else {
            $msg = "Sorgu hatası: " . $db->error;
        }
    }

    return $msg;
}


function turkce_karakterleri_temizle($metin)
{
    $turkce_karakterler = array('ç', 'ğ', 'ı', 'i', 'ö', 'ş', 'ü', 'Ç', 'Ğ', 'İ', 'Ö', 'Ş', 'Ü', ' ', "'");
    $ingilizce_karakterler = array('c', 'g', 'i', 'i', 'o', 's', 'u', 'C', 'G', 'I', 'O', 'S', 'U', '-', '');

    $temizlenmis_metin = str_replace($turkce_karakterler, $ingilizce_karakterler, $metin);
    $temizlenmis_metin = preg_replace('/[^A-Za-z0-9\-]/', '', $temizlenmis_metin); // Özel karakterleri kaldır
    $temizlenmis_metin = strtolower($temizlenmis_metin); // Küçük harfe dönüştür

    return $temizlenmis_metin;
}

function kelimeleriAyir($veri)
{
    // Çift tırnak işaretlerini kaldır
    $veri = str_replace('"', '', $veri);

    $kelimeler = explode(' ', $veri);
    $ayrilmisVeri = implode(',', $kelimeler);
    return $ayrilmisVeri;
}






/*
// ANASITEYE VERITABANINDAN KATEGORI BILGILERI KODLARI 

$tableNameProject = "project";

if (isset($_GET['categories'])) {
    $id = validate($_GET['categories']);
    $columns = ['product_id', 'category_id', 'product_name', 'product_short_description', 'product_cargo_text', 'product_return_text', 'product_description	', 'product_additional_text', 'product_material_structure', 'product_measurement_values', 'product_image', 'product_display_status', 'product_stock_status', 'product_stock_code', 'product_tags', 'product_price', 'product_discounted_price', 'product_date_time'];
    $fetchDataProduct = fetch_data_categories_product($db, $tableNameProduct,$columns, $id);
}

function fetch_data_categories_product($db, $tableNameProduct, $columns, $id)
{
    if (empty($db)) {
        $msg = "Veritabanı bağlantı hatası";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Sütun adları dizide tanımlanmalıdır";
    } elseif (empty($tableNameProduct)) {
        $msg = "Tablo adı boş";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableNameProduct";
        $query .= " WHERE category_id = '$id'";
        $query .= " AND product_display_status = 1";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); // İlk ürünü alır
                $msg = $row;
            } else {
                $msg = "Veri bulunamadı";
            }
        } else {
            $msg = "Sorgu hatası: " . $db->error;
        }
    }

    return $msg;
}

*/


// ANASITEYE VERITABANINDAN URUN LISTELEME BILGILERI KODLARI 

$tableNameProject = "project";

if (isset($_SERVER['REQUEST_URI'])) {

    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $project_id = end($url_segments);
    $id = validate($project_id);
    $columns = ['project_id ', 'project_name', 'project_short_description', 'project_description', 'project_result_description', 'project_tags', 'project_type', 'project_main_image', 'project_detail_image_1', 'project_detail_image_2', 'project_detail_image_3', 'project_detail_image_4', 'project_detail_image_5', 'project_detail_image_6', 'project_small_image', 'project_display_status', 'project_enable_comment', 'project_date_time', 'project_meta_title', 'project_meta_author', 'project_meta_description', 'project_meta_keywords'];
    $fetchDataProjectDetails = fetch_data_product($db, $tableNameProject, $columns, $id);

}

function fetch_data_product($db, $tableNameProject, $columns, $id)
{
    if (empty($db)) {
        $msg = "Veritabanı bağlantı hatası";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Sütun adları dizide tanımlanmalıdır";
    } elseif (empty($tableNameProject)) {
        $msg = "Tablo adı boş";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableNameProject";
        $query .= " WHERE project_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); // İlk ürünü alır
                $msg = $row;
            } else {
                $msg = "Veri bulunamadı";
            }
        } else {
            $msg = "Sorgu hatası: " . $db->error;
        }
    }

    return $msg;
}

$tableNameContact = "contact";


//Iletisim Veri Cekme Kodları
$columnsContact = ['username', 'country', 'city', 'address', 'address_iframe', 'email', 'phone', 'profession', 'website_url'];
$editDataContact = edit_data_contact($db, $tableNameContact, $columnsContact);
function edit_data_contact($db, $tableNameContact, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableNameContact)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableNameContact";
        $result = $db->query($query);
        $row = $result->fetch_assoc();
        return $row;
        if ($row == true) {

            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
