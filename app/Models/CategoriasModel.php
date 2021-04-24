<?php 
	namespace App\Models;
	use CodeIgniter\Model;

	class UnidadesModel extends Model
	{
		protected $table      = 'categorias';
	    protected $primaryKey = 'id';

	    protected $useAutoIncrement = true;

	    protected $returnType     = 'array';
	    protected $useSoftDeletes = false;

	    protected $allowedFields = ['nombre', 'activo'];

	    protected $useTimestamps = true;
	    protected $createdField  = 'fecha_alta';
	    protected $updatedField  = 'fecha_edit';
	    protected $deletedField  = 'deleted_at';

	    protected $validationRules    = [];
	    protected $validationMessages = [];
	    protected $skipValidation     = false;
	}

 