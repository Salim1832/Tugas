<script>
function hapusDosen(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>


<h1>Daftar Dosen</h1>

<table class="table">
    <thead>
        <tr>
            <td>No</td><td>NIDN</td><td>Nama</td><td>Status</td>
        </tr>
    </thead>
    <tbody>
            
        <?php
        $nomor = 1;
        foreach($list_dosen->result() as $row){
            echo '<tr><td>'.$nomor.'</td>
                <td>'.$row->nidn.'</td>
                <td>'.$row->nama.'</td>
                <td><a href="" class="btn btn-success btn-lg active" role="button" aria-pressed="true">View</a> |
                <a href="'.base_url().'index.php/dosen/edit/'.$row->id.'" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a> |
                <a href="'.base_url().'index.php/dosen/delete/'.$row->id.'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" onclick="return hapusDosen(\'Data Dosen '.$row->nama.' Yakin mau dihapus ?? \')">Delete</a>
                </td></tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>

<a href="<?=base_url()?>index.php/dosen/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Dosen</a>