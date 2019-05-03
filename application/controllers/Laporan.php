<?php
Class Laporan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(290,7,'AGUNG FURNITURE',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(290,7,'DETAILS ORDER',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0);
        $pdf->Cell(25,6,'TANGGAL',1,0);
        $pdf->Cell(30,6,'NAMA DEPAN',1,0);
        $pdf->Cell(35,6,'NAMA BELAKANG',1,0);
        $pdf->Cell(43,6,'EMAIL',1,0);
        $pdf->Cell(25,6,'ALAMAT',1,0);
        $pdf->Cell(25,6,'KOTA',1,0);
        $pdf->Cell(25,6,'KODE POS',1,0);
        $pdf->Cell(25,6,'TELEPON',1,0);
        $pdf->Cell(27,6,'TOTAL',1,1);
        $pdf->SetFont('Arial','',10);
        $order = $this->db->get('order')->result();
        foreach ($order as $row){
            $pdf->Cell(10,6,$row->id_order,1,0);
            $pdf->Cell(25,6,$row->tanggal,1,0);
            $pdf->Cell(30,6,$row->nama_depan,1,0);
            $pdf->Cell(35,6,$row->nama_belakang,1,0);
            $pdf->Cell(43,6,$row->email,1,0);
            $pdf->Cell(25,6,$row->alamat,1,0);
            $pdf->Cell(25,6,$row->kota,1,0);
            $pdf->Cell(25,6,$row->kode_pos,1,0);
            $pdf->Cell(25,6,$row->telepon,1,0);
            $pdf->Cell(27,6,'Rp.'.number_format($row->total,0,',','.'),1,1);
        }
        $pdf->Output();
    }
}
