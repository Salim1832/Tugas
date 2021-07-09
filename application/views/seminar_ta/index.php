<h1>Jadwal Seminar</h1><br>
<a href="<?=base_url()?>index.php/seminar_ta/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>
<div class="table-responsive">
    <table class="table" style="width: 250%;">
    <thead>
        <tr>
            <th>NO</th><th>Semester</th><th>Tanggal</th><th>Jam</th><th>kategori Seminar</th><th>NIM</th>
            <th>Nama Mahasiswa</th><th>Judul</th><th>Pembimbing</th><th>Penguji 1</th><th>Penguji 2</th>
            <th>Lokasi</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
        $nomor = 1;
        foreach ($join->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->semester.'</td>'; 
        echo '<td>'.$row->tanggal.'</td>';
        echo '<td>'.$row->jam.'</td>';
        echo '<td>'.$row->kategori_seminar_id.'</td>';
        echo '<td>'.$row->nim.'</td>';
        echo '<td>'.$row->nama_mahasiswa.'</td>';
        echo '<td>'.$row->judul.'</td>';
        echo '<td>'.$row->nama.'</td>';
        echo '<td>'.$row->penguji1_id.'</td>';
        echo '<td>'.$row->penguji2_id.'</td>';
        echo '<td>'.$row->lokasi.'</td>';
        echo '<td>
        <a href="'.base_url().'index.php/seminar_ta/edit/'.$row->id.'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> |
        <a href="'.base_url().'index.php/seminar_ta/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return hapusSeminar_ta(\'Data Seminar_ta '.$row->nama.' Yakin mau dihapus ?? \')">Delete</a>
        </td></tr>';
        
        $nomor++;
    
    }
    ?>
    </tbody>
    </table>
</div>