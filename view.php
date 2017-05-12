<div class="form-group">
                    <label for="sel1">Kota</label>
                        <select name="kota" id="kota" class="form-control" onChange="getKec(this.value);">
                        <option value="">Pilih kota</option>
                        <?php
                        foreach($kota as $key) {
                        ?>
                        <option value="<?php echo $id=$key->id_kota; ?>"><?php echo $key->nama_kota; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="sel1">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control">
                          <option value="">Pilih Kecamatan</option>
                        </select>
                  </div>

                  <script>
function getKec(id) {
  $.ajax({
  type: "POST",
  url: "<?php echo base_url()?>userpage/alamat/getkec",
  data:{id:id},
  success: function(data){
    $("#kecamatan").html(data);
  }
  });
}
</script>
