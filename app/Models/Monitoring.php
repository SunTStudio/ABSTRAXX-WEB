<?php
namespace App\Models;
use CodeIgniter\Model;
class Monitoring extends Model
{
 protected $table = 'monitoring';
 protected $primaryKey = 'id_monitoring';
 protected $useAutoIncrement = true;
 protected $returnType = 'array';
 protected $allowedFields = ['id_monitoring','id_users', 'nama_users', 'detail_users','notelp_users','tanggal_pesan','lokasi_users','update_monitoring','progress_monitoring'];

 // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}