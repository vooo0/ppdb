<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <br>
            <fieldset class="content-group">
              <hr style="margin-top:0px;">
              <i class="icon-calendar"></i> <b>Tansaction Date</b> : <?php echo date('d-m-Y H:i:s'); ?>
            </fieldset>
          </form>
          </div>
      </div>

      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Confirmation</legend>
              
              <table>
                  <tr>
                      <td>Status Code</td>
                      <td>: <?php echo $finish->status_code; ?></td>
                  </tr>
                  <tr>
                      <td>Status Message</td>
                      <td>: <?php echo $finish->status_message; ?></td>
                  </tr>
                  <tr>
                      <td>Order Id</td>
                      <td>: <?php echo $finish->order_id; ?></td>
                  </tr>
                  <tr>
                      <td>Transaction Status</td>
                      <td>: <?php echo $finish->transaction_status; ?></td>
                  </tr>
                  <tr>
                      <td>Biller Key</td>
                      <td>: 
                        <?php 
                            if(isset($finish->bill_key)){
                                echo $finish->bill_key;
                            } else {
                                echo '-';
                            }
                        ?>
                      </td>
                  </tr>
                  <tr>
                      <td>Biller Code</td>
                      <td>: 
                        <?php 
                            if(isset($finish->bill_code)){
                                echo $finish->bill_code;
                            } else {
                                echo '-';
                            }
                        ?>
                      </td>
                  </tr>
                  <tr>
                      <td>Bank</td>
                      <td>: 
                        <?php 
                            if(isset($finish->va_numbers[0]->bank)){
                                echo $finish->va_numbers[0]->bank;
                            } else {
                                echo '-';
                            }
                        ?>
                      </td>
                  </tr>
                  <tr>
                      <td>VA Number</td>
                      <td>: 
                        <?php 
                            if(isset($finish->va_numbers[0]->va_number)){
                                echo $finish->va_numbers[0]->va_number;
                            } else {
                                echo '-';
                            }
                        ?>
                      </td>
                  </tr>
                  <tr>
                      <td>VA Permata</td>
                      <td>: 
                        <?php 
                            if(isset($finish->permata_va_number)){
                                echo $finish->permata_va_number;
                            } else {
                                echo '-';
                            }
                        ?>
                      </td>
                  </tr>
                  <tr>
                      <td>Payment Guide</td>
                      <td>: <a href=<?php echo $finish->transaction_status; ?>> Download </a></td>
                  </tr>
                  </table>
              
            </fieldset>
            
          </form>
          </div>
      </div>
      </div>


    </div>
    <!-- /dashboard content -->
