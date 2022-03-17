

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link<?php if (isset($data_publish)) { echo " active";}else{ echo "";}?>" aria-current="page" href="<?= site_url('c_article');?>">Published (<?=  $count_publish; ?>)</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?php if (isset($data_draft)){ echo " active";}else{ echo "";}?>" href="<?= site_url('c_article/allData_draft/');?>">Draft (<?=  $count_draft; ?>)</a>
  </li>
  <li class="nav-item">
    <a class="nav-link<?php if (isset($data_trash)){ echo " active";}else{ echo "";}?>" href="<?= site_url('c_article/allData_trash/');?>" >Trash (<?=  $count_trash; ?>)</a>
  </li>
  </ul>
  <table class='table table-light table-striped'>
	<thead class='text-primary'>
  <th><b>
                       Title</b>
                      </th>
                      <th><b>
                       Category</b>
                      </th>
                      <th><b>
                       <center>Action</center></b>
                      </th>
                     </thead>
                    <tbody>
    <tr class='info'>
	<?php
    if (isset($data_publish)){
foreach ($data_publish as $dat) {?>
<td><?=  $dat->Title; ?></td>
<td><?=  $dat->Category; ?></td>
	<td><center><a href="<?= site_url('c_article/edit_posts/');?><?= $dat->Id;?>">
    <img src="<?= base_url('assets/img/edit.png');?>" width="40" height="40" ></img></a>
 <a href="<?= site_url('c_article/fungsi_hapus/');?><?= $dat->Id;?>" onclick="return confirm('Apakah yakin dihapus?')" > 
 <img src="<?= base_url('assets/img/trash.png');?>" width="40" height="40" ></img></a>
 </center></td>

    </tr>
<?php
}}else if (isset($data_draft)){
    foreach ($data_draft as $dat) {?>
        <td><?= $dat->Title; ?></td>
        <td><?=  $dat->Category; ?></td>
            <td>
            <center><a href="<?= site_url('c_article/edit_posts/');?><?= $dat->Id;?>">
    <img src="<?= base_url('assets/img/edit.png');?>" width="40" height="40" ></img></a>
 <a href="<?= site_url('c_article/fungsi_hapus/');?><?= $dat->Id;?>" onclick="return confirm('Apakah yakin dihapus?')" > 
 <img src="<?= base_url('assets/img/trash.png');?>" width="40" height="40" ></img></a>
 </center>
            </td>
        
            </tr>
        <?php
        }

}
else if (isset($data_trash)){
    foreach ($data_trash as $dat) {?>
        <td><?= $dat->Title; ?></td>
        <td><?=  $dat->Category; ?></td>
            <td><center><a href="<?= site_url('c_article/edit_posts/');?><?= $dat->Id;?>"><input type="submit" id="Publish"  name="Publish" value="Restore"  class="btn btn-primary"/></a>
    </center> </td>
         </tr>
        <?php
        }

}


?>
	</tbody>
</table>
</div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
