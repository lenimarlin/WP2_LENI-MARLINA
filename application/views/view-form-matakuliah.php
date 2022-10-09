<html>

<head>
    <title>from input matakuliah</title>
</head>

<body>
    <center>
        <from action="<?=  base_url('matakuliah/catak>');    ?>"
method="post">
            <table>
                <tr>
                    <th colspam="3">
                        form input data mata kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                    <tr>
                        <th>kode MTK</td>
                        <th>:</th>
                        <td>
                            <input type="text"name="kode">
                        </td>
                    </tr>
                    <tr>
                        <select name="sks"id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>