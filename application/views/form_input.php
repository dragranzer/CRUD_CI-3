<html>
<head><title>Halaman Input Data</title></head>
<body>
    <h3>Form Input data</h3>

    <table>
        <form action="<?php echo base_url('Welcome/AksiInsert')?>" method="post">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>
</body>
</html>