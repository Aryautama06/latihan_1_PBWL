<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Post</a>

<table>
      <head>
            <tr>
                  <th>NO</th>
                  <th>ID PELANGGAN</th>
                  <th>ID GOLONGAN PELANGGAN</th>
                  <th>NO PELANGGAN</th>
                  <th>NAMA PELANGGAN</th>
                  <th>ALAMAT PELANGGAN</th>
                  <th>NO HP PELANGGAN</th>
                  <th>KTP PELANGGAN</th>
                  <th>SERI PELANGGAN</th>
                  <th>METERAN PELANGGAN</th>
                  <th>AKTIF PELANGGAN</th>
                  <th>ID USER PELANGGAN</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </head>
      <body>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['pel_id']; ?></td>
                        <td><?php echo $row['pel_id_gol']; ?></td>
                        <td><?php echo $row['pel_no']; ?></td>
                        <td><?php echo $row['pel_nama']; ?></td>
                        <td><?php echo $row['pel_alamat']; ?></td>
                        <td><?php echo $row['pel_hp']; ?></td>
                        <td><?php echo $row['pel_ktp']; ?></td>
                        <td><?php echo $row['pel_seri']; ?></td>
                        <td><?php echo $row['pel_meteran']; ?></td>
                        <td><?php echo $row['pel_aktif']; ?></td>
                        <td><?php echo $row['pel_id_user']; ?></td>
                        <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </body>
</table>