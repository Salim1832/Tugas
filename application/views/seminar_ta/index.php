<h1>Jadwal Seminar</h1><hr><br>

<div class="table-responsive">
    <table class="table" style="width: 250%;">
    <thead>
        <tr>
            <th>NO</th><th>Semester</th><th>Tanggal</th><th>Jam</th><th>kategori Seminar</th><th>NIM</th>
            <th>Nama Mahasiswa</th><th>Judul</th><th>Pembimbing ID</th><th>Penguji 1 ID</th><th>Penguji 2 ID</th>
            <th>Nilai Pembimbing</th><th>Nilai Penguji 1</th><th>Nilai Penguji 2</th><th>Lokasi</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
        $nomor = 1;
        foreach ($list_seminar_ta->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->semester.'</td>'; 
        echo '<td>'.$row->tanggal.'</td>';
        echo '<td>'.$row->jam.'</td>';
        echo '<td>'.$row->kategori_seminar_id.'</td>';
        echo '<td>'.$row->nim.'</td>';
        echo '<td>'.$row->nama_mahasiswa.'</td>';
        echo '<td>'.$row->judul.'</td>';
        echo '<td>'.$row->pembimbing_id.'</td>';
        echo '<td>'.$row->penguji1_id.'</td>';
        echo '<td>'.$row->penguji2_id.'</td>';
        echo '<td>'.$row->nilai_pembimbing.'</td>';
        echo '<td>'.$row->nilai_penguji1.'</td>';
        echo '<td>'.$row->nilai_penguji2.'</td>';
        echo '<td>'.$row->lokasi.'</td>';
        echo '<td>'.$row->nilai_akhir.'</td>';

        echo '</tr>';
        $nomor++;
    }
    ?>
    </tbody>
    </table>
</div>