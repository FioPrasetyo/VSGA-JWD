<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'Data Transaksi');
$activeWorksheet->setCellValue('A3', 'NO');
$activeWorksheet->setCellValue('B3', 'NO Transaksi');
$activeWorksheet->setCellValue('C3', 'Anggota');
$activeWorksheet->setCellValue('D3', 'Buku');
$activeWorksheet->setCellValue('E3', 'Tanggal');

include 'koneksi.php';

    $query = "SELECT * from m_transaksi 
                join m_anggota on m_anggota.id_anggota = m_transaksi.anggota 
                join m_buku on m_buku.id_buku = m_transaksi.buku";
                $transaksi = mysqli_query($koneksi, $query);

                $no = 1;
                $baris = 4;  
                    foreach ($transaksi as $key => $value)
                    {
                        $activeWorksheet->setCellValue('A'.$baris,$no);
                        $activeWorksheet->setCellValue('B'.$baris,$value['no_transaksi']);
                        $activeWorksheet->setCellValue('C'.$baris,$value['nama']);
                        $activeWorksheet->setCellValue('D'.$baris,$value['judul_buku']);
                        $activeWorksheet->setCellValue('E'.$baris,$value['tanggal']);
                        $no++;
                        $baris++;
                    }

$writer = new Xlsx($spreadsheet);
$writer->save('transaksi.xlsx');
header('Location: Transaksi.xlsx');