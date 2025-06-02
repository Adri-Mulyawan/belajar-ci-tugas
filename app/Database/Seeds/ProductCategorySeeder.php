<?php 
namespace App\Database\Seeds; 
use CodeIgniter\Database\Seeder; 
use CodeIgniter\I18n\Time; 
class ProductCategorySeeder extends Seeder 
{ 
 public function run() 
 { 
 // Menghapus data yang sudah ada 
 $this->db->table('product_category')->truncate(); 
 $data = [ 
 [ 
 'name' => 'Makanan', 
 'slug' => 'makanan', 
 'description' => 'Berbagai jenis makanan dan bahan masakan', 
 'is_active' => 1, 
 'created_at' => Time::now(), 
 'updated_at' => Time::now(), 
 ], 
 [ 
 'name' => 'Minuman', 
 'slug' => 'minuman', 
 'description' => 'Berbagai jenis minuman segar dan kemasan', 
 'is_active' => 1, 
 'created_at' => Time::now(), 
 'updated_at' => Time::now(), 
 ], 
 [ 
 'name' => 'Perawatan Tubuh', 
 'slug' => 'perawatan-tubuh', 
 'description' => 'Produk perawatan tubuh dan kosmetik', 
 'is_active' => 1, 
 'created_at' => Time::now(), 
 'updated_at' => Time::now(), 
 ], 
 [ 
 'name' => 'Alat Tulis', 
 'slug' => 'alat-tulis', 
 'description' => 'Peralatan kantor dan kebutuhan sekolah', 
 'is_active' => 1, 
 'created_at' => Time::now(), 
 'updated_at' => Time::now(), 
 ], 
 [ 
 'name' => 'Kesehatan', 
 'slug' => 'kesehatan', 
 'description' => 'Produk-produk kesehatan dan obat-obatan', 
 'is_active' => 1, 
 'created_at' => Time::now(), 
 'updated_at' => Time::now(), 
 ], 
 ]; 
 // Insert data to table 
 $this->db->table('product_category')->insertBatch($data); 
 } 
}