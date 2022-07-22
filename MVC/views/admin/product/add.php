<div class="content-wrapper"> 
	<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Product</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            	<form method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>
                <input type="text" id="inputName" class="form-control" name="tensp">
              </div>
              <div class="form-group">
                <label for="inputName">Img</label>
                <input type="file"  name="anh">
              </div>
              <div class="form-group">
                <label for="inputName">Giá</label>
                <input type="text" id="inputName" class="form-control" name="gia">
              </div>
              <div class="form-group">
                <label for="inputName">Số Lượng</label>
                <input type="text" id="inputName" class="form-control" name="soluong">
              </div>
              <div class="form-group">
                <label for="inputName">Xuất Xứ</label>
                <input type="text" id="inputName" class="form-control" name="xuatxu">
              </div>
              <input type="submit" value="Add Product" class="btn btn-success px-5 py-3
              float-left" name="addProduct">

              </form>
            </div>
            <!-- /.card-body -->
          </div>
</div>