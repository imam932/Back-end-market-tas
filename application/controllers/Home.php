<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('/');
		}
		$this->load->model(array('Model_produk'));
	}

	public function index()
	{
		$data['produk'] = $this->Model_produk->get();
		$this->load->view('template2', $data);
	}

	function add_to_cart()
  {
    $data	= array(
      'id'		  => $this->input->post('id_produk'),
      'name'		=> $this->input->post('nama_produk'),
      'price'			 		=> $this->input->post('harga'),
      'qty' 				  => $this->input->post('quantity')
    );
    $this->cart->insert($data);
    echo $this->show_cart();
  }

  function show_cart(){ //Fungsi untuk menampilkan Cart
    $output = '';
    $no = 0;
    foreach ($this->cart->contents() as $items) {
      $no++;
      $output .='
      <tr>
      <td>'.$items['name'].'</td>
      <td>'.number_format($items['price']).'</td>
      <td>'.$items['qty'].'</td>
      <td>'.number_format($items['subtotal']).'</td>
      <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
      </tr>
      ';
    }
    $output .= '
    <tr>
    <th colspan="3">Total</th>
    <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
    </tr>
		<tr>
			<th colspan="5">
				<form action="<?= base_url() ?>home/order" method="post">
					<input type="hidden" name="" value="">
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</th>
		</tr>
    ';
    return $output;
  }

  function load_cart(){ //load data cart
    echo $this->show_cart();
  }

  function hapus_cart(){ //fungsi untuk menghapus item cart
    $data = array(
      'rowid' => $this->input->post('row_id'),
      'qty' => 0,
    );
    $this->cart->update($data);
    echo $this->show_cart();
  }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
