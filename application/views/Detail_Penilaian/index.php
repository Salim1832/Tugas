<div class="table-responsive">
    <h1>Detail Penilaian</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Dosen</th>
            <th>Seminar</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($detail_penilaian->result() as $row){

        ?>
    
        <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->dosen_id ?></td>
                <td><?php echo $row->seminar_id ?></td>
                <td><?php echo $row->nilai ?></td>
        </tr>
        <?php
        }
        ?>

    
    </tbody>
    </table>
</div>