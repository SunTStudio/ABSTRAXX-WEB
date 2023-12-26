<?php
namespace App\Models;
use CodeIgniter\Model;
class Appointment extends Model
{
 protected $table = 'appointment';
 protected $primaryKey = 'id_appointment';
 protected $useAutoIncrement = true;
 protected $returnType = 'array';
 protected $allowedFields = ['id_appointment','nama_fotografer', 'tanggal_appointment', 'nama_users','notelp_koor','keterangan_appointment','tempat_appointment','tempat_appointment','status_appointment'];

 // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}