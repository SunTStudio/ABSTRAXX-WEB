<?php
namespace App\Models;
use CodeIgniter\Model;
class AdminData extends Model
{
 protected $table = 'admin';
 protected $primaryKey = 'id_admin';
 protected $useAutoIncrement = true;
 protected $returnType = 'array';
 protected $allowedFields = ['id_admin','nama_admin', 'password_admin'];

 // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}