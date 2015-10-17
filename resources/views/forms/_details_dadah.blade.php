<tr>
    <td>DADAH</td>
    <td>Dadah</td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="1" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="2" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="3" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="4" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="5" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="6" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="7" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="8" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="9" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="10" onchange="addJumlah()" /></td>
    <td><input class="form-control input-sm" type="number" min="0" max="1000" value="0" id="dadah_jumlah" readonly /></td>
</tr>

<script>

    function addJumlah()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById(i).value);
        }

//        alert(values);
        document.getElementById('dadah_jumlah').value = parseInt(values);
    }
</script>
