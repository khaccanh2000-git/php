<div class="content-wrapper"> 
	<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Product</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
             <form method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>

                <input type="text" id="inputName" class="form-control" name="tensp" value=" <?php echo $data['product']['tensp']; ?> ">
              </div>
              <div class="form-group">
                <label for="inputName">Img</label>

                <input type="file"  name="anh" value=" <?php echo $data['product']['img']; ?> ">
              </div>
              <div class="form-group">
                <label for="inputName">Giá</label>
                <input type="text" id="inputName" class="form-control" name="gia" value=" <?php echo $data['product']['gia']; ?> ">
              </div>
              <div class="form-group">
                <label for="inputName">Số Lượng</label>
                <input type="text" id="inputName" class="form-control" name="soluong" value=" <?php echo $data['product']['soluong']; ?> ">
              </div>
              <div class="form-group">
                <label for="inputName">Xuất Xứ</label>
                <input type="text" id="inputName" class="form-control" name="xuatxu" value=" <?php echo $data['product']['xuatxu']; ?> ">
              </div>
              <input type="submit" value="Edit Product" class="btn btn-success px-5 py-3
              float-left" name="editProduct">

              </form>
            </div>
            <!-- /.card-body -->
          </div>
</div>