<div class="panel panel-primary">
  <div class="panel-heading">
    <h2>Kententuan PPDB <strong class="text-success" style="color:#eee;">NAMA SEKOLAH</strong></h2>
    <span style="font-size:18px;">Unit <b>NAMA SEKOLAH</b> Tahun Ajaran <b><?php echo date('Y'); ?>-<?php echo date('Y')+1; ?></b></span>
    <!-- <hr> -->
  </div>
  <div class="panel-body">

    <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
    
    <button id="pay-button">Bayar!</button>

  </div>
</div>
