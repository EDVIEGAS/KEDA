<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class documentos_Model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}


	function insertDocumento($dados = null)
	{
		if($this->db->insert('documentos',$dados)){
			// $ultimo_id = $this->db->insert_id();
			return 1;
		}else{
            return 2;
		}
	}

	function insertDocumentoMestre($id = NULL,$dados = NULL){
		if ($id == NULL) return 0;
			$this->db->where('id_mestre',$id);
		if ($this->db->update('mestre',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	function selectDocumentoMestre($id){
		$query = $this->db->query('select descricao_documento from mestre where id_mestre ='.$id)->result();

		return $query;
	}


	function selectAllDocument()
	{
		
		$query = $this->db->query("SELECT * FROM documentos ")->result();
		return $query;
		
	}

	function selectDocumentById($id)
	{
		
		$query = $this->db->query('SELECT * FROM documentos where id_documento='.$id)->result();
		return $query;

	}

	function updateDocumentStatus($id, $dados)
	{
		
		
		if ($id == null) return 0;
			$this->db->where('id_documento',$id);
		if ($this->db->update('documentos',$dados)) {
			return 1;
		}else{
			return 2;
		}
	

	}

	function deleteDocumentoById($id)
	{
		
		if($id != NULL){
			$this->db->where('id_documento', $id);
			if($this->db->delete('documentos')):
				
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}

	}

}

?>
