<html>

<head>
    <title>tampil data matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    tampil data mata kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr> 
                    <td>Nama MTK</td>
                    </td>:</td>
                    <td>
                       <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                           <td>SKS</td>
                           </td>:</td>
                           </td>
                                <?sks; ?>
                            <td>
                        </tr>
                        <tr>
                              <td colspan="3" align="center">
                               <a href="<?= base_url('matakuliah'); 
                    ?>">kembali</a>

                               </td>
                               </tr>
                            </table>
                        </center>
                    </body>

                    </html>