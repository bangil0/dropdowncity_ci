
	function tampilkec($id){

		$this->db->select('kota.`id_kota`,kecamatan.`nama_kecamatan`,kecamatan.`id_kecamatan`');
		$this->db->from('kota');
		$this->db->join('ongkir', 'ongkir.`id_kota` = kota.`id_kota`');
		$this->db->join('kecamatan', 'kecamatan.`id_kecamatan` = ongkir.`id_kecamatan`');
		$this->db->where('kota.`id_kota`',$id);
		return $this->db->get();
	}