
<div class="table-responsive">
    <table class="table" style="width: 250%;">
    <thead>
        <tr>
            <td>ID</td>
            <td>Dosen</td>
            <td>Seminar</td>
            <td>Penilaian</td>
        </tr>
    </thead>
    <tbody>
            
        <?php
        $nomor = 1;
        foreach ($list_detail_penilaian->result() as $row)
    {
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$row->semester.'</td>'; 

        echo '</tr>';
        $nomor++;
    }
    ?>
    </tbody>
    </table>
</div>