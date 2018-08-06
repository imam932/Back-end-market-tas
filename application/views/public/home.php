<section  class="homepage-slider" id="home-slider">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="#" alt="" />
      </li>
      <li>
        <img src="#" alt="" />
        <div class="intro">
          <h1>Mid season sale</h1>
          <p><span>Up to 50% Off</span></p>
          <p><span>On selected items online and in stores</span></p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="main-content">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line"><strong>Products</strong></span></span></span>
            <span class="pull-right">
              <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
            </span>
          </h4>

          <div class="col-lg-9">
            <div id="myCarousel" class="myCarousel carousel slide">
              <div class="carousel-inner">
                <div class="active item">
                  <div class="thumbnails">
                    <?php foreach ($produk as $key => $val) { ?>
                      <div class="col-lg-4">
                        <div class="product-box">
                          <span class="sale_tag"></span>
                          <p><img src="<?= base_url() ?>assets/img/produk/f.jpg" alt="" class="img_produk"/></p>
                          <h2><?= $val->nama_produk ?></h2>
                          <p><?= $val->warna ?></p>
                          <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo 'Rp '.number_format($val->harga);?></h4>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="qty" id="<?= $val->id_produk;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <button class="add_cart btn btn-success btn-block" data-produkid="<?= $val->id_produk;?>" data-produknama="<?= $val->nama_produk;?>" data-produkharga="<?= $val->harga;?>">Add To Cart</button>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
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
      <br/>

    </div>
  </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var produk_id    = $(this).data("produkid");
            var produk_nama  = $(this).data("produknama");
            var produk_harga = $(this).data("produkharga");
            var quantity     = $('#' + produk_id).val();
            console.log(produk_id);
            $.ajax({
                url : "<?php echo base_url();?>cart/add_to_cart",
                method : "POST",
                data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>cart/load_cart");

        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>cart/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>
