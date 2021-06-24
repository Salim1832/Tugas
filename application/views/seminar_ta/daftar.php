<h1>Daftar Seminar</h1><hr><br>

<?php echo form_open('dosen/save'); ?>
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="semester">Semester</label>  
  <div class="col-md-4">
  <input id="semester" name="semester" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tanggal">Tanggal</label>  
  <div class="col-md-4">
  <input id="tanggal" name="tanggal" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jam">Jam</label>  
  <div class="col-md-4">
  <input id="jam" name="jam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategoriseminar">Katergori Seminar</label>
  <div class="col-md-4">
    <select id="kategoriseminar" name="kategoriseminar" class="form-control">
    <?php 
    foreach ($list_kategori_seminar->result() as $row)
    {
        echo '<option>'.$row->nama.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nim">NIM</label>  
  <div class="col-md-4">
  <input id="nim" name="nim" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="namamahasiswa">Nama Mahasiswa</label>  
  <div class="col-md-4">
  <input id="namamahasiswa" name="namamahasiswa" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="judul">Judul</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="judul" name="judul"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pembimbing">Pembimbing</label>
  <div class="col-md-4">
    <select id="pembimbing" name="pembimbing" class="form-control">
    <?php 
    foreach ($list_dosen->result() as $row)
    {
        echo '<option>'.$row->nama.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penguji1">Penguji 1</label>
  <div class="col-md-4">
    <select id="penguji1" name="penguji1" class="form-control">
    <?php 
    foreach ($list_dosen->result() as $row)
    {
        echo '<option>'.$row->nama.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="penguji2">Penguji 2</label>
  <div class="col-md-4">
    <select id="penguji2" name="penguji2" class="form-control">
    <?php 
    foreach ($list_dosen->result() as $row)
    {
        echo '<option>'.$row->nama.'</option>';
    }
    ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilaipembimbing">Nilai Pembimbing</label>  
  <div class="col-md-4">
  <input id="nilaipembimbing" name="nilaipembimbing" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilaipenguji1">Nilai Penguji 1</label>  
  <div class="col-md-4">
  <input id="nilaipenguji1" name="nilaipenguji1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilaipenguji2">Nilai Penguji 2</label>  
  <div class="col-md-4">
  <input id="nilaipenguji2" name="nilaipenguji2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="lokasi">Lokasi</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="lokasi" name="lokasi"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilaiakhir">Nilai Akhir</label>  
  <div class="col-md-4">
  <input id="nilaiakhir" name="nilaiakhir" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
<?php echo form_close() ?>