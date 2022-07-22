<div class="content-wrapper"> 
	<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add User</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <form method="POST">
			              <div class="form-group">
			                <label for="inputName">User Name</label>
			                <input type="text" id="inputName" class="form-control" name="username"  >
			              </div>
			              <div class="form-group">
			                <label for="inputName">Pass Word</label>
			                <input type="password" id="inputName" class="form-control" name="password" > 
			              </div>
			              <div class="form-group">
			                <label for="inputName">Level</label>
			                <input type="text" id="inputName" class="form-control" name="level" >
			              </div>

				              <input type="submit" value="Add User" class="btn btn-success px-5 py-3
				              float-left" name="addUser">

            
            </form>
            
            <!-- /.card-body -->
          </div>
      </div>
</div>