<h1> Edit Data Dosen </h1>

<?php echo form_open('dosen/save'); ?>
  <div class="form-group row">
    <label for="nidn" class="col-4 col-form-label">NIDN</label> 
    <div class="col-8">
      <input id="nidn" name="nidn" type="text" 
      value="<?=$objdosen->nidn?>"
      class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap Dosen</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" 
      value="<?=$objdosen->nama?>"
      class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-warning">Update</button>
    </div>
  </div>
  <input type="hidden" name="idedit" value="<?=$objdosen->id?>"/>
<?php echo form_close(); ?>