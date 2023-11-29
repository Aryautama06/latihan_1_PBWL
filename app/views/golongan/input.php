<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table class="form-table">
        <tr>
            <td>ID GOLONGAN</td>
            <td><input type="text" name="gol_id" required></td>
        </tr>
        <tr>
            <td>KODE GOLONGAN</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>NAMA GOLONGAN</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>