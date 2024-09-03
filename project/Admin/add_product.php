<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Product
            <small>Add Product</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Product</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                 
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product name</label>
                      <input type="text" class="form-control" id="exampleInputname" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                     <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          paper beg
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Kraft paper
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled/>
                          Checkbox disabled
                        </label>
                      </div>
                    </div>
					
					<!-- textarea -->
                    <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
					
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>