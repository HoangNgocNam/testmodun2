<h2>Thêm mặt hàng</h2>
<form action="" method="post">
    <table class="table table-striped">
        <tr>
            <td>Tên Hàng: <input class="form-control" type="text" name="name" placeholder="Nhập tên sản phẩm"></td>
        </tr>
        <tr>
            <td>Loại Hàng:
                <select class="custom-select" name="sectors"  >
                    <option value="Điện Thoại">Điện Thoại</option>
                    <option value="Tủ Lạnh">Tủ Lạnh</option>
                    <option value="Điều hòa">Điều hòa</option>
                    <option value="Máy Giặt">Máy Giặt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá: <input class="form-control" type="text" name="price" placeholder="Nhập tên sản phẩm"></td>
        </tr>
        <tr>
            <td>Số Lượng: <input class="form-control" type="text" name="quantily" placeholder="Nhập tên sản phẩm"></td>
        </tr>
        <tr>
            <td>Mô tả:<textarea class="form-control" name="description"></textarea></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Add New</button>
                <a class="btn btn-info" href="index.php?page=product-list">Quay Lại</a>
            </td>
        </tr>
    </table>
</form>
