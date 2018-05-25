<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Web</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.css" ?>">
    
    <style type="text/css">
    .bg-border {
        border: 1px solid #ddd;
        border-radius: 4px 4px;
        padding: 15px 15px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">
        <img alt="Brand" src="<?php echo base_url('assets/logo-big-shopping.png') ?>" width=25 height=25>
      </a>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Happy Shoping <span class="sr-only">(current)</span></a></li>
    </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">

                    
        <?php 
        $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
        echo form_open("pagination/search", $attr);?>
            <div class="form-group">
                <div class="col-md-2">
                    <a href="<?php echo base_url("index.php/pagination/insert") ?>" class="btn btn-primary">Add</a>
                </div>
                <div class="col-md-5">
                    <input class="form-control" id="book_name" name="book_name" placeholder="Search..." type="text" value="<?php echo set_value('book_name'); ?>" />
                </div>
                <div class="col-md-5">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-info" value="Search" />
                    <a href="<?php echo base_url(). "index.php/pagination/index"; ?>" class="btn btn-default">Show All</a>
                </div>
            </div>
        <?php echo form_close(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nama Barang</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($booklist); ++$i) { ?>
                <tr>
                    <td><?php echo ($page+$i+1); ?></td>
                    <td><?php echo $booklist[$i]->nama; ?></td>
                    <td><?php echo $booklist[$i]->alamat; ?></td>
                    <td><?php echo $booklist[$i]->nama_barang; ?></td>
                    <td>
                        <div class="btn-group">
                        <a href="<?php echo base_url('index.php/pagination/update/'.$booklist[$i]->id) ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url('index.php/pagination/delete/'.$booklist[$i]->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menghapus?')">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</body>
</html>