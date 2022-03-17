                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-body">
                <?= form_open_multipart('C_article/add_publish_draft');?>       
 <h2>Add New Post</h2>&nbsp;
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Category</label>
    <input type="text" class="form-control" name="Category">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" name="Content"></textarea>
  </div>
  <div class="form-group">
  <input type="submit" id="Publish"  name="Publish" value="Publish" class="btn btn-success">
  <input type="submit" id="Draft"  name="Draft" value="Draft" class="btn btn-warning" />
  
 </div></div></div>


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
