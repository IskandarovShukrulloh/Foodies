<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Сотрудники</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=2"  method="post" enctype='multipart/form-data'>
                <div class="card-body">

                  <div class="form-group">
                    <label>Имя</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                  </div>

                  <div class="form-group">
                    <label >Фамилия</label>
                    <input type="text" name="surname" class="form-control"  placeholder="Enter surname">
                  </div>

                  <div class="form-group">
                    <label >День рождения</label>
                    <input type="date" name="birthday" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Пол</label>
                    <select name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label >Должность</label>
                    <input type="text" name="position" class="form-control" placeholder="Your post">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label">Дoбавить файл</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file">
                        <!-- <input type="file" name="file" class="custom-file-input" placeholder="Filename">
                        <label class="custom-file-label"></label> -->
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Add</button>
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