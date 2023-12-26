<?php
namespace App\Models;
use CodeIgniter\Model;
class Fotografer extends Model
{
 protected $table = 'fotografer';
 protected $primaryKey = 'PhotographerID';
 protected $useAutoIncrement = true;
 protected $returnType = 'array';
 protected $allowedFields = ['id_fotografer','nama_fotografer', 'spesialis_fotografer', 'notelp_fotografer'];

 // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}