<h2>Chỉnh sửa mặt Hàng</h2>
<form action="" method="post">
    <table  class="table table-striped">
        <tr>
            <td>Tên:  <input  class="form-control" type="text" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo $product->name ?>"></td>
        </tr>
        <tr>
            <td>Loại Hàng: <select class="custom-select" name="sectors"  >
                    <option  <?php echo $product->sectors == "Điện Thoại" ? "selected" : "" ?> value="Điện Thoại">Điện Thoại</option>
                    <option  <?php echo $product->sectors == "Tủ Lạnh" ? "selected" : "" ?> value="Tủ Lạnh">Tủ Lạnh</option>
                    <option  <?php echo $product->sectors == "Điều hòa" ? "selected" : "" ?> value="Điều hòa">Điều hòa</option>
                    <option  <?php echo $product->sectors == "Máy Giặt" ? "selected" : "" ?> value="Máy Giặt">Máy Giặt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá:<input  class="form-control" type="text" name="price" placeholder="Nhập tên sản phẩm" value="<?php echo $product->price ?>"></td>
        </tr>
        <tr>
            <td>Số lượng: <input  class="form-control" type="text" name="quantily" placeholder="Nhập tên sản phẩm" value="<?php echo $product->quantily ?>"></td>
        </tr>
        <tr>
            <td>Mô tả:<textarea  class="form-control" name="description"><?php echo $product->description ?>"</textarea></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">UpDate</button>
                <a class="btn btn-info" href="index.php?page=product-list">Quay Lại</a>
            </td>
        </tr>
    </table>

</form>
