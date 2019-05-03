<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/font-awesome.min.css">

   <script src="<?php echo base_url('') ?>assets/js/jquery.min.js"></script>
   <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url('') ?>assets/js/script.js"></script>
   <title>Halaman Admin</title>
   <style type="text/css">
     .form-group,
     .kanan
     {
       width:50%;
       float:right;
     }
     .form-group,
     .kiri
     {
       width:40%;
       float:left;
       margin-right: 10px;
     }

   </style>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="<?php echo base_url('') ?>assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php echo $this->session->userdata("nama"); ?></center></div>
      <div id='cssmenu'>
      <ul>
         <li><a href='<?php echo base_url('A_home') ?>'><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
         <li><a href='<?php echo base_url('A_user') ?>'><i class="fa fa-users fa-fw"></i>&nbsp; Users</a></li>
         <li class="active"><a href='<?php echo base_url('A_produk') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Produk</a>
         </li>
         <li><a href='<?php echo base_url('A_order') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Order Details</a></li>
         <li class='last'><a href='<?php echo base_url('login') ?>'><i class="fa fa-sign-out fa-fw"></i>&nbsp; Logout</a></li>
      </ul>
      </div>
   </div>
   <div class="col-md-10" style="padding:0px">
     <ol class="breadcrumb" style="margin:0;border-radius:0;">
        <li><a href="<?php echo base_url('A_home') ?>">Home</a></li>
        <li class="active">Data Produk</li>
     </ol>
  </div>
<div class="col-md-10" style="min-height:600px">
  <?php foreach($produk as $p){ ?>
  <form action="<?php echo base_url(). 'A_produk/update'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group kiri">
      <input name="id_produk" type="hidden" class="form-control" placeholder="ID Produk" value="<?php echo $p->id_produk ?>">
    </div>
    <div class="form-group kiri">
      <input name="id_kategori" type="hidden" class="form-control" placeholder="ID Kategori" value="<?php echo $p->id_kategori ?>">
    </div>
    <div class="form-group kiri">
      <label>Nama Produk</label>
      <input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk" value="<?php echo $p->nama_produk ?>">
    </div>
    <div class="form-group kiri">
      <label>Nama Kategori</label>
      <input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori" value="<?php echo $p->nama_kategori ?>">
    </div>
    <div class="form-group kiri">
      <label>Deskripsi</label>
      <input name="deskripsi" type="text" class="form-control" placeholder="Deksripsi" value="<?php echo $p->deskripsi ?>">
    </div>
    <div class="form-group kanan">
      <label>Stok</label>
      <input name="qty" type="text" class="form-control" placeholder="Stok" value="<?php echo $p->qty ?>">
    </div>
    <div class="form-group kanan">
      <label>Harga</label>
      <input name="harga" type="text" class="form-control" placeholder="Harga" value="<?php echo $p->harga ?>">
    </div>
    <div class="form-group kanan">
      <label>Warna</label>
      <input name="warna" type="text" class="form-control" placeholder="Warna" value="<?php echo $p->warna ?>">
    </div>
    <div class="form-group kanan">
      <label>Gambar</label>
      <input name="gambar" type="file" class="form-control" placeholder="Gambar" name="berkas" value="<?php echo $p->gambar ?>">
    </br>
      <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

  </div>
</form>
<?php } ?>
  </div>
          <div class="col-md-12" style="background:#1682ba;padding:29.5px;color:#fff;"></div>

</body>
<html>
