<h1>Edit Seminar</h1><br>

<?php echo form_open('seminar_ta/save'); ?>
  <div class="form-group row">
    <label for="semester" class="col-4 col-form-label">Semester</label> 
    <div class="col-8">
      <input id="semester" name="semester" type="text" value="<?=$objseminar_ta->semester?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="text" value="<?=$objseminar_ta->tanggal?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jam" class="col-4 col-form-label">Jam</label> 
    <div class="col-8">
      <input id="jam" name="jam" type="text" value="<?=$objseminar_ta->jam?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Kategori Seminar</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kategori_seminar" id="kategori_seminar_0" type="radio" class="custom-control-input" value="1" checked="checked"> 
        <label for="kategori_seminar_0" class="custom-control-label">Seminar Proposal</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kategori_seminar" id="kategori_seminar_1" type="radio" class="custom-control-input" value="2"> 
        <label for="kategori_seminar_1" class="custom-control-label">Seminar Hasil</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kategori_seminar" id="kategori_seminar_2" type="radio" class="custom-control-input" value="3"> 
        <label for="kategori_seminar_2" class="custom-control-label">Sidang Akhir</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Nim</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" value="<?=$objseminar_ta->nim?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" value="<?=$objseminar_ta->nama_mahasiswa?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul</label> 
    <div class="col-8">
      <input id="judul" name="judul" type="text" value="<?=$objseminar_ta->judul?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pembimbing" class="col-4 col-form-label">Pembimbing</label> 
    <div class="col-8">
      <select id="pembimbing" name="pembimbing" class="custom-select">
        <option value="">Pilih..</option>
        <?php
          foreach($list_dosen->result() as $dosen){
            echo '<option value="'.$dosen->id.'">'.$dosen->nama.'</option>';
          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="penguji1" class="col-4 col-form-label">Penguji 1</label> 
    <div class="col-8">
      <select id="penguji1" name="penguji1" class="custom-select">
      <option value="">Pilih...</option>
      <?php
          foreach($list_dosen->result() as $dosen){
            echo '<option value="'.$dosen->id.'">'.$dosen->nama.'</option>';
          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="penguji2" class="col-4 col-form-label">Penguji 2</label> 
    <div class="col-8">
      <select id="penguji2" name="penguji2" class="custom-select">
      <option value="">Pilih...</option>
      <?php
          foreach($list_dosen->result() as $dosen){
            echo '<option value="'.$dosen->id.'">'.$dosen->nama.'</option>';
          }
        ?>
      </select>
    </div>
  </div> 
  
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Lokasi</label> 
    <div class="col-8">
      <input id="nama" name="lokasi" type="text" value="<?=$objseminar_ta->lokasi?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nilai Akhir</label> 
    <div class="col-8">
      <input id="nama" name="nilai_akhir" type="text" value="<?=$objseminar_ta->nilai_akhir?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-warning">Update</button>
    </div>
    <input type="hidden" name="idedit" value="<?=$objseminar_ta->id?>"/>
<?php echo form_close() ?>