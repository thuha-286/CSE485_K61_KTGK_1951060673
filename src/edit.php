<?php
include('../config.php');
include('header.php');

$d_id = $_GET['id'];

$sql = "select * from drugs where id=$d_id";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        $d_ID = $row['id'];
        $d_name = $row['name'];
        $d_type = $row['type'];
        $d_barcode = $row['barcode'];
        $d_dose = $row['dose'];
        $d_code = $row['code'];
        $d_cost_price = $row['cost_price'];
        $d_selling_price = $row['selling_price'];
        $d_expiry = $row['expiry'];
        $d_company_name = $row['company_name'];
        $d_production_date = $row['production_date'];
        $d_expiration_date = $row['expiration_date'];
        $d_place = $row['place'];
        $d_quantity = $row['quantity'];
       
        }
}
?>

<main>
    <div class="container">
        <h2>Cập nhật thông tin thuốc</h2>
        <form action="process-add-drugs.php" method="post">
    <div class="mb-3 row">
        <label for="d_ID" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_ID" value = "<?php echo $d_id; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_name" class="col-sm-2 col-form-label">Tên Thuốc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_name" value = "<?php echo $d_name; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_type" class="col-sm-2 col-form-label">Loại thuốc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_type" value = "<?php echo $d_type; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_barcode" class="col-sm-2 col-form-label">Mã vạch</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_barcode" value = "<?php echo $d_barcode; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_dose" class="col-sm-2 col-form-label">Liều lượng</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_dose" value = "<?php echo $d_dose; ?>">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="d_code" class="col-sm-2 col-form-label">Mã</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_code" value = "<?php echo $d_code; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_cost_price" class="col-sm-2 col-form-label">Giá nhập</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_cost_price" value = "<?php echo $d_cost_price; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_selling_price" class="col-sm-2 col-form-label">Giá bán</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_selling_price" value = "<?php echo $d_selling_price; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_expiry" class="col-sm-2 col-form-label">Trạng thái HSD</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_expiry" value = "<?php echo $d_expiry; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_company_name" class="col-sm-2 col-form-label">Công ty</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_company_name" value = "<?php echo $d_company_name; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_production_date" class="col-sm-2 col-form-label">Ngày sản xuất</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_production_date" value = "<?php echo $d_production_date; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_expiration_date" value = "<?php echo $d_expiration_date; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_place" class="col-sm-2 col-form-label">Nơi sản xuất</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_place" value = "<?php echo $d_place; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_quantity" class="col-sm-2 col-form-label">Số lượng</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_quantity" value = "<?php echo $d_quantity; ?>">
        </div>
    </div>

            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>