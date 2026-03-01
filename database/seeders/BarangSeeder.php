<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['barang_id'=>1,'kategori_id'=>1,'barang_kode'=>'BRG001','barang_nama'=>'Laptop Asus TUF Gaming A15','harga_beli'=>15000000,'harga_jual'=>17000000],
            ['barang_id'=>2,'kategori_id'=>1,'barang_kode'=>'BRG002','barang_nama'=>'Mouse Logitech Wireless','harga_beli'=>150000,'harga_jual'=>170000],
            ['barang_id'=>3,'kategori_id'=>2,'barang_kode'=>'BRG003','barang_nama'=>'Jersey Manchester United 07/08','harga_beli'=>100000,'harga_jual'=>130000],
            ['barang_id'=>4,'kategori_id'=>2,'barang_kode'=>'BRG004','barang_nama'=>'Celana Jeans','harga_beli'=>90000,'harga_jual'=>120000],
            ['barang_id'=>5,'kategori_id'=>3,'barang_kode'=>'BRG005','barang_nama'=>'Indomie Goreng Original','harga_beli'=>3000,'harga_jual'=>4000],
            ['barang_id'=>6,'kategori_id'=>3,'barang_kode'=>'BRG006','barang_nama'=>'Nasi Pecel','harga_beli'=>5000,'harga_jual'=>8000],
            ['barang_id'=>7,'kategori_id'=>4,'barang_kode'=>'BRG007','barang_nama'=>'Le Mineral 600 ml','harga_beli'=>2000,'harga_jual'=>3000],
            ['barang_id'=>8,'kategori_id'=>4,'barang_kode'=>'BRG008','barang_nama'=>'Nescafe Kitkat 200 ml','harga_beli'=>8000,'harga_jual'=>10000],
            ['barang_id'=>9,'kategori_id'=>5,'barang_kode'=>'BRG009','barang_nama'=> 'Buku Tulis Sinar Dunia','harga_beli'=>3500,'harga_jual'=>5000],
            ['barang_id'=>10,'kategori_id'=>5,'barang_kode'=>'BRG010','barang_nama'=>'Pulpen Standard','harga_beli'=>2000,'harga_jual'=>3000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
