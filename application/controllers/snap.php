<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-QlQqdgAKxb41FKAnFJkZVhCb', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('checkout_snap');
    }

    public function token()
    {
		$nama_lengkap 		= $this->input->post('nama_lengkap');
		$no_hp_siswa 	= $this->input->post('no_hp_siswa');
		$jurusan 	= $this->input->post('jurusan');
		$nisn	 	= $this->input->post('nisn');
		
		// Required
		$transaction_details = array(
		  'order_id' 	 => rand(),
		  'gross_amount' => 150000, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id'		 => 'a1',
		  'price' 	 => 150000,
		  'quantity' => 1,
		  'name' 	 => "Pendaftaran jurusan ".$jurusan
		);

		// Optional
		$item_details = array ($item1_details);

		// // Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// // Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
		  'first_name'    		=> $nama_lengkap,
		  'phone'         		=> "0".$no_hp_siswa
		//   'billing_address'  	=> $billing_address,
		//   'shipping_address' 	=> $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' 		 => 'day', 
            'duration'   => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
		$nama_lengkap 	= $this->input->post('nama_lengkap');
		$no_hp_siswa 	= $this->input->post('no_hp_siswa');
		$jurusan 		= $this->input->post('jurusan');
		$nisn 			= $this->input->post('nisn');
		$tgl_siswa = $this->Model_data->date('waktu_default');
		

		$this->db->order_by('id_siswa', 'DESC');
		$sql 		= $this->db->get('tbl_siswa');
		if ($sql->num_rows() == 0) {
			if($sql->row()->jurusan == 'TKRO' ){
				$no_pendaftaran   = 'TKRO'.date('Y').date('m').'001';
			} else if($sql->row()->jurusan == 'TBSM' ){
				$no_pendaftaran   = 'TBSM'.date('Y').date('m').'001';
			} else{
				$no_pendaftaran   = 'TEI'.date('Y').date('m').'001';
			}
		}else{
			$noUrut 	 	= substr($sql->row()->no_pendaftaran, 8, 3);
			$noUrut++;
			if($sql->row()->jurusan == 'TKRO' ){
				$no_pendaftaran   = 'TKRO'.date('Y').date('m').sprintf('%03s', $noUrut);
			} else if($sql->row()->jurusan == 'TBSM' ){
				$no_pendaftaran   = 'TBSM'.date('Y').date('m').sprintf('%03s', $noUrut);
			} else{
				$no_pendaftaran   = 'TEI'.date('Y').date('m').sprintf('%03s', $noUrut);
			}
		}

		$result = json_decode($this->input->post('result_data'));
		if($result != null){

			
			if (isset($result->va_numbers[0]->bank)) {
				$bank = $result->va_numbers[0]->bank;
			}else {
				$bank = '-';
			}
			
			if (isset($result->va_numbers[0]->va_number)) {
				$va_number = $result->va_numbers[0]->va_number;
			}else {
				$va_number = '-';
			}
			
			if (isset($result->bca_va_number)) {
				$bca_va_number = $result->bca_va_number;
			}else {
				$bca_va_number = '-';
			}
			
			if (isset($result->bill_key)) {
				$bill_key = $result->bill_key;
			}else {
				$bill_key = '-';
			}
			
			if (isset($result->biller_code)) {
				$biller_code = $result->biller_code;
			}else {
				$biller_code = '-';
			}
			
			if (isset($result->permata_va_number)) {
				$permata_va_number = $result->permata_va_number;
			}else {
				$permata_va_number = '-';
			}
			
			$dataTrans = [
				'status_code' 			=> $result->status_code,
				'status_message' 		=> $result->status_message,
				'transaction_id' 		=> $result->transaction_id,
				'order_id' 				=> $result->order_id,
				'nama_lengkap' 			=> $nama_lengkap,
				'jurusan' 				=> $jurusan,
				'no_hp_siswa' 			=> $no_hp_siswa,
				'nisn' 					=> $nisn,
				'no_pendaftaran' 		=> $no_pendaftaran,
				'gross_amount' 			=> $result->gross_amount,
				'payment_type' 			=> $result->payment_type,
				'transaction_time' 		=> $result->transaction_time,
				'transaction_status' 	=> $result->transaction_status,
				'fraud_status' 			=> $result->fraud_status,
				'pdf_url' 				=> $result->pdf_url,
				'finish_redirect_url' 	=> $result->finish_redirect_url,
				'permata_va_number' 	=> $permata_va_number,
				'bank' 					=> $bank,
				'va_number' 			=> $va_number,
				'bill_key' 				=> $bill_key,
				'biller_code' 			=> $biller_code,
				'bca_va_number' 		=> $bca_va_number,
			];
			
			$dataSiswa = [
				'nama_lengkap' 			=> $nama_lengkap,
				'jurusan' 				=> $jurusan,
				'no_hp_siswa' 			=> $no_hp_siswa,
				'nisn' 					=> $nisn,
				'no_pendaftaran' 		=> $no_pendaftaran,
				'password' 				=> $nisn,
				'tgl_siswa'				=> $tgl_siswa,
			];
			
			$this->db->insert('tbl_siswa',$dataSiswa);
			$this->Snapmodel->insertData($dataTrans);
			// if($return){
			// 	echo "Request Pembayaran Berhasil Dilakukan, Segera Lakukan Pembayaran Sebelum 2 Hari Berlalu";
			// 	// var_dump($dataTrans);
			// }else{
			// 	echo "Request Pembayaran Gagal Dilakukan, Silahkan Mencoba lagi Beberapa Menit Kedepan";
			// 	// var_dump($dataTrans);
			// }
			$this->data['finish'] = json_decode($this->input->post('result_data'));
			$this->load->view('finish_snap', $this->data);
		}else{
			$dataSiswa = [
				'nama_lengkap' 			=> $nama_lengkap,
				'jurusan' 				=> $jurusan,
				'no_hp_siswa' 			=> $no_hp_siswa,
				'nisn' 					=> $nisn,
				'no_pendaftaran' 		=> $no_pendaftaran,
				'password' 				=> $nisn,
				'tgl_siswa'				=> $tgl_siswa,
			];
			$dataTranOffline = [
				'nama_lengkap' 			=> $nama_lengkap,
				'jurusan' 				=> $jurusan,
				'no_hp_siswa' 			=> $no_hp_siswa,
				'nisn' 					=> $nisn,
				'no_pendaftaran' 		=> $no_pendaftaran,
				'status' 				=> '0',
			];
			for ($i=1; $i <=5 ; $i++) {
				if ($i == 1) {
					$mapel = 'Ilmu Pengetahuan Alam (IPA)';
					$smstr = 'ipa';
				}elseif ($i == 2) {
					$mapel = 'Ilmu Pengetahuan Sosial (IPS)';
					$smstr = 'ips';
				}elseif ($i == 3) {
					$mapel = 'Matematika';
					$smstr = 'mtk';
				}elseif ($i == 4) {
					$mapel = 'Bahasa Indonesia';
					$smstr = 'ind';
				}elseif ($i == 5) {
					$mapel = 'Bahasa Inggris';
					$smstr = 'ing';
				}
				$data2 = array(
					'mapel'				=> $mapel,
					'semester1'		 	=> $this->input->post($smstr."1"),
					'semester2'			=> $this->input->post($smstr."2"),
					'semester3'			=> $this->input->post($smstr."3"),
					'semester4'			=> $this->input->post($smstr."4"),
					'semester5'			=> $this->input->post($smstr."5"),
					'rata_rata_nilai'	=> $this->input->post("nilai_".$smstr),
					'no_pendaftaran'	=> $no_pendaftaran
				);
				$this->db->insert('tbl_rapor',$data2);
			}
			for ($i=1; $i <=7 ; $i++) {
				if ($i == 1) {
					$mapel = 'Pendidikan Agama';
					$nilai = 'agama';
				}elseif ($i == 2) {
					$mapel = 'PKN';
					$nilai = 'pkn';
				}elseif ($i == 3) {
					$mapel = 'Bahasa Indonesia';
					$nilai = 'ind';
				}elseif ($i == 4) {
					$mapel = 'Bahasa Inggris';
					$nilai = 'ing';
				}elseif ($i == 5) {
					$mapel = 'Matematika';
					$nilai = 'mtk';
				}elseif ($i == 6) {
					$mapel = 'Ilmu Pengetahuan Alam (IPA)';
					$nilai = 'ipa';
				}elseif ($i == 7) {
					$mapel = 'Ilmu Pengetahuan Sosial (IPS)';
					$nilai = 'ipa';
				}
				$data3 = array(
					'mapel_usbn'		=> $mapel,
					'nilai_usbn'		=> $this->input->post("usbn_".$nilai),
					'no_pendaftaran'	=> $no_pendaftaran
				);
				$this->db->insert('tbl_nilai_usbn',$data3);
			}
			for ($i=1; $i <=4 ; $i++) {
				if ($i == 1) {
					$mapel = 'Ilmu Pengetahuan Alam (IPA)';
					$nilai = 'ipa';
				}elseif ($i == 2) {
					$mapel = 'Matematika';
					$nilai = 'mtk';
				}elseif ($i == 3) {
					$mapel = 'Bahasa Indonesia';
					$nilai = 'ind';
				}elseif ($i == 4) {
					$mapel = 'Bahasa Inggris';
					$nilai = 'ing';
				}
				$data4 = array(
					'mapel_unbk'		=> $mapel,
					'nilai_unbk'		=> $this->input->post("unbk_".$nilai),
					'no_pendaftaran'	=> $no_pendaftaran
				);
				$this->db->insert('tbl_nilai_unbk',$data4);
			}
			

			$this->db->insert('tbl_siswa',$dataSiswa);
			$this->db->insert('tbl_requesttransaksi_offline',$dataTranOffline);
			$this->data['finish'] = json_decode($this->input->post('result_data'));
			$this->load->view('/finish_snap_offline', $this->data);
		}
			
			
			// echo 'RESULT <br><pre>';
			// var_dump($result);
			// echo '</pre>' ;
			
	}
}
