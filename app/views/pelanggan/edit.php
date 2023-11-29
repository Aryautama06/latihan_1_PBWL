<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table class="form-table">
        <tr>
            <td>ID GOLONGAN PELANGGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>" <?php echo $opt['gol_id'] == $data['row']['pel_id_gol'] ? "selected" : ""; ?>><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NOMOR PELANGGAN</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA PELANGGAN</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT PELANGGAN</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP PELANGGAN</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>KTP PELANGGAN</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required></td>
        </tr>
        <tr>
            <td>SERI PELANGGAN</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
        </tr>
        <tr>
            <td>METERAN PELANGGAN</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
        </tr>
        <tr>
            <td>AKTIF PELANGGAN</td>
            <td>
                <select name="pel_aktif" required>
                    <option value="Y" <?php echo ($data['row']['pel_aktif'] == 'Y') ? 'selected' : ''; ?>>Aktif</option>
                    <option value="N" <?php echo ($data['row']['pel_aktif'] == 'N') ? 'selected' : ''; ?>>Tidak Aktif</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>ID PENGGUNA PELANGGAN</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optusers'] as $optuser) { ?>
                        <option value="<?php echo $optuser['user_id']; ?>" <?php echo $optuser['user_id'] == $data['row']['pel_id_user'] ? "selected" : ""; ?>><?php echo $optuser['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>