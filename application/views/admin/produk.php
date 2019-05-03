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
         <li class="active has-sub"><a href='<?php echo base_url('A_produk') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Produk</a>
           <ul>
              <li><a href='<?php echo base_url('A_kategori') ?>'><span>Data Kategori</span></a></li>
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
        <li class="active">Data Produk</li>
     </ol>
  </div>
<div class="col-md-10" style="min-height:600px">
  <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
     <a href="" data-toggle="modal" data-target="#Produk" class="btn btn-success"><i class="fa fa-plus fa-fw"></i> Tambah Produk</a>
  </div>
  <br>
           <table class="table table-bordered">
              <tr>
                 <th class="info">No</th>
                 <th class="info">ID Produk</th>
                 <th class="info">ID Kategori</th>
                 <th class="info">Nama Produk</th>
                 <th class="info">Nama Kategori</th>
                 <th class="info">Deskripsi</th>
                 <th class="info">Stok</th>
                 <th class="info">Harga</th>
                 <th class="info">Warna</th>
                 <th class="info">Gambar</th>
                 <th class="info" colspan="2">Action</th>
              </tr>
              <?php
              $no = 1;
              foreach($produk as $data){
              ?>
              <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data->id_produk ?></td>
                    <td><?php echo $data->id_kategori ?></td>
                    <td><?php echo $data->nama_produk ?></td>
                    <td><?php echo $data->nama_kategori ?></td>
                    <td><?php echo $data->deskripsi ?></td>
                    <td><?php echo $data->qty ?></td>
                    <td><?php echo $data->harga ?></td>
                    <td><?php echo $data->warna ?></td>
                    <td>
                        <img src="<?php echo base_url(); ?>/upload/<?php echo $data->gambar; ?>" style="width: 50px; height: auto;" alt="foto">
                    </td>
                    <td>
				                  <?php echo anchor('A_produk/edit/'.$data->id_produk,'<div class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i> Edit</div>'); ?>
				                  <?php echo anchor('A_produk/hapus/'.$data->id_produk,'<div class="btn btn-danger"><i class="fa fa-trash fa-fw"></i> Hapus</div>'); ?>
			              </td>
             </tr>
           <?php }?>
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
   <div id="Produk" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('A_produk/tambah_aksi_p') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>ID Produk</label>
						<input name="id_produk" type="text" class="form-control" placeholder="ID Produk">
					</div>
					<div class="form-group">
						<label>ID Kategori</label>
						<input name="id_kategori" type="text" class="form-control" placeholder="ID Kategori">
					</div>
					<div class="form-group">
						<label>Nama Produk</label>
						<input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk">
					</div>
					<div class="form-group">
						<label>Nama Kategori</label>
						<input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input name="deskripsi" type="text" class="form-control" placeholder="Deksripsi">
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input name="qty" type="text" class="form-control" placeholder="Stok">
					</div>
          <div class="form-group">
						<label>Harga</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga">
					</div>
          <div class="form-group">
						<label>Warna</label>
						<input name="warna" type="text" class="form-control" placeholder="Warna">
					</div>
          <div class="form-group">
						<label>Gambar</label>
						<input name="gambar" type="file" class="form-control" placeholder="Gambar">
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
     </div>
   </form>
 </div>


 <div id="Edit" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Edit Barang</h4>
    </div>
    <div class="modal-body">
      <form action="<?php echo site_url('') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>ID Produk</label>
          <input name="id_produk" type="text" class="form-control" placeholder="ID Produk">
        </div>
        <div class="form-group">
          <label>ID Kategori</label>
          <input name="id_kategori" type="text" class="form-control" placeholder="ID Kategori">
        </div>
        <div class="form-group">
          <label>Nama Produk</label>
          <input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk">
        </div>
        <div class="form-group">
          <label>Nama Kategori</label>
          <input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <input name="deskripsi" type="text" class="form-control" placeholder="Deksripsi">
        </div>
        <div class="form-group">
          <label>Stok</label>
          <input name="qty" type="text" class="form-control" placeholder="Stok">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input name="harga" type="text" class="form-control" placeholder="Harga">
        </div>
        <div class="form-group">
          <label>Warna</label>
          <input name="warna" type="text" class="form-control" placeholder="Warna">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input name="gambar" type="file" class="form-control" placeholder="Gambar" name="berkas">
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
   </div>
 </form>
</div>
<script type="text/javascript">
  function edit_produk($idproduk)
  {
    $.ajax({
      url : "<?php echo site_url('A_produk/produk_get')?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function($data)
      {
        $('[name="id"]').val(data.id);
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        alert('Error get data from ajax');
      }
    });
  }
</script>
</body>
<html>
