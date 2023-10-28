<?php
/*
	 * PROSES TAMPIL  
	 */
class view
{
	protected $db;
	function __construct($db)
	{
		$this->db = $db;
	}

	function get_substansi()
	{
		$sql = "SELECT * FROM substansi";
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_sumber_surat()
	{
		$sql = "SELECT * FROM sumber_surat";
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_substansi_by_id($id)
	{
		$sql = "SELECT * FROM substansi WHERE id = ".$id;
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_sumber_surat_by_id($id)
	{
		$sql = "SELECT * FROM sumber_surat WHERE id = ".$id;
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_polres()
	{
		$sql = "SELECT * FROM polres";
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_amount_bulan_ini()
	{
		$sql = "SELECT ( COUNT(id) ) AS amount_all FROM arsip_surat WHERE MONTH(tanggal_surat) = ".date('m');
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_amount_tahun_ini()
	{
		$sql = "SELECT ( COUNT(id) ) AS amount_all FROM arsip_surat WHERE YEAR(tanggal_surat) = ".date('Y');
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_all_amount_surat_no_date()
	{
		$sql = "SELECT ( COUNT(id) ) AS amount_all FROM arsip_surat";
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_current_account($username_old, $password_old)
	{
		$sql = 'SELECT * FROM users WHERE username = ? and password = md5(?)';
        $row = $this->db->prepare($sql);
        $row->execute(array($username_old, $password_old));
        $check = $row->rowCount();
		return $check;
	}

	function get_arsip_surat_by_id($id)
	{
		$sql = 'SELECT * FROM arsip_surat WHERE id = ?';
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_single_date($month, $year)
	{
		$sql = 'SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id WHERE MONTH(tanggal_surat) = ? AND YEAR(tanggal_surat) = ?';
        $row = $this->db->prepare($sql);
        $row->execute(array($month, $year));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_multi_month($date_awal, $date_akhir)
	{
		$sql = 'SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id WHERE tanggal_surat BETWEEN ? AND ?';
        $row = $this->db->prepare($sql);
        $row->execute(array($date_awal, $date_akhir));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_filter_np($filter)
	{
		$filter_query = "%$filter%";
		$sql = 'SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id WHERE nomor_surat LIKE ? OR pelapor LIKE ?';
        $row = $this->db->prepare($sql);
        $row->execute(array($filter_query, $filter_query));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_filter_ket($filter)
	{
		$filter_query = "%$filter%";
		$sql = 'SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id WHERE keterangan LIKE ?';
        $row = $this->db->prepare($sql);
        $row->execute(array($filter_query));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_signature($id)
	{
		$sql = 'SELECT * FROM signature WHERE id = ?';
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_multi_month_pdf($date_awal, $date_akhir)
	{
		$sql = "SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres, sumber_surat.name AS name_sumber_surat FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id JOIN sumber_surat ON arsip_surat.sumber_surat_id = sumber_surat.id WHERE tanggal_surat BETWEEN ? AND ?";
		$row = $this->db->prepare($sql);
		$row->execute(array($date_awal, $date_akhir));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_filter_np_pdf($filter)
	{
		$filter_query = "%$filter%";
		$sql = "SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres, sumber_surat.name AS name_sumber_surat FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id JOIN sumber_surat ON arsip_surat.sumber_surat_id = sumber_surat.id WHERE nomor_surat LIKE ? OR pelapor LIKE ?";
		$row = $this->db->prepare($sql);
		$row->execute(array($filter_query, $filter_query));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_filter_ket_pdf($filter)
	{
		$filter_query = "%$filter%";
		$sql = "SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres, sumber_surat.name AS name_sumber_surat FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id JOIN sumber_surat ON arsip_surat.sumber_surat_id = sumber_surat.id WHERE keterangan LIKE ?";
		$row = $this->db->prepare($sql);
		$row->execute(array($filter_query));
		$hasil = $row->fetchAll();
		return $hasil;
	}
	function get_arsip_surat_by_month($month, $year)
	{
		$sql = "SELECT *, arsip_surat.id AS id_arsip_surat, polres.name AS name_polres, sumber_surat.name AS name_sumber_surat FROM arsip_surat JOIN polres ON arsip_surat.terlapor_polres = polres.id JOIN sumber_surat ON arsip_surat.sumber_surat_id = sumber_surat.id WHERE MONTH(tanggal_surat) = ".$month." AND YEAR(tanggal_surat) = ".$year;
		$row = $this->db->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		return $hasil;
	}
}
