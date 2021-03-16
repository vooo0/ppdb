<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> Data Pembayaran</h5>
                <hr style="margin:0px;">
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div><br>
            </div>
            <div class="table-responsive">
                <table class="table datatable-basic table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th width="30px;">No.</th>
                        <th class="text-center" >Nama</th>
                        <th class="text-center" >Telepon</th>
                        <th class="text-center" >NISN</th>
                        <th class="text-center" >No Pendaftaran</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" width="130">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($v_pbyr->result() as $baris) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $baris->nama_lengkap; ?></td>
                            <td>Rp. <?php echo $baris->no_hp_siswa; ?></td>
                            <td><?php echo $baris->nisn; ?></td>
                            <td><?php echo $baris->no_pendaftaran; ?></td>
                            <td align="center">
                            <?php if ($baris->status == '0') {?>
                                <label class="label label-primary">Belum Lunas</label>
                            <?php }elseif ($baris->status == '1'){ ?>
                                <label class="label label-success">Lunas</label>
                            <?php }else{ ?>
                                <label class="label label-warning">Gagal</label>
                            <?php } ?>
                            </td>
                            <td align="center"> 
                                <a href="<?php echo $baris->id; ?>" class="btn btn-default btn-xs" title="Cetak Verifikasi" target="_blank"><i class="icon-printer2"></i></a>
                                <form action="<?php echo site_url()?>transaction/process" class="checkStatus" method="POST">
                                    <input value="<?php echo $baris->id; ?>" type="hidden" name="id"/>
                                    <input value="status" type="hidden" name="action"/>
                                    <button type="submit" class="btn btn-primary btn-xs"><i class="icon-checkmark4"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('.checkStatus').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var method = $(this).attr('method');
        var action = $(this).attr('action');
        $.ajax({
            url : action,
            method : method,
            data : data,
            beforeSend: function(){
                Swal.fire({
                title: 'Masih di check!',
                text: 'Mohon tunnggu yaa',
                icon: 'info',
                });
            },
            success: function(data){
                var json = JSON.parse(data);
                Swal.fire({
                title: 'Pengecekan Berhasil!',
                text: 'Status :'+json.transaction_status,
                icon: 'success',
                }).then(function(){
                    location.reload();
                });
            },
            error: function(data){
                Swal.fire({
                title: 'Pengecekan Gagal!',
                text: 'sistem bermasalah mohon coba lagi nanti',
                icon: 'error',
                });
            }
        });
        return false;
    });
</script>

<script type="text/javascript">
    function thn()
    {
    var thn = $('[name="thn"]').val();
        window.location = "panel_admin/verifikasi/thn/"+thn;
    }

    $('[name="thn"]').select2({
        placeholder: "- Tahun -"
    });
</script>
