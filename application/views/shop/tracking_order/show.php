
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="<?=base_url("assets/moonstore/ms01/image/prlx.jpg");?>" alt="#"></div>
  <h1><?=$pagetitle;?></h1>
  <ul>
    <li><a href="<?=base_url();?>">Home</a></li>
    <li><a href="<?=base_url("tracking");?>">Status Pesanan</a></li>
    <li><?php if($not_found) { ?>Tidak ditemukan<?php } else { ?>#<?=$invoice['no_invoice'];?><?php } ?></li>
  </ul>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7" style="float:none;margin:0 auto">
        <?php
        if($not_found) {
        ?>

            <div class="alert alert-danger">Order tidak ditemukan</div>
        <?php
        } else {
        ?>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Harga Satuan</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Sub-Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num = 0;
                    foreach($detail_invoice as $di) {
                        $num++;
                    ?>

                        <tr>
                            <td class="text-center"><?=$num;?>
                            <td class="text-left">
                                <a href="<?=base_url("product/".$di['id_product']."-".$this->toolset->tourl($di['product_detail']));?>"><?=$di['product_detail'];?></a>
                            </td>
                            <td class="text-right"><?=$this->toolset->rupiah($di['price_detail']);?></td>
                            <td class="text-center"><?=$di['qty_detail'];?></td>
                            <td class="text-right"><?=$this->toolset->rupiah($di['sub_detail']);?></td>
                        </tr>
                    <?php } ?>

                        <tr>
                            <td colspan="4" class="text-right">Total</td>
                            <td class="text-right"><?=$this->toolset->rupiah($invoice['total_invoice']);?></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right">Ongkos Kirim</td>
                            <td class="text-right"><?=$this->toolset->rupiah($invoice['shipping_invoice']);?></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right">Grand Total</td>
                            <td class="text-right"><?=$this->toolset->rupiah($invoice['shipping_invoice'] + $invoice['total_invoice']);?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="payment">
                <div class="payment-cell">
                    Order ID : <br/>
                    <span><?=$invoice['no_invoice'];?></span>
                </div>
                <div class="payment-cell">
                    Status : <br/>
                    <span><?=$invoice['text_status_invoice'];?></span>
                </div>
                <div class="payment-cell">
                    Nama : <br/>
                    <span><?=$invoice['name_invoice'];?></span>
                </div>
                <div class="payment-cell">
                    Nomor HP : <br/>
                    <span><?=$invoice['hp_invoice'];?></span>
                </div>
                <div class="payment-cell">
                    Email : <br/>
                    <span><?=$invoice['email_invoice'];?></span>
                </div>
                <div class="payment-cell">
                    Alamat Pengiriman : <br/>
                    <span><?=$invoice['address_invoice'];?></span>
                </div>
                <div class="payment-cell bg-danger">
                    Catatan Pembeli : <br/>
                    <span><?=$invoice['catatan_invoice'];?></span>
                </div>
                <div class="payment-cell">
                    Jasa Pengiriman : <br/>
                    <span><?=$invoice['courier_invoice'];?></span>
                </div>
                <?php if(!empty($invoice['no_resi'])) { ?>

                <div class="payment-cell">
                    No. Resi : <br/>
                    <span><?=$invoice['no_resi'];?></span>
                </div>
                <?php } ?>

                <div class="payment-cell">
                    Tanggal Pemesanan : <br/>
                    <span><?=$invoice['date_invoice'];?></span>
                </div>
            </div>
            <?php
            if($invoice['status_invoice'] == 1) {
            ?>

            <div class="buttons">
                <div class="pull-right">
                <input type="button" data-loading-text="Loading..." class="btn btn-primary" id="pay-button" value="Lanjutkan Pembayaran">
                </div>
            </div>
            <?php } ?>
            <?php } ?>

        </div>
    </div>
</div>
<?php
if(!$not_found) {
if($invoice['status_invoice'] == 1) {
?>

<script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="<?=$clientkey;?>"></script>
<script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay('<?=$invoice['token_invoice'];?>', {
        })

      });
</script>
<?php } } ?>