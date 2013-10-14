<?php
class Core
{
	protected $db,$db1, $result;
	private $row;

	public function __construct()
	{
       $this->db = new mysqli('','','','');
		}

	public function query($sql)
	{
	$this->result = $this->db->query($sql);
	}
	
	public function rows()
	{
	for($x = 1; $x <= $this->db->affected_rows; $x++)
	{
	$this->rows[] = $this->result->fetch_assoc();
	}
	if (empty($this->rows) === false){
	return $this->rows;
	}
	}
}
?>
