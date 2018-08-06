<section  class="homepage-slider" id="home-slider">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="themes/images/carousel/banner-1.jpg" alt="" />
      </li>
      <li>
        <img src="themes/images/carousel/banner-2.jpg" alt="" />
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
    <div class="span12">
      <div class="row">
        <div class="span12">
          <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line"><strong>Products</strong></span></span></span>
            <span class="pull-right">
              <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
            </span>
          </h4>
          <div id="myCarousel" class="myCarousel carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <ul class="thumbnails">
                  <?php foreach ($produk as $key => $val) { ?>
                    <li class="span3">
                      <div class="product-box">
                        <span class="sale_tag"></span>
                        <p><a href="product_detail.html"><img src="<?= base_url() ?>assets/img/produk/f.jpg" alt="" class="img_produk"/></a></p>
                        <a href="product_detail.html" class="title"><?= $val->nama_produk ?></a><br/>
                        <a href="products.html" class="category"><?= $val->warna ?></a>
                        <p class="price">$17.25</p>
                      </div>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/>

    </div>
  </div>
</section>
