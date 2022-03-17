
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <th width=300px><b>
                       Title</b>
                      </th>
                      <th width=200px><b>
                       Category</b>
                      </th>
                      <th width=1000px><b>
                       Content</b>
                      </th>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
foreach ($data_publish as $dat) {?>
   <tr class='info'>
<td><?=  $dat->Title; ?></td>
<td><?=  $dat->Category; ?></td>
<td><?= $content=substr($dat->Content,0,500);?>... <a href="<?= site_url('c_article/detail_posts/');?><?= $dat->Id;?>">Selengkapnya</a></td>
    </tr>
<?php
} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

