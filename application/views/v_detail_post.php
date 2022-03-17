<!-- Begin Page Content -->
<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-body">
 <h2><?= $data_detail->Title; ?></h2>
 <h6><?= $data_detail->Category; ?></h6>
 <br>
 <h5><?= $data_detail->Content; ?></h5>
 <br>
 <a href="<?= site_url('c_article/preview_publish/');?>">
 <input type="submit" id="Publish"  name="Publish" value="Back"  class="btn btn-primary"/></a>
  
 </div> </div>
 </div> </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
