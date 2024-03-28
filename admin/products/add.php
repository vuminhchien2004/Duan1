<form class="mt-4 d-flex flex-column gap-2" id="add-product"aciton="index.php?act=add-product" enctype="multipart/form-data" method="POST">
     <br>
     <h2 class="text-center text-primary">Thêm sản phẩm</h2>
     <div class="form-group">
          <label>Nhà sản xuất</label>
          <select name="category" id="">
          <?php
          require_once '../model/category.php';
          $listCat = loadAll();
          foreach($listCat as $cat) {?>

            <option value="<?=$cat['id_dm']?>"><?=$cat['name_dm']?></option>
         
          <?php } ?>
          </select>
     </div> <br>
     <div class="form-group">
       <select name="matsan" id="">
          <option value="1">Cỏ nhân tạo</option>
          <option value="2">Cỏ tự nhiên</option>
          <option value="3">Futsal</option>
       </select>
     </div>
     <div class="form-group">
          <label>Tên sản phẩm</label>
          <input type="text" class="form-control" placeholder="Enter product name" require id="product_name" name="product_name">
     </div>
     <div class="form-group">
          <label>Giá</label>
          <input type="text" class="form-control" placeholder="Enter product price" require id="product_price" name="product_price">
     </div>
     <div class="form-group">
          <label>Mô tả</label>
          <textarea type="text" class="form-control" placeholder="Enter product desc" require id="product_desc" name="product_desc"> </textarea>
     </div>
     <div class="form-group">
          <label>Ảnh </label>
          <input type="file" class="form-control" placeholder="Enter product image" require id="product_avatar" name="product_avatar">
     </div>
     <div class="form-group">
          <label>Số lượng</label>
          <input type="text" class="form-control" placeholder="Enter product quantity" require id="product_quantity" name="product_quantity"> 
     </div>
     

     <div class="d-flex justify-content-between"> 
          <button type="submit" class="btn btn-primary w-25 mt-4" name="submit">Thêm sản phẩm</button>
          <button type="reset" class="btn btn-warning text-white w-25 mt-4">Reset</button>
     </div>
</form>