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
   <style type="text/css">
     .center
     {
       position: absolute;
       top: 50%;
       left: 50%;
       transform: perspective(1000px)translate(-50%, -50%) skewY(15deg);
       transition: 0.5s;
     }
     .center:hover
     {
       transform: perspective(1000px)translate(-50%, -51%) skewY(0deg);
     }
     .center h1 span
     {
       position: absolute;
       top: 0;
       left: 0;
       transform: translate(-50%, -51%);
       margin: 0;
       padding: 0;
       text-transform: uppercase;
       font-size: 6em;
       transform-style: preserve-3d;
       transition: 1s;
     }
     .center h1 span:nth-child(1)
     {
       color: red;
       -webkit-clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
       clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
     }
     .center h1 span:nth-child(2)
     {
       color: green;
       transform: translate(-50%, -51%) skewX(-60deg);
       left: -21px;
       -webkit-clip-path: polygon(0 45%, 100% 45%, 100% 55%, 0 55%);
       clip-path: polygon(0 45%, 100% 45%, 100% 55%, 0 55%);
     }
     .center h1 span:nth-child(3)
     {
       color: yellow;
       transform: translate(-50%, -51%) skewX(0deg);
       left: -40px;
       -webkit-clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
       clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
     }
     .center:hover h1 span:nth-child(1),
     .center:hover h1 span:nth-child(2),
     .center:hover h1 span:nth-child(3)
     {
       transform: translate(-50%, -51%) skewX(0deg);
       left: 0;
       color: #000;
     }
   </style>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php echo $this->session->userdata("nama"); ?></center></div>
      <div id='cssmenu'>
      <ul>
         <li class="active"><a href='<?php echo base_url('A_home') ?>'><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
         <li><a href='<?php echo base_url('A_user') ?>'><i class="fa fa-users fa-fw"></i>&nbsp; Users</a></li>
         <li><a href='<?php echo base_url('A_produk') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Produk</a></li>
         <li><a href='<?php echo base_url('A_order') ?>'><i class="fa fa-briefcase fa-fw"></i>&nbsp; Order Details</a></li>
         <li class='last'><a href='<?php echo base_url('login') ?>'><i class="fa fa-sign-out fa-fw"></i>&nbsp; Logout</a></li>
      </ul>
      </div>
   </div>
   <div class="col-md-10" style="padding:0px">
     <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li class="active">Home</li>
     </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
     <div class="center">
       <h1>
          <span>Admin</span>
          <span>Admin</span>
          <span>Admin</span>
       </h1>
     </div>
   </div>
   <div class="col-md-12" style="background:#1682ba;padding:29.5px;color:#fff;width:100%;"></div>
</body>
<html>
