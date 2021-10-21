
<?php
$d_ID = $_POST['d_ID'];
$d_name = $_POST['d_name'];
$d_type = $_POST['d_type'];
$d_barcode = $_POST['d_barcode'];
$d_dose = $_POST['d_dose'];
$d_code = $_POST['d_code'];
$d_cost_price = $_POST['d_cost_price'];
$d_selling_price = $_POST['d_selling_price'];
$d_expiry = $_POST['d_expiry'];
$d_company_name = $_POST['d_company_name'];
$d_production_date = $_POST['d_production_date'];
$d_expiration_date = $_POST['d_expiration_date'];
$d_place = $_POST['d_place'];
$d_quantity = $_POST['d_quantity'];

include('../config.php');

    $sql = "Insert into drugs(id, name, type, barcode, dose, code, cost_price, selling_price, expiry,company_name, production_date,expiration_date,place,quantity) Values
    ('$d_ID', '$d_name', '$d_type', '$d_barcode', '$d_dose', '$d_code', '$d_cost_price', '$d_selling_price', '$d_expiry', '$d_company_name', '$d_production_date', '$d_place', '$d_quantity')";
    
    $result = mysqli_query($conn, $sql);

    if($result>0){
        header("Location:../index.php");
    }
    else
        echo $sql;


?>