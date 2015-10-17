<!--

FORMAT
    input -> name = warganegara_bangsa_kesalahan_jantina

warganeagara        -> 1
B. Warganegara      -> 2
Lain-lain           -> 3

Bangsa
    Melayu          -> 1
    Cina            -> 2
    India           -> 3
    Lain-lain       -> 4

Kesalahan
    Banduan Akhir   -> 1
    B. Seumur Hayar -> 2
    B. Seumur Hidup -> 3
    T. Limpah Sultan-> 4
    H. Lama         -> 5
    H. Singkat      -> 6
    T. M. Tinggi    -> 7
    T. M. Sesyen    -> 8
    T. M. Rendah    -> 9
    T. M. Rayuan    -> 10
    T. M. R. S      -> 11
    B. Dagang       -> 12
    B. Parol        -> 13
    Dadah           -> 14
    Mudah           -> 15

Jantina
    Lelaki          -> 1
    Perempuan       -> 2


CONTOH
    Warganegara, Melayu, Banduan Akhir, Lelaki  = 1_1_1_1 <input name="1_1_1_1">
    Warganegara, India, HLama, Perempuan        = 1_3_5_2 <input name="1_3_5_2">


JUMLAH
    <input name="1_jumlah">
-->
<tr>
    <td>Banduan Muda</td>
    <td>Muda</td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="0" id="muda_1" onkeyup="addMuda()" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="0" id="muda_2" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="0" id="muda_3" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="0" id="muda_4" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="0" id="muda_5" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="0" id="muda_6" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="0" id="muda_7" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="0" id="muda_8" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="0" id="muda_9" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="0" id="muda_10" onkeyup="addMuda()" /></td>
    <td><input class="form-control input-sm" type="number" name="15_jumlah" min="0" max="1000" value="0" id="muda_jumlah"  readonly /></td>
</tr>

<script>

    function addMuda()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('muda_' + i).value);
        }

        document.getElementById('muda_jumlah').value = parseInt(values);
    }
</script>