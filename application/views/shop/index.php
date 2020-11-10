<div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">

        <?php
        foreach ($sliders as $slider) {
            $slider->img_slider = base_url("slider/1903x800/$slider->img_slider");
            ?>

            <div><a href="<?= $slider->link_slider; ?>"><img style="width:1903px" src="<?= $slider->img_slider; ?>"
                                                             alt="<?= $slider->title_slider; ?>"
                                                             class="img-responsive"/></a></div>

            <?php
        }
        ?>

    </div>
</div>
<div id="center" style="padding: 20px 0 120px !important;
        position: relative;
        background: url(<?= base_url("assets/moonstore/ms01/image/kebun-kopi.JPG"); ?>) bottom center repeat #000;
        background-size: contain;">
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title text-white" style="margin-bottom: 25px">Newest Product</h3>
                    <span class="viewall"><a href="<?= base_url('catalog/?sort=id_product-DESC'); ?>"
                                             class="text-white">View All <i
                                    class="fa fa-angle-double-right"></i></a></span>
                </div>
                <!-- tab-furniture-->
                <div id="tab-furnitur" class="tab-content">
                    <div class="row">

                        <?php
                        foreach ($productlist as $product) {
                            $tourl = $this->toolset->tourl($product->name_product);
                            if (empty($product->url_photo)) {
                                $url_photo = base_url("assets/moonstore/ms01") . "/image/product/product8-8.jpg";
                            } else {
                                $url_photo = base_url("img/622x800/$product->url_photo");
                            }
                            //condition for 'Campo Roasting Machine to hide in product list because need to a
                            if ($product->id_product != 180) {
                                ?>

                                <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="item"style="background-color: #e6d0a1;">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"><a
                                                    href="<?= base_url("product/$product->id_product-$tourl"); ?>"> <img
                                                        style="width:622;height:800" src="<?= $url_photo; ?>"
                                                        alt="<?= $product->name_product; ?>"
                                                        title="<?= $product->name_product; ?>" class="img-responsive"/>
                                                    <img src="<?= $url_photo; ?>" alt="<?= $product->name_product; ?>"
                                                         title="<?= $product->name_product; ?>" class="img-responsive"/>
                                                </a>
                                            </div>
                                            <div class="caption product-detail">
                                                <div class="rating">
                                                    <?= $this->toolset->rating($product->total_rating); ?>
                                                </div>
                                                <h3 class="product-name"><a
                                                        href="<?= base_url("product/$product->id_product-$tourl"); ?>"
                                                        title="<?= $product->name_product; ?>"><?= $product->name_product; ?></a>
                                                </h3>
                                                <p class="price product-price"><?= $this->toolset->rupiah($product->price_product); ?></p>
                                            </div>
                                            <ul class="button-group" style="display: block">
                                                <li>
                                                    <button type="button" data-id="<?= $product->id_product; ?>"
                                                            class="addtocart-btn addtocart csrf"
                                                            title="Tambah ke Keranjang"
                                                            data-csrf="<?= $this->security->get_csrf_hash(); ?>"> Tambah ke Keranjang
                                                    </button>
                                                </li>
                                            </ul>
                                            <ul class="my-4"><span class="text-muted"><a
                                                        href="<?= base_url("product/$product->id_product-$tourl"); ?>">View Product</a></span>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="center" style="background: url(<?= base_url("assets/moonstore/ms01/image/kopi_bg.jpg"); ?>) center left no-repeat #f5f5f5;background-size: contain;">
    <div class="container">
        <div class="row">
            <?php
            foreach ($productlist as $machine) {
                $tourl = $this->toolset->tourl($machine->name_product);
                if (empty($machine->url_photo)) {
                    $url_photo = base_url("assets/moonstore/ms01") . "/image/product/product8-8.jpg";
                } else {
                    $url_photo = base_url("img/622x800/$machine->url_photo");
                }
                //condition for 'Campo Roasting Machine to hide in product list because need to a
                if ($machine->id_product != 180) {

            }else{ ?>
                        <div class="customtab">
                            <h3 class="productblock-title" style="margin-bottom: 25px">Roasting Machine</h3>
                        </div>
                        <!-- tab-furniture-->
                        <div id="tab-furnitur" class="tab-content">
                            <div class="row mb-5 rounded" style="background: white;">
                                        <div class="col-md-4">
                                            <img alt="<?= $machine->name_product; ?>" src="<?= $url_photo; ?>" onclick="location.href='<?= base_url("product/$machine->id_product-$tourl"); ?>'" class="pointer">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-text">
                                                <h1><?= $machine->name_product; ?></h1>
                                                <p>
                                                    - Mesin Berkualitas dengan Harga EKONOMIS<br>
                                                    - Hasil sangrai kopi matang merata<br>
                                                    - Daya listrik rendah, Sehingga cocok juga untuk industri rumah tangga dan Usaha Cafe<br>
                                                    - Kapasitas maksimal 2.5kg biji kopi per proses<br>
                                                    - Perawatan mesin dan cara penggunaan cukup mudah<br>
                                                    - Mesin juga mudah di bersihkan<br>
                                                    - Spare part kami sediakan lengkap (jika servis)<br>
                                                    -Ada stick checker untuk melihat tingkat kematangan<br>
                                                    -Tabung Roasting terbuat dari bahan Stainless Steel<br>
                                                    - Garansi service 1 tahun</p>
                                            </div>
                                            <div class="product-price-btn">
                                                <span><?= $this->toolset->rupiah($machine->price_product); ?></span>
                                                <button onclick="location.href='<?= base_url("product/$machine->id_product-$tourl"); ?>'">details</button>
                                            </div>
                                        </div>
                            </div>
                        </div>

                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="breadcrumb parallax-container" style="background: #0000007a;">
    <div class="parallax"><img src="<?= base_url("assets/moonstore/ms01/image/home-parallax.webp"); ?>" alt="#" style="display: block; transform: translate3d(-50%, 147px, 0px);"></div>
    <div class="container">
        <div class="col-md-12 my-5 py-5 parallax-resp">
            <h1 class="category-title my-4 text-shadow-shadenco">Our Story</h1>
            <ul style="color: #fff;font-family: Montserrat;font-size: 15px;font-weight: 400;letter-spacing: 0.5px;">
                Campo Kopi is a premier and authentic Coffee Shop that has been proudly serving the Bekasi area and
                beyond since 2020. Since then, our mission has been to provide high-quality Coffee for all those that
                wish to combine fun and enjoyable ambiance with skillful Coffee Development into one extraordinary
                experience.
            </ul>
            <button class="btn my-4" style="color: white;border-color: white;" onclick="window.location.href='https://www.instagram.com/campo_kopi/product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12'">Learn More
            </button>
        </div>
    </div>
</div>

<style>
    .footer-bottom {
        margin-top: 0;
    }

    footer {
        margin-top: 0;
    }

    .breadcrumb {
        padding: 70px 0 !important;
        margin: 0 0 0 !important;
        text-align: center;
    }


        /*  Roasting Machine  */
    .product-img {
        float: left;
        height: 420px;
        width: 327px;
    }

    .product-img img {
        border-radius: 7px 0 0 7px;
    }

    .product-info {
        float: left;
        /*height: 420px;*/
        width: 827px;
        border-radius: 0 7px 10px 7px;
        background-color: #ffffff;
    }

    .product-text {
        /*height: 300px;*/
        width: auto;
    }

    .product-text h1 {
        margin: 0 0 10px 38px;
        padding-top: 52px;
        font-size: 34px;
        color: #474747;
    }


    .product-text h2 {
        margin: 0 0 47px 38px;
        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
        letter-spacing: 0.2em;
    }

    .product-text p {
        height: auto;
        margin: 0 0 0 38px;
        color: #8d8d8d;
        line-height: 1.7em;
        font-size: 15px;
        font-weight: lighter;
        overflow: hidden;
    }

    .product-price-btn {
        /*height: 103px;*/
        /*width: 327px;*/
        margin-top: 17px;
        margin-bottom: 17px;
        position: relative;
    }

    .product-price-btn span {
        /* display: inline-block; */
        /* position: absolute; */
        /* top: -13px; */
        /* height: 50px; */
        /* font-family: 'Trocchi', serif; */
        margin: 0 0 0 38px;
        font-family: 'Raleway', sans-serif;
        font-size: 24px;
        font-weight: 600;
        color: #474747;
    }

    .product-price-btn button {
        display: inline-block;
        height: 50px;
        width: 176px;
        margin: 0 40px 0 16px;
        box-sizing: border-box;
        border: transparent;
        border-radius: 60px;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #ffffff;
        background-color: #38220f;
        cursor: pointer;
        outline: none;
    }

    .product-price-btn button:hover {
        background-color: black;
    }

    @media (max-width: 767px) {
        .breadcrumb {
            padding: 0 0 !important;
            margin: 0 0 0 !important;
            text-align: center;
        }
    }

</style>