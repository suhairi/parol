<tr>
    <td>BANDUAN KEM</td>
    <td>Kem</td>
    <td><input class="form-control input-sm" type="number" name="1_1_16_1" min="0" max="1000" value="0" id="kem_1" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_16_2" min="0" max="1000" value="0" id="kem_2" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_16_1" min="0" max="1000" value="0" id="kem_3" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_16_2" min="0" max="1000" value="0" id="kem_4" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_16_1" min="0" max="1000" value="0" id="kem_5" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_16_2" min="0" max="1000" value="0" id="kem_6" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_16_1" min="0" max="1000" value="0" id="kem_7" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_16_2" min="0" max="1000" value="0" id="kem_8" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_16_1" min="0" max="1000" value="0" id="kem_9" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_16_2" min="0" max="1000" value="0" id="kem_10" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="16_jumlah" min="0" max="1000" value="0" id="kem_jumlah" readonly /></td>
</tr>

<script>

    function addKem()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('kem_' + i).value);
        }

        document.getElementById('kem_jumlah').value = parseInt(values);
    }
</script>