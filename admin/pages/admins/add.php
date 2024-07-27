<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Новый администратор</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=9"  method="post" enctype='multipart/form-data'>
                <div class="card-body">

                  <div class="form-group">
                    <label>Имя</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter name">
                  </div>

                  <div class="form-group">
                    <label>Логин</label>
                    <input type="text" name="login" class="form-control" placeholder="Enter name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
 
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
</div>