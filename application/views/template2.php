<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PT. Nawawi Merdeka</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dist/css/bootstrap.css'?>">
</head>
<body>
  <div class="container"><br/>
    <h2>Nawawi Merdeka Store</h2>
    <hr/>
    <div class="row">
      <div class="col-md-8">
        <h4>Produk</h4>
        <div class="row">
          <?php foreach ($produk as $row) : ?>
            <div class="col-md-4">
              <div class="thumbnail">
                <?php if (!empty($row->gambar)) { ?>
                    <img style="width:200px; height:250px;" src="<?php echo base_url().'assets/img/produk/'.$row->gambar;?>">
                <?php }else {  ?>
                  <img style="width:200px; height:250px;" src="<?php echo base_url().'assets/img/produk/'.$row->gambar;?>">
                <?php } ?>

                <div class="caption">
                  <h4><?php echo $row->nama_produk;?></h4>
                  <div class="row">
                    <div class="col-md-7">
                      <h4><?php echo 'Rp '.number_format($row->harga);?></h4>
                    </div>
                    <div class="col-md-5">
                      <input type="number" name="quantity" id="<?php echo $row->id_produk;?>" value="1" class="quantity form-control">
                    </div>
                  </div>
                  <button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->id_produk;?>" data-produknama="<?php echo $row->nama_produk;?>" data-produkharga="<?php echo $row->harga;?>">Add To Cart</button>
                </div>
              </div>
            </div>
          <?php endforeach;?>

        </div>

      </div>
      <div class="col-md-4">
        <h4>Shopping Cart</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Produk</th>
              <th>Harga</th>
              <th>Qty</th>
              <th>Subtotal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="detail_cart">

          </tbody>

        </table>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/dist/js/bootstrap.js'?>"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.add_cart').click(function(){
      var id_produk    = $(this).data("produkid");
      var nama_produk  = $(this).data("produknama");
      var harga = $(this).data("produkharga");
      var quantity     = $('#' + id_produk).val();
      $.ajax({
        url : "<?php echo base_url();?>home/add_to_cart",
        method : "POST",
        data : {id_produk: id_produk, nama_produk: nama_produk, harga: harga, quantity: quantity},
        success: function(data){
          $('#detail_cart').html(data);
        }
      });
    });

    // Load shopping cart
    $('#detail_cart').load("<?php echo base_url();?>home/load_cart");

    //Hapus Item Cart
    $(document).on('click','.hapus_cart',function(){
      var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
      $.ajax({
        url : "<?php echo base_url();?>home/hapus_cart",
        method : "POST",
        data : {row_id : row_id},
        success :function(data){
          $('#detail_cart').html(data);
        }
      });
    });
  });
  </script>
</body>
</html>
