<?php
namespace App\Models;
use CodeIgniter\Model;
class UsersData extends Model
{
 protected $table = 'users';
 protected $primaryKey = 'id_users';
 protected $useAutoIncrement = true;
 protected $returnType = 'array';
 protected $allowedFields = ['id_users','password_users','nama_users', 'tanggal_pesan', 'detail_users', 'kontrak_users','notelp_users','alamat_users','upload_users'];

 // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}