<script>
function hapusPeserta(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>

<h1>Daftar Peserta</h1>
<a href="<?=base_url()?>index.php/peserta/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>
<table class="table">
    <thead>
        <th>No</th><th>NIM</th><th>Nama</th><th>Seminar</th><th>Kehandiran</th><th>Action</th>
    </thead>
    <tbody>
    <?php
        $nomor = 1;
        foreach ($list_peserta->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->nim.'</td>'; 
        echo '<td>'.$row->nama.'</td>';
        echo '<td>'.$row->seminar_id.'</td>';
        ?>
        <td>
        <?php
        if ($row->kehadiran == 1){
            echo 'Hadir';
        }elseif ($row->kehadiran == 2){
            echo 'Izin';
        }else{
            echo 'Alpha';
        }
        ?>
        </td>
        <?php
        echo '<td>
        <a href="'.base_url().'index.php/peserta/edit/'.$row->id.'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> |
        <a href="'.base_url().'index.php/peserta/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return hapusPeserta(\'Data peserta '.$row->nama.' Yakin mau dihapus ?? \')">Delete</a>
        </td></tr>';
        
        $nomor++;
    
    }
    ?>
    </tbody>
</table>
