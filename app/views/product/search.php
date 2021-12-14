<h2>Kết Quả tìm kiếm</h2>
<a  class="btn btn-success" href="index.php?page=product-list">Xem danh sách mặt hàng</a>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên Hàng</th>
        <th>Loại Hàng</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->id ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->sectors ?></td>
                <td><a class="btn btn-primary" href="index.php?page=product-update&id=<?php echo $product->id ?>">Update</a> |
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa mặt hàng này không?')" href="index.php?page=product-delete&id=<?php echo $product->id ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else:?>
        <tr>
            <td colspan="4">Không có sản phẩm nào ở đây!</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
