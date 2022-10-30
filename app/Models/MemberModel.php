<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class MemberModel extends Model {
    
	protected $table = 'member';
	protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
	protected $allowedFields = ['nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'skill', 'no_telp', 'angkatan', 'organisasi', 'lencana', 'foto', 'status'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}