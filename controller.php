	function getkec(){
		$id=$this->input->post('id');
		$kec = $this->m_alamat->tampilkec($id)->result();
		//?>
			<option value="">Pilih kecamatansss</option>
		<?php
			foreach($kec as $key) {
		?>
			<option value="<?php echo $key->id_kecamatan ?>"><?php echo $key->nama_kecamatan?></option>
		<?php
			}
	}