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

$tableNameContact = "contact";



// VERITABANINA URUN EKLEME KODLARI
if (isset($_POST['create-post'])) {
    $project_name = mysqli_real_escape_string($db, $_POST['project_name']);
    $project_short_description = mysqli_real_escape_string($db, $_POST['project_short_description']);
    $project_description = mysqli_real_escape_string($db, $_POST['project_description']);
    $project_result_description = mysqli_real_escape_string($db, $_POST['project_result_description']);
    $project_tags = mysqli_real_escape_string($db, $_POST['project_tags']);
    $project_type = mysqli_real_escape_string($db, $_POST['project_type']);
    $project_meta_title = mysqli_real_escape_string($db, $_POST['project_meta_title']);
    $project_meta_author = mysqli_real_escape_string($db, $_POST['project_meta_author']);
    $project_meta_description = mysqli_real_escape_string($db, $_POST['project_meta_description']);
    $project_meta_keywords = mysqli_real_escape_string($db, $_POST['project_meta_keywords']);
    $project_display_status = isset($_POST['project_display_status']) ? 1 : 0;
    $project_enable_comment = isset($_POST['project_enable_comment']) ? 1 : 0;

    $project_main_image = $_FILES['project_main_image']['name'];
    $project_detail_image_1 = $_FILES['project_detail_image_1']['name'];
    $project_detail_image_2 = $_FILES['project_detail_image_2']['name'];
    $project_detail_image_3 = $_FILES['project_detail_image_3']['name'];
    $project_detail_image_4 = $_FILES['project_detail_image_4']['name'];
    $project_detail_image_5 = $_FILES['project_detail_image_5']['name'];
    $project_detail_image_6 = $_FILES['project_detail_image_6']['name'];
    $project_small_image = $_FILES['project_small_image']['name'];

    $targetDirectory = "project_photos/";

    $project_main_image_arc = $targetDirectory . basename($_FILES['project_main_image']['name']);
    $project_detail_image_1_arc = $targetDirectory . basename($_FILES['project_detail_image_1']['name']);
    $project_detail_image_2_arc = $targetDirectory . basename($_FILES['project_detail_image_2']['name']);
    $project_detail_image_3_arc = $targetDirectory . basename($_FILES['project_detail_image_3']['name']);
    $project_detail_image_4_arc = $targetDirectory . basename($_FILES['project_detail_image_4']['name']);
    $project_detail_image_5_arc = $targetDirectory . basename($_FILES['project_detail_image_5']['name']);
    $project_detail_image_6_arc = $targetDirectory . basename($_FILES['project_detail_image_6']['name']);
    $project_small_image_arc = $targetDirectory . basename($_FILES['project_small_image']['name']);


    $project_main_image_arc_img = $project_main_image_arc;
    $project_detail_image_1_arc_img = $project_detail_image_1_arc;
    $project_detail_image_2_arc_img = $project_detail_image_2_arc;
    $project_detail_image_3_arc_img = $project_detail_image_3_arc;
    $project_detail_image_4_arc_img = $project_detail_image_4_arc;
    $project_detail_image_5_arc_img = $project_detail_image_5_arc;
    $project_detail_image_6_arc_img = $project_detail_image_6_arc;
    $project_small_image_arc_img = $project_small_image_arc;


    date_default_timezone_set('Europe/Amsterdam');
    setlocale(LC_TIME, 'nl_NL.utf8');

    $gunler = array(
            'Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'
        );
    $aylar = array(
            'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'
        );
    $gun = $gunler[date('w')];
    $ay = $aylar[date('n') - 1];
    $gunAyYil = date('d') . ' ' . $ay . ' ' . date('Y');
    $saatDakika = date('H:i');
    $project_date_time = $gunAyYil . ' ' . $saatDakika;


    if (empty($project_name) && empty($project_type)) {
        array_push($errors, "Enter the work name and type!");
    }

    $project_name_query = "SELECT * FROM project WHERE `project_name`='$project_name'";
    $resultProjectNameQuery = mysqli_query($db, $project_name_query);
    $workAlreadyControl = mysqli_fetch_assoc($resultProjectNameQuery);

    if ($workAlreadyControl) {
        if ($workAlreadyControl['project_name'] === $project_name) {
            array_push($errors, "This project is already available in the system!");
        }
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO project (project_name,project_short_description,project_description,project_result_description,project_tags, project_type, project_main_image, project_detail_image_1,project_detail_image_2, project_detail_image_3,project_detail_image_4,project_detail_image_5,  project_detail_image_6, project_small_image, project_display_status, project_enable_comment, project_date_time,project_meta_title, project_meta_author,project_meta_description,project_meta_keywords) 
        VALUES ('$project_name','$project_short_description','$project_description', '$project_result_description', '$project_tags', '$project_type', '$project_main_image_arc_img', '$project_detail_image_1_arc_img', '$project_detail_image_2_arc_img', '$project_detail_image_3_arc_img','$project_detail_image_4_arc_img','$project_detail_image_5_arc_img', '$project_detail_image_6_arc_img', '$project_small_image_arc_img', '$project_display_status', '$project_enable_comment', '$project_date_time','$project_meta_title', '$project_meta_author','$project_meta_description','$project_meta_keywords')";
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header('location: app-works-list.php');
        } else {
            $errors[] = "Work could not be loaded: " . mysqli_error($db);
        }
    }
}


// VERITABANINDA URUN GUNCELLEME KODLARI
if (isset($_POST['update-post'])) {
    $project_id = mysqli_real_escape_string($db, $_POST['project_id']);
    $project_name = mysqli_real_escape_string($db, $_POST['project_name']);
    $project_short_description = mysqli_real_escape_string($db, $_POST['project_short_description']);
    $project_description = mysqli_real_escape_string($db, $_POST['project_description']);
    $project_result_description = mysqli_real_escape_string($db, $_POST['project_result_description']);
    $project_tags = mysqli_real_escape_string($db, $_POST['project_tags']);
    $project_type = mysqli_real_escape_string($db, $_POST['project_type']);
    $project_meta_title = mysqli_real_escape_string($db, $_POST['project_meta_title']);
    $project_meta_author = mysqli_real_escape_string($db, $_POST['project_meta_author']);
    $project_meta_description = mysqli_real_escape_string($db, $_POST['project_meta_description']);
    $project_meta_keywords = mysqli_real_escape_string($db, $_POST['project_meta_keywords']);
    $project_display_status = isset($_POST['project_display_status']) ? 1 : 0;
    $project_enable_comment = isset($_POST['project_enable_comment']) ? 1 : 0;

    $select_query = "SELECT * FROM project WHERE project_id = '$project_id'";
    $result = mysqli_query($db, $select_query);
    $row = mysqli_fetch_assoc($result);

    $project_main_image_arc_img = $row['project_main_image'];
    $project_detail_image_1_arc_img = $row['project_detail_image_1'];
    $project_detail_image_2_arc_img = $row['project_detail_image_2'];
    $project_detail_image_3_arc_img = $row['project_detail_image_3'];
    $project_detail_image_4_arc_img = $row['project_detail_image_4'];
    $project_detail_image_5_arc_img = $row['project_detail_image_5'];
    $project_detail_image_6_arc_img = $row['project_detail_image_6'];
    $project_small_image_arc_img = $row['project_small_image'];


    $targetDirectory = "project_photos/";

    // Yeni görsel dosyalarını al
    if (!empty($_FILES['project_main_image']['name'])) {
        $project_main_image = $_FILES['project_main_image']['name'];
        $project_main_image_arc_img = $targetDirectory . basename($project_main_image);
    } else {
        $project_main_image_arc_img = $row['project_main_image']; // Eski dosya adını kullan
    }

    if (!empty($_FILES['project_detail_image_1']['name'])) {
        $project_detail_image_1 = $_FILES['project_detail_image_1']['name'];
        $project_detail_image_1_arc_img = $targetDirectory . basename($project_detail_image_1);
    } else {
        $project_detail_image_1_arc_img = $row['project_detail_image_1'];
    }

    if (!empty($_FILES['project_detail_image_2']['name'])) {
        $project_detail_image_2 = $_FILES['project_detail_image_2']['name'];
        $project_detail_image_2_arc_img = $targetDirectory . basename($project_detail_image_2);
    } else {
        $project_detail_image_2_arc_img = $row['project_detail_image_2'];
    }

    if (!empty($_FILES['project_detail_image_3']['name'])) {
        $project_detail_image_3 = $_FILES['project_detail_image_3']['name'];
        $project_detail_image_3_arc_img = $targetDirectory . basename($project_detail_image_3);
    } else {
        $project_detail_image_3_arc_img = $row['project_detail_image_3'];
    }

    if (!empty($_FILES['project_detail_image_4']['name'])) {
        $project_detail_image_4 = $_FILES['project_detail_image_4']['name'];
        $project_detail_image_4_arc_img = $targetDirectory . basename($project_detail_image_4);
    } else {
        $project_detail_image_4_arc_img = $row['project_detail_image_4'];
    }

    if (!empty($_FILES['project_detail_image_5']['name'])) {
        $project_detail_image_5 = $_FILES['project_detail_image_5']['name'];
        $project_detail_image_5_arc_img = $targetDirectory . basename($project_detail_image_5);
    } else {
        $project_detail_image_5_arc_img = $row['project_detail_image_5'];
    }

    if (!empty($_FILES['project_detail_image_6']['name'])) {
        $project_detail_image_6 = $_FILES['project_detail_image_6']['name'];
        $project_detail_image_6_arc_img = $targetDirectory . basename($project_detail_image_6);
    } else {
        $project_detail_image_6_arc_img = $row['project_detail_image_6'];
    }

    if (!empty($_FILES['project_small_image']['name'])) {
        $project_small_image = $_FILES['project_small_image']['name'];
        $project_small_image_arc_img = $targetDirectory . basename($project_small_image);
    } else {
        $project_small_image_arc_img = $row['project_small_image'];
    }

    date_default_timezone_set('Europe/Amsterdam');
    setlocale(LC_TIME, 'nl_NL.utf8');
    $gunler = array(
        'Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag'
    );
    $aylar = array(
        'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'
    );
    $gun = $gunler[date('w')];
    $ay = $aylar[date('n') - 1];
    $gunAyYil = date('d') . ' ' . $ay . ' ' . date('Y');
    $saatDakika = date('H:i');
    $project_date_time = $gunAyYil . ' ' . $saatDakika;

    $update_query = "UPDATE project SET 
        project_name = '$project_name',
        project_short_description = '$project_short_description',
        project_description = '$project_description',
        project_result_description = '$project_result_description',
        project_tags = '$project_tags',
        project_type = '$project_type',
        project_main_image = '$project_main_image_arc_img',
        project_detail_image_1 = '$project_detail_image_1_arc_img',
        project_detail_image_2 = '$project_detail_image_2_arc_img',
        project_detail_image_3 = '$project_detail_image_3_arc_img',
        project_detail_image_4 = '$project_detail_image_4_arc_img',
        project_detail_image_5 = '$project_detail_image_5_arc_img',
        project_detail_image_6 = '$project_detail_image_6_arc_img',
        project_small_image = '$project_small_image_arc_img',
        project_display_status = '$project_display_status',
        project_enable_comment = '$project_enable_comment',
        project_date_time = '$project_date_time',
        project_meta_title = '$project_meta_title',
        project_meta_author = '$project_meta_author',
        project_meta_description = '$project_meta_description',
        project_meta_keywords = '$project_meta_keywords'
        WHERE project_id = '$project_id'";

    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
        header('location: app-works-list.php');
    } else {
        $errors[] = "Work could not be updated: " . mysqli_error($db);
    }
}

// VERITABANINDAN URUN LISTELEME KODLARI
$tableNameProject = "project";
$columns = ['project_id ', 'project_name', 'project_short_description', 'project_description', 'project_result_description', 'project_tags', 'project_type', 'project_main_image', 'project_detail_image_1', 'project_detail_image_2', 'project_detail_image_3', 'project_detail_image_4', 'project_detail_image_5', 'project_detail_image_6', 'project_small_image', 'project_display_status', 'project_enable_comment', 'project_date_time', 'project_meta_title', 'project_meta_author', 'project_meta_description', 'project_meta_keywords'];
$fetchDataProject = fetch_data_project($db, $tableNameProject, $columns);

function fetch_data_project($db, $tableNameProject, $columns)
{
    if (empty($db)) {
        $msg = "Veritabanı bağlantı hatası";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Sütun adları dizide tanımlanmalıdır";
    } elseif (empty($tableNameProject)) {
        $msg = "Tablo adı boş";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableNameProject" . " ORDER BY project_id ASC";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
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






// VERITABANINDAN URUN DUZENLEME SAYFASINA VERI CEKME KODLARI
if (isset($_GET['projectEditing'])) {
    $id = validate($_GET['projectEditing']);
    $condition = ['project_id' => $id];
    $columns = ['project_id ', 'project_name', 'project_short_description', 'project_description', 'project_result_description', 'project_tags', 'project_type', 'project_main_image', 'project_detail_image_1', 'project_detail_image_2', 'project_detail_image_3', 'project_detail_image_4', 'project_detail_image_5', 'project_detail_image_6', 'project_small_image', 'project_display_status', 'project_enable_comment', 'project_date_time', 'project_meta_title', 'project_meta_author', 'project_meta_description', 'project_meta_keywords'];
    $dataEditingProject = data_works($db, $tableNameProject, $columns, $condition);
}
function data_works($db, $tableName, $columns, $condition)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (!is_array($condition)) {
        $msg = "Condition data must be an associative array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $conditionData = '';
        $i = 0;
        foreach ($condition as $index => $data) {
            $and = ($i > 0) ? ' AND ' : '';
            $conditionData .= $and . $index . " = " . "'" . $data . "'";
            $i++;
        }
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE " . $conditionData;
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



// VERITABANINDAN URUN SILME KODLARI

if (isset($_GET['deleteProject'])) {
    $id = validate($_GET['deleteProject']);
    $condition = ['project_id' => $id];
    $deleteMsg = delete_data_project($db, $tableNameProject, $condition);
    header("location:app-works-list.php");
}
function delete_data_project($db, $tableNameProject, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableNameProject . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}




// VERITABANINDAN URUN DUZENLEME SAYFASINA VERI CEKME KODLARI
if (isset($_GET['projectDetails'])) {
    $id = validate($_GET['projectDetails']);
    $condition = ['project_id' => $id];
    $columns = ['project_id ', 'project_name', 'project_short_description', 'project_description', 'project_result_description', 'project_tags', 'project_type', 'project_main_image', 'project_detail_image_1', 'project_detail_image_2', 'project_detail_image_3', 'project_detail_image_4', 'project_detail_image_5', 'project_detail_image_6', 'project_small_image', 'project_display_status', 'project_enable_comment', 'project_date_time', 'project_meta_title', 'project_meta_author', 'project_meta_description', 'project_meta_keywords'];
    $editDataProject = edit_data_project($db, $tableNameProject, $columns, $condition);
}
function edit_data_project($db, $tableNameProject, $columns, $condition)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (!is_array($condition)) {
        $msg = "Condition data must be an associative array";
    } elseif (empty($tableNameProject)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $conditionData = '';
        $i = 0;
        foreach ($condition as $index => $data) {
            $and = ($i > 0) ? ' AND ' : '';
            $conditionData .= $and . $index . " = " . "'" . $data . "'";
            $i++;
        }
        $query = "SELECT " . $columnName . " FROM $tableNameProject";
        $query .= " WHERE " . $conditionData;
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


//Kullanıcı Bilgilerini Güncelleme Kodları
extract($_POST);
if (isset($_POST['contact-update'])) {
    $inputData = [];
    $inputData['username'] = $_POST['username'];
    $inputData['profession'] = $_POST['profession'];
    $inputData['country'] = $_POST['country'];
    $inputData['city'] = $_POST['city'];
    $inputData['address'] = $_POST['address'];
    $inputData['address_iframe'] = $_POST['address_iframe'];
    $inputData['phone'] = $_POST['phone'];
    $inputData['email'] = $_POST['email'];
    $inputData['website_url'] = $_POST['website_url'];

    $result = update_data_users($db, $tableNameContact, $inputData);
    header("location:user-account-settings.php");
}
function update_data_users($db, $tableNameContact, $inputData)
{
    $data = implode(" ", $inputData);
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($tableNameContact)) {
        $msg = "Table Name is empty";
    } elseif (trim($data) == "") {
        $msg = "Empty Data not allowed to update";
    } elseif (!is_array($inputData)) {
        $msg = "Input data & condition must be in array";
    } else {
        // dynamic column & input value
        $cv = 0;
        $columnsAndValue = '';
        foreach ($inputData as $index => $data) {
            $comma = ($cv > 0) ? ', ' : '';
            $columnsAndValue .= $comma . $index . " = " . "'" . $data . "'";
            $cv++;
        }

        // dynamic condition       
        // update query        
        $query   =  "UPDATE " . $tableNameContact;
        $query  .= " SET " . $columnsAndValue;
        $execute = $db->query($query);

        if ($execute === true) {
            $msg = "Data was updated successfully";
        } else {
            $msg = $query;
        }
    }
    return $msg;
}

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




?>




