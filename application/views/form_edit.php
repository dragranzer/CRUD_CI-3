<html>
<head><title>Halaman Form Data</title></head>
<body>
    <h3>Form Edit data</h3>

    <table>
        <form action="<?php echo base_url('Welcome/AksiEdit')?>" method="post">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo $data_mhs->NIM?>" name="nim" disabled>
                    <input type="hidden" value="<?php echo $data_mhs->NIM?>" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $data_mhs->Nama?>" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $data_mhs->Jurusan?>" name="jurusan"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>
</body>
</html>