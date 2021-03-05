<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>
  <body onload="window.print();">
    <?php $this->load->view('kop_lap'); ?>
    <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
    <b><center>
      PANITIA PENERIAMAAN PESERTA DIDIK BARU (PPDB) <br>
      NAMA SEKOLAH <br>
      TAHUN PELAJARAN <?php echo $thn_ppdb; ?> / <?php echo $thn_ppdb+1; ?></center>
    </b>
    <br>

    <table width="100%" border="0">
      <tr>
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
      </tr>
      <tr>
        <td>TANGGAL PENDAFTARAN </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
      </tr>
      <tr>
        <td>TANGGAL CETAK </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
      </tr>
      <tr>
        <td>NIS</td>
        <td>:</td>
        <td><?php echo $user->nis; ?></td>
      </tr>
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td><?php echo $user->nisn; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $user->nik; ?></td>
      </tr>
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td><?php echo $user->jk; ?></td>
      </tr>
      <tr>
        <td>TEMPAT, TANGGAL LAHIR</td>
        <td>:</td>
        <td><?php echo "$user->tempat_lahir, ".$this->Model_data->tgl_id($user->tgl_lahir); ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->status_keluarga; ?></td>
      </tr>
      <tr>
        <td>STATUS KELUARGA</td>
        <td>:</td>
        <td><?php echo $user->alamat_siswa; ?></td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td><?php echo $user->alamat_siswa; ?></td>
      </tr>
      <tr>
        <td>NO HP</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
      
      <tr>
        <td>DATA AYAH</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PENDIDIKAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->pdd_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PEKERJAAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->pekerjaan_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PENGHASILAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->penghasilan_ayah); ?></td>
      </tr>

      <tr>
        <td>DATA IBU</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PENDIDIKAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->pdd_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PEKERJAAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->pekerjaan_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PENGHASILAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->penghasilan_ibu); ?></td>
      </tr>

      <tr>
        <td>DATA WALI</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_wali); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PENDIDIKAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->pdd_wali); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PEKERJAAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->pekerjaan_wali); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">PENGHASILAN</td>
        <td>:</td>
        <td><?php echo ucwords($user->penghasilan_wali); ?></td>
      </tr>
      
      <tr>
        <td>ASAL SEKOLAH</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">NAMA SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_sekolah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">STATUS SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->status_sekolah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">ALAMAT SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->alamat_sekolah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">TAHUN LULUS</td>
        <td>:</td>
        <td><?php echo ucwords($user->thn_lulus); ?></td>
      </tr>
    </table>
    <br>

    <div style="float:right;">
      Banyuwangi, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
			Calon Peserta Didik,  <br>
      <br><br><br><br><br>
      <b><u>____________________</u></b><br>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br>

  </body>
</html>
