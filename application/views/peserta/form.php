<h1>Tambah Peserta</h1>

<?php echo form_open('peserta/save');?>
  <div class="form-group row">
    <label for="nidn" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nidn" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4">Seminar</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="seminar" id="seminar_0" type="radio" class="custom-control-input" value="4"> 
        <label for="seminar_0" class="custom-control-label">4</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="seminar" id="seminar_1" type="radio" class="custom-control-input" value="5"> 
        <label for="seminar_1" class="custom-control-label">5</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="seminar" id="seminar_2" type="radio" class="custom-control-input" value="6"> 
        <label for="seminar_2" class="custom-control-label">6</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4">Kehadiran</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kehadiran" id="kehadiran_0" type="radio" class="custom-control-input" value="1"> 
        <label for="kehadiran_0" class="custom-control-label">Hadir</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kehadiran" id="kehadiran_1" type="radio" class="custom-control-input" value="2"> 
        <label for="kehadiran_1" class="custom-control-label">Izin</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kehadiran" id="kehadiran_2" type="radio" class="custom-control-input" value="3"> 
        <label for="kehadiran_2" class="custom-control-label">Alpha</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>