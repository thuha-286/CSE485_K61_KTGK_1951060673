<?php 
    include('header.php');
?>

<div class="container-fluid overflow-hidden">
    <div class="col-md-12">
        <div class="row table-main">
            <h5 style = "font-weight: 500"> Các loại thuốc </h5>

            <a href="add_drugs.php"><button type="button" class="btn btn-primary">Thêm thuốc</button></a>
            
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên thuốc</th>
                        <th scope="col">Loại thuốc</th>
                        <th scope="col">Mã vạch</th>
                        <th scope="col">Liều lượng</th>
                        <th scope="col">Mã</th>
                        <th scope="col">Giá nhập</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Trạng thái HSD</th>
                        <th scope="col">Công Ty</th>
                        <th scope="col">Ngày sản xuất</th>
                        <th scope="col">Ngày hết hạn</th>
                        <th scope="col">Nơi sản xuất</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>

                    </tr>
                </thead>

                <tbody>

                <?php
                    // Quy trình 4 bước
                    // Bước 01: 
                    include 'config.php';

                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM drugs";
                            
                    $result = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result

                    // Bước 03: Phân tích và xử lí kết quả (nếu kq trả về 0 --> thất bại; khác 0 -> thành công(trả về 1 object))
                    if(mysqli_num_rows($result)>0) {
                        while($row=mysqli_fetch_assoc($result)) {
                            
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['type'].'</td>';
                            echo '<td>'.$row['barcode'].'</td>';
                            echo '<td>'.$row['dose'].'</td>';
                            echo '<td>'.$row['code'].'</td>';
                            echo '<td>'.$row['cost_price'].'</td>';
                            echo '<td>'.$row['selling_price'].'</td>';
                            echo '<td>'.$row['expiry'].'</td>';
                            echo '<td>'.$row['company_name'].'</td>';
                            echo '<td>'.$row['production_date'].'</td>';
                            echo '<td>'.$row['expiration_date'].'</td>';
                            echo '<td>'.$row['place'].'</td>';
                            echo '<td>'.$row['quantity'].'</td>';
                            
                            $id = $row['id'];
                            echo'<td><a href="edit.php?id='.$row['id'].'"><button type="button"
                                class="btn btn-success">Sửa</button></a></td>';
                            echo'<td><a href="delete.php?id='.$id.'"><button type="button" class="btn btn-danger">Xóa</button></a></td>';
                            echo "</tr>";   
                       }
                    }

            echo "</table>";

    ?>
            <?php
            //Bước 4: Đóng kết nối
             mysqli_close($conn);
             ?>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

    