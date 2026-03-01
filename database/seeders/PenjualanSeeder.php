<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['penjualan_id'=>1,'user_id'=>1,'pembeli'=>'Andi', 'penjualan_kode'=>'TRX-001','penjualan_tanggal'=>'2024-06-01'],
            ['penjualan_id'=>2,'user_id'=>1,'pembeli'=>'Siti', 'penjualan_kode'=>'TRX-002','penjualan_tanggal'=>'2024-06-01'],
            ['penjualan_id'=>3,'user_id'=>1,'pembeli'=>'Budi', 'penjualan_kode'=>'TRX-003','penjualan_tanggal'=>'2024-06-02'],
            ['penjualan_id'=>4,'user_id'=>1,'pembeli'=>'Citra', 'penjualan_kode'=>'TRX-004','penjualan_tanggal'=>'2024-06-02'],
            ['penjualan_id'=>5,'user_id'=>1,'pembeli'=>'Dandi', 'penjualan_kode'=>'TRX-005','penjualan_tanggal'=>'2024-06-03'],
            ['penjualan_id'=>6,'user_id'=>1,'pembeli'=>'Hafizah', 'penjualan_kode'=>'TRX-006','penjualan_tanggal'=>'2024-06-04'],
            ['penjualan_id'=>7,'user_id'=>1,'pembeli'=>'Reo', 'penjualan_kode'=>'TRX-007','penjualan_tanggal'=>'2024-06-04'],
            ['penjualan_id'=>8,'user_id'=>1,'pembeli'=>'Taki', 'penjualan_kode'=>'TRX-008','penjualan_tanggal'=>'2024-06-07'],
            ['penjualan_id'=>9,'user_id'=>1,'pembeli'=>'Irja', 'penjualan_kode'=>'TRX-009','penjualan_tanggal'=>'2024-06-07'],
            ['penjualan_id'=>10,'user_id'=>1,'pembeli'=>'Ren', 'penjualan_kode'=>'TRX-010','penjualan_tanggal'=>'2024-06-10'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
