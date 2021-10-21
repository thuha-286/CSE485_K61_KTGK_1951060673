<?php
    include '../header.php';
?>

<main class="container">
    <h2>Thêm thuốc</h2>
    <form action="process-add-drugs.php" method="post">
    <div class="mb-3 row">
        <label for="d_ID" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_ID">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_name" class="col-sm-2 col-form-label">Tên Thuốc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_type" class="col-sm-2 col-form-label">Loại thuốc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_type">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_barcode" class="col-sm-2 col-form-label">Mã vạch</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_barcode">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_dose" class="col-sm-2 col-form-label">Liều lượng</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="d_dose">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="d_code" class="col-sm-2 col-form-label">Mã</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_code">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_cost_price" class="col-sm-2 col-form-label">Giá nhập</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_cost_price">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_selling_price" class="col-sm-2 col-form-label">Giá bán</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_selling_price">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_expiry" class="col-sm-2 col-form-label">Trạng thái HSD</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_expiry">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_company_name" class="col-sm-2 col-form-label">Công ty</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_company_name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_production_date" class="col-sm-2 col-form-label">Ngày sản xuất</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_production_date">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_expiration_date">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_place" class="col-sm-2 col-form-label">Nơi sản xuất</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_place">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="d_quantity" class="col-sm-2 col-form-label">Số lượng</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="d_quantity">
        </div>
    </div>
    
    </div>
    <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </div>
    </form>
    
</main>


<?php include('footer.php') ?>



