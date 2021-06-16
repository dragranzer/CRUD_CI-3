<html>
<head><title>CRUD_CI</title></head>
<body>
    <h1>CRUD di CI-3</h1>
    <h3>Data Mahasiswa</h3>
    <button onclick="document.location.href='<?php echo base_url('Welcome/formInput')?>'">Tambah Mahasiswa</button>

    <table>
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Aksi</td>
        </tr>
        <?php
            $count = 0;
            foreach($data_mhs as $row){
                $count = $count + 1;
            
        ?>
        <tr>
            <td><?php echo $count?></td>
            <td><?php echo $row->NIM?></td>
            <td><?php echo $row->Nama?></td>
            <td><?php echo $row->Jurusan?></td>
            <td><a href="<?php echo base_url('Welcome/formEdit/'). $row->NIM?>">Edit</a> <a href="<?php echo base_url('Welcome/AksiDeleteData/'). $row->NIM?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>