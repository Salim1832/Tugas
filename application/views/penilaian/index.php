<h1>Penilaian</h1><hr><br>

<div class="table-responsive">
    <table class="table" style="width: 250%;">
    <thead>
        <tr>
            <th>NO</th><th>Nama</th><th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
        $nomor = 1;
        foreach ($penilaian->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->nama.'</td>'; 
        echo '<td>'.$row->keterangan.'</td>';

        echo '</tr>';
        
        $nomor++;
    
    }
    ?>
    </tbody>
    </table>
</div>