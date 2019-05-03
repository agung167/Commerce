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
         <li><a href='<?php echo base_url('A_produk') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Produk</a></li>
         <li class="active"><a href='<?php echo base_url('A_order') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Order Details</a></li>
         <li class='last'><a href='<?php echo base_url('login') ?>'><i class="fa fa-sign-out fa-fw"></i>&nbsp; Logout</a></li>
      </ul>
      </div>
   </div>
   <div class="col-md-10" style="padding:0px">
     <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="<?php echo base_url('A_home') ?>">Home</a></li>
         <li class="active">Data Order Details</li>
     </ol>
   </div>
 </br>
 </br>
 </br>
   <div class="col-md-10" style="min-height:600px">

       <a href="<?php echo base_url('laporan') ?>" class="btn btn-success">Export</a>
     </br>
     </br>
              <table class="table table-bordered">
                 <tr>
                    <th class="info">No</th>
                    <th class="info">ID</th>
                    <th class="info">Tanggal</th>
                    <th class="info">Nama Depan</th>
                    <th class="info">Nama Belakang</th>
                    <th class="info">Email</th>
                    <th class="info">Alamat</th>
                    <th class="info">Kota</th>
                    <th class="info">Kode Pos</th>
                    <th class="info">Telepon</th>
                    <th class="info">Komentar</th>
                    <th class="info">Total</th>
                 </tr>
                 <?php
                 $no = 1;
                 foreach($order as $u){
                   ?>
                 <tr>
                       <td><?php echo $no++ ?></td>
                       <td><?php echo $u->id_order ?></td>
                       <td><?php echo $u->tanggal ?></td>
                       <td><?php echo $u->nama_depan ?></td>
                       <td><?php echo $u->nama_belakang ?></td>
                       <td><?php echo $u->email ?></td>
                       <td><?php echo $u->alamat ?></td>
                       <td><?php echo $u->kota ?></td>
                       <td><?php echo $u->kode_pos ?></td>
                       <td><?php echo $u->telepon ?></td>
                       <td><?php echo $u->comment ?></td>
                       <td><?php echo 'Rp. '.$u->total ?></td>

                </tr>
              <?php } ?>
               </table>
             </div>
   <div class="col-md-12" style="background:#1682ba;padding:29.5px;color:#fff;"></div>
</body>
<html>
