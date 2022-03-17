<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-body">
 <?= form_open_multipart('C_article/fungsi_edit');?>       
 <input type="hidden" class="form-control" value="<?= $data_detail->Id; ?>" name="Id">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" value="<?= $data_detail->Title; ?>" name="Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Category</label>
    <input type="text" class="form-control" value="<?= $data_detail->Category; ?>" name="Category">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" name="Content"><?= $data_detail->Content; ?></textarea>
  </div>
  <div class="form-group">
  <input type="submit" id="Publish"  name="Publish" value="Publish" class="btn btn-success">
  <input type="submit" id="Draft"  name="Draft" value="Draft" class="btn btn-warning" />
  
 </div>
 </div>
 </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
