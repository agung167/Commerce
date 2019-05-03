<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">

   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/script.js"></script>
   <title>Halaman Admin</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php echo $this->session->userdata("nama"); ?></center></div>
      <div id='cssmenu'>
      <ul>
         <li><a href='<?php echo base_url('A_home') ?>'><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
         <li><a href='<?php echo base_url('A_user') ?>'><i class="fa fa-users fa-fw"></i>&nbsp; Users</a></li>
         <li class="active"><a href='<?php echo base_url('A_produk') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Produk</a>
           <ul>
              <li><a href='#'><span>Data Kategori</span></a></li>
           </ul>
         </li>
         <li><a href='<?php echo base_url('A_order') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Order Details</a></li>
         <li class='last'><a href='<?php echo base_url('login') ?>'><i class="fa fa-sign-out fa-fw"></i>&nbsp; Logout</a></li>
      </ul>
      </div>
   </div>
   <div class="col-md-10" style="padding:0px">
     <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li><a href="<?php echo base_url('A_home') ?>">Home</a></li>
        <li><a href="<?php echo base_url('A_produk') ?>">Data Produk</a></li>
        <li class="active">Data Kategori</li>
     </ol>
  </div>
<div class="col-md-10" style="min-height:600px">
  <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
     <a href="" data-toggle="modal" data-target="#Kategori" class="btn btn-info"><i class="fa fa-plus fa-fw"></i> Tambah Kategori</a>
  </div>
  <br>
           <table class="table table-bordered">
              <tr>
                 <th class="info">ID Kategori</th>
                 <th class="info">Nama Kategori</th>
                 <th class="info" colspan="2">Action</th>
              </tr>
              <?php
              foreach($kategori as $k){
              ?>
              <tr>
                    <td><?php echo $k->id_kategori ?></td>
                    <td><?php echo $k->nama_kategori ?></td>
                    <td>
				                  <?php echo anchor('A_kategori/edit/'.$k->id_kategori,'Edit'); ?>
				                  <?php echo anchor('A_kategori/hapus/'.$k->id_kategori,'Hapus'); ?>
			              </td>
                  </tr>
   <?php } ?>
           </table>
           <div class="col-md-12">
              <nav align="center">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>

           </div>
  </div>
          <div class="col-md-12" style="background:#1682ba;padding:29.5px;color:#fff;"></div>
 </div>

 <div id="Kategori" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Tambah Kategori Baru</h4>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url('A_kategori/tambah_aksi_k') ?>" method="post">
        <div class="form-group">
          <label>ID Kategori</label>
          <input name="id_kategori" type="text" class="form-control" placeholder="ID Kategori">
        </div>
        <div class="form-group">
          <label>Nama Kategori</label>
          <input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
    </form>
  </div>
 </div>
 </div>

</body>
<html>
