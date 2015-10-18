<tr>
    <td rowspan="6">Bukan Sabitan</td>
    <td>Tahanan Mahkamah Tinggi</td>
    <td><input class="form-control input-sm" type="number" name="1_1_7_1" min="0" max="1000" value="0" id="TMTinggi_1" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_7_2" min="0" max="1000" value="0" id="TMTinggi_2" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_7_1" min="0" max="1000" value="0" id="TMTinggi_3" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_7_2" min="0" max="1000" value="0" id="TMTinggi_4" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_7_1" min="0" max="1000" value="0" id="TMTinggi_5" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_7_2" min="0" max="1000" value="0" id="TMTinggi_6" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_7_1" min="0" max="1000" value="0" id="TMTinggi_7" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_7_2" min="0" max="1000" value="0" id="TMTinggi_8" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_7_1" min="0" max="1000" value="0" id="TMTinggi_9" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_7_2" min="0" max="1000" value="0" id="TMTinggi_10" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
    <td><input class="form-control input-sm" type="number" name="7_jumlah" min="0" max="1000" value="0" id="TMTinggi_jumlah" readonly /></td>
</tr>
<script>

    function addTMTinggi()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMTinggi_' + i).value);
        }

        document.getElementById('TMTinggi_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Tahanan Mahkamah Sesyen</td>
    <td><input class="form-control input-sm" type="number" name="1_1_8_1" min="0" max="1000" value="0" id="TMSesyen_1" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_8_2" min="0" max="1000" value="0" id="TMSesyen_2" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_8_1" min="0" max="1000" value="0" id="TMSesyen_3" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_8_2" min="0" max="1000" value="0" id="TMSesyen_4" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_8_1" min="0" max="1000" value="0" id="TMSesyen_5" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_8_2" min="0" max="1000" value="0" id="TMSesyen_6" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_8_1" min="0" max="1000" value="0" id="TMSesyen_7" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_8_2" min="0" max="1000" value="0" id="TMSesyen_8" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_8_1" min="0" max="1000" value="0" id="TMSesyen_9" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_8_2" min="0" max="1000" value="0" id="TMSesyen_10" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
    <td><input class="form-control input-sm" type="number" name="8_jumlah" min="0" max="1000" value="0" id="TMSesyen_jumlah" readonly /></td>
</tr>
<script>

    function addTMSesyen()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMSesyen_' + i).value);
        }

        document.getElementById('TMSesyen_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Tahanan Mahkamah Rendah</td>
    <td><input class="form-control input-sm" type="number" name="1_1_9_1" min="0" max="1000" value="0" id="TMRendah_1" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_9_2" min="0" max="1000" value="0" id="TMRendah_2" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_9_1" min="0" max="1000" value="0" id="TMRendah_3" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_9_2" min="0" max="1000" value="0" id="TMRendah_4" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_9_1" min="0" max="1000" value="0" id="TMRendah_5" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_9_2" min="0" max="1000" value="0" id="TMRendah_6" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_9_1" min="0" max="1000" value="0" id="TMRendah_7" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_9_2" min="0" max="1000" value="0" id="TMRendah_8" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_9_1" min="0" max="1000" value="0" id="TMRendah_9" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_9_2" min="0" max="1000" value="0" id="TMRendah_10" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
    <td><input class="form-control input-sm" type="number" name="9_jumlah" min="0" max="1000" value="0" id="TMRendah_jumlah" readonly /></td>
</tr>
<script>

    function addTMRendah()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMRendah_' + i).value);
        }

        document.getElementById('TMRendah_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Tahanan Mahkamah Rayuan</td>
    <td><input class="form-control input-sm" type="number" name="1_1_10_1" min="0" max="1000" value="0" id="TMRayuan_1" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_10_2" min="0" max="1000" value="0" id="TMRayuan_2" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_10_1" min="0" max="1000" value="0" id="TMRayuan_3" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_10_2" min="0" max="1000" value="0" id="TMRayuan_4" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_10_1" min="0" max="1000" value="0" id="TMRayuan_5" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_10_2" min="0" max="1000" value="0" id="TMRayuan_6" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_10_1" min="0" max="1000" value="0" id="TMRayuan_7" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_10_2" min="0" max="1000" value="0" id="TMRayuan_8" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_10_1" min="0" max="1000" value="0" id="TMRayuan_9" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_10_2" min="0" max="1000" value="0" id="TMRayuan_10" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
    <td><input class="form-control input-sm" type="number" name="10_jumlah" min="0" max="1000" value="0" id="TMRayuan_jumlah" readonly /></td>
</tr>
<script>

    function addTMRayuan()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMRayuan_' + i).value);
        }

        document.getElementById('TMRayuan_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Tahanan Mahkamah R/S</td>
    <td><input class="form-control input-sm" type="number" name="1_1_11_1" min="0" max="1000" value="0" id="TMRS_1" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_11_2" min="0" max="1000" value="0" id="TMRS_2" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_11_1" min="0" max="1000" value="0" id="TMRS_3" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_11_2" min="0" max="1000" value="0" id="TMRS_4" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_11_1" min="0" max="1000" value="0" id="TMRS_5" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_11_2" min="0" max="1000" value="0" id="TMRS_6" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_11_1" min="0" max="1000" value="0" id="TMRS_7" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_11_2" min="0" max="1000" value="0" id="TMRS_8" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_11_1" min="0" max="1000" value="0" id="TMRS_9" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_11_2" min="0" max="1000" value="0" id="TMRS_10" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
    <td><input class="form-control input-sm" type="number" name="11_jumlah" min="0" max="1000" value="0" id="TMRS_jumlah" readonly /></td>
</tr>
<script>

    function addTMRS()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMRS_' + i).value);
        }

        document.getElementById('TMRS_jumlah').value = parseInt(values);
    }

</script>
<tr>
    <td>Banduan Dagang</td>
    <td><input class="form-control input-sm" type="number" name="1_1_12_1" min="0" max="1000" value="0" id="BDagang_1" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_12_2" min="0" max="1000" value="0" id="BDagang_2" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_12_1" min="0" max="1000" value="0" id="BDagang_3" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_12_2" min="0" max="1000" value="0" id="BDagang_4" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_12_1" min="0" max="1000" value="0" id="BDagang_5" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_12_2" min="0" max="1000" value="0" id="BDagang_6" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_12_1" min="0" max="1000" value="0" id="BDagang_7" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_12_2" min="0" max="1000" value="0" id="BDagang_8" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_12_1" min="0" max="1000" value="0" id="BDagang_9" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_12_2" min="0" max="1000" value="0" id="BDagang_10" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
    <td><input class="form-control input-sm" type="number" name="12_jumlah" min="0" max="1000" value="0" id="BDagang_jumlah" readonly /></td>
</tr>
<script>

    function addBDagang()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('BDagang_' + i).value);
        }

        document.getElementById('BDagang_jumlah').value = parseInt(values);
    }

</script>
