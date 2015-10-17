<!--

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
    <td rowspan="6">Sabitan</td>
    <td>Banduan Akhir</td>
    <td><input class="form-control input-sm" type="number" name="1_1_1_1" min="0" max="1000" value="0" id="BA_1" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_1_2" min="0" max="1000" value="0" id="BA_2" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_1_1" min="0" max="1000" value="0" id="BA_3" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_1_2" min="0" max="1000" value="0" id="BA_4" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_1_1" min="0" max="1000" value="0" id="BA_5" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_1_2" min="0" max="1000" value="0" id="BA_6" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_1_1" min="0" max="1000" value="0" id="BA_7" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_1_2" min="0" max="1000" value="0" id="BA_8" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_1_1" min="0" max="1000" value="0" id="BA_9" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_1_2" min="0" max="1000" value="0" id="BA_10" onkeyup="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_jumlah" min="0" max="1000" value="0" id="BA_jumlah" readonly /></td>
</tr>
<script>

function addBAkhir()
{
    values = 0;

    for(i=1; i<=10; i++)
    {
    values += parseInt(document.getElementById('BA_' + i).value);
    }

    document.getElementById('BA_jumlah').value = parseInt(values);
}

</script>
<tr>
    <td>Banduan Seumur Hayat</td>
    <td><input class="form-control input-sm" type="number" name="1_1_2_1" min="0" max="1000" value="0" id="BSHayat_1" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_2_2" min="0" max="1000" value="0" id="BSHayat_2" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_2_1" min="0" max="1000" value="0" id="BSHayat_3" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_2_2" min="0" max="1000" value="0" id="BSHayat_4" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_2_1" min="0" max="1000" value="0" id="BSHayat_5" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_2_2" min="0" max="1000" value="0" id="BSHayat_6" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_2_1" min="0" max="1000" value="0" id="BSHayat_7" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_2_2" min="0" max="1000" value="0" id="BSHayat_8" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_2_1" min="0" max="1000" value="0" id="BSHayat_9" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_2_2" min="0" max="1000" value="0" id="BSHayat_10" onkeyup="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_jumlah" min="0" max="1000" value="0" id="BSHayat_jumlah" readonly /></td>
</tr>
<script>

    function addBSHayat()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('BSHayat_' + i).value);
        }

        document.getElementById('BSHayat_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Banduan Seumur Hidup</td>
    <td><input class="form-control input-sm" type="number" name="1_1_3_1" min="0" max="1000" value="0" id="BSHidup_1" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_3_2" min="0" max="1000" value="0" id="BSHidup_2" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_3_1" min="0" max="1000" value="0" id="BSHidup_3" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_3_2" min="0" max="1000" value="0" id="BSHidup_4" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_3_1" min="0" max="1000" value="0" id="BSHidup_5" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_3_2" min="0" max="1000" value="0" id="BSHidup_6" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_3_1" min="0" max="1000" value="0" id="BSHidup_7" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_3_2" min="0" max="1000" value="0" id="BSHidup_8" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_3_1" min="0" max="1000" value="0" id="BSHidup_9" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_3_2" min="0" max="1000" value="0" id="BSHidup_10" onkeyup="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_jumlah" min="0" max="1000" value="0" id="BSHidup_jumlah" readonly /></td>
</tr>
<script>

    function addBSHidup()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('BSHidup_' + i).value);
        }

        document.getElementById('BSHidup_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Tahanan Limpah Sultan</td>
    <td><input class="form-control input-sm" type="number" name="1_1_4_1" min="0" max="1000" value="0" id="TLSultan_1" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_4_2" min="0" max="1000" value="0" id="TLSultan_2" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_4_1" min="0" max="1000" value="0" id="TLSultan_3" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_4_2" min="0" max="1000" value="0" id="TLSultan_4" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_4_1" min="0" max="1000" value="0" id="TLSultan_5" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_4_2" min="0" max="1000" value="0" id="TLSultan_6" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_4_1" min="0" max="1000" value="0" id="TLSultan_7" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_4_2" min="0" max="1000" value="0" id="TLSultan_8" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_4_1" min="0" max="1000" value="0" id="TLSultan_9" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_4_2" min="0" max="1000" value="0" id="TLSultan_10" onkeyup="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="4_jumlah" min="0" max="1000" value="0" id="TLSultan_jumlah" readonly /></td>
</tr>
<script>

    function addTLSultan()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TLSultan_' + i).value);
        }

        document.getElementById('TLSultan_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Hukuman Lama</td>
    <td><input class="form-control input-sm" type="number" name="1_1_5_1" min="0" max="1000" value="0" id="HLama_1" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_5_2" min="0" max="1000" value="0" id="HLama_2" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_5_1" min="0" max="1000" value="0" id="HLama_3" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_5_2" min="0" max="1000" value="0" id="HLama_4" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_5_1" min="0" max="1000" value="0" id="HLama_5" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_5_2" min="0" max="1000" value="0" id="HLama_6" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_5_1" min="0" max="1000" value="0" id="HLama_7" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_5_2" min="0" max="1000" value="0" id="HLama_8" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_5_1" min="0" max="1000" value="0" id="HLama_9" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_5_2" min="0" max="1000" value="0" id="HLama_10" onkeyup="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="5_jumlah" min="0" max="1000" value="0" id="HLama_jumlah" readonly /></td>
</tr>
<script>

    function addHLama()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('HLama_' + i).value);
        }

        document.getElementById('HLama_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Hukuman Singkat</td>
    <td><input class="form-control input-sm" type="number" name="1_1_6_1" min="0" max="1000" value="0" id="HSingkat_1" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_6_2" min="0" max="1000" value="0" id="HSingkat_2" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_6_1" min="0" max="1000" value="0" id="HSingkat_3" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_6_2" min="0" max="1000" value="0" id="HSingkat_4" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_6_1" min="0" max="1000" value="0" id="HSingkat_5" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_6_2" min="0" max="1000" value="0" id="HSingkat_6" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_6_1" min="0" max="1000" value="0" id="HSingkat_7" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_6_2" min="0" max="1000" value="0" id="HSingkat_8" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_6_1" min="0" max="1000" value="0" id="HSingkat_9" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_6_2" min="0" max="1000" value="0" id="HSingkat_10" onkeyup="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="6_jumlah" min="0" max="1000" value="0" id="HSingkat_jumlah" readonly /></td>
</tr>
<script>

    function addHSingkat()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('HSingkat_' + i).value);
        }

        document.getElementById('HSingkat_jumlah').value = parseInt(values);
    }

</script>