<?php
class Latihan01 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat Belajar Web Programing";
        //$this->load->view('view-latihan01');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan01');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan01->jumlah($n1, $n2);

        $this->load->view('view-latihan01', $data);
    }
}