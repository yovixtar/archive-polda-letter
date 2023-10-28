<?php
/*
	 * PROSES Tambah  
	 */
class delete
{
	protected $db;
	function __construct($db)
	{
		$this->db = $db;
	}

	function delete_arsip_surat_by_id($idx)
	{
		$data[] = $idx;

		$sql = 'DELETE FROM arsip_surat WHERE id = ?';
		$row = $this->db->prepare($sql);
		$row->execute($data);
	}
	function delete_substansi_by_id($idx)
	{
		$data[] = $idx;

		$sql = 'DELETE FROM substansi WHERE id = ?';
		$row = $this->db->prepare($sql);
		$row->execute($data);
	}
	function delete_sumber_surat_by_id($idx)
	{
		$data[] = $idx;

		$sql = 'DELETE FROM sumber_surat WHERE id = ?';
		$row = $this->db->prepare($sql);
		$row->execute($data);
	}
	function delete_polres_by_id($idx)
	{
		$data[] = $idx;

		$sql = 'DELETE FROM polres WHERE id = ?';
		$row = $this->db->prepare($sql);
		$row->execute($data);
	}
}
