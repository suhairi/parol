@if(empty($datas))
    <tr>
        <td rowspan="6">Bukan Sabitan</td>
        <td>Tahanan Mahkamah Tinggi</td>
        <td><input class="form-control input-sm" type="number" name="1_1_7_1" min="0" max="10000" value="0" id="TMTinggi_1" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_7_2" min="0" max="10000" value="0" id="TMTinggi_2" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_7_1" min="0" max="10000" value="0" id="TMTinggi_3" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_7_2" min="0" max="10000" value="0" id="TMTinggi_4" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_7_1" min="0" max="10000" value="0" id="TMTinggi_5" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_7_2" min="0" max="10000" value="0" id="TMTinggi_6" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_7_1" min="0" max="10000" value="0" id="TMTinggi_7" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_7_2" min="0" max="10000" value="0" id="TMTinggi_8" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_7_1" min="0" max="10000" value="0" id="TMTinggi_9" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_7_2" min="0" max="10000" value="0" id="TMTinggi_10" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="7_jumlah" min="0" max="10000" value="0" id="TMTinggi_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah Sesyen</td>
        <td><input class="form-control input-sm" type="number" name="1_1_8_1" min="0" max="10000" value="0" id="TMSesyen_1" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_8_2" min="0" max="10000" value="0" id="TMSesyen_2" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_8_1" min="0" max="10000" value="0" id="TMSesyen_3" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_8_2" min="0" max="10000" value="0" id="TMSesyen_4" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_8_1" min="0" max="10000" value="0" id="TMSesyen_5" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_8_2" min="0" max="10000" value="0" id="TMSesyen_6" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_8_1" min="0" max="10000" value="0" id="TMSesyen_7" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_8_2" min="0" max="10000" value="0" id="TMSesyen_8" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_8_1" min="0" max="10000" value="0" id="TMSesyen_9" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_8_2" min="0" max="10000" value="0" id="TMSesyen_10" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="8_jumlah" min="0" max="10000" value="0" id="TMSesyen_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah Rendah</td>
        <td><input class="form-control input-sm" type="number" name="1_1_9_1" min="0" max="10000" value="0" id="TMRendah_1" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_9_2" min="0" max="10000" value="0" id="TMRendah_2" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_9_1" min="0" max="10000" value="0" id="TMRendah_3" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_9_2" min="0" max="10000" value="0" id="TMRendah_4" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_9_1" min="0" max="10000" value="0" id="TMRendah_5" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_9_2" min="0" max="10000" value="0" id="TMRendah_6" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_9_1" min="0" max="10000" value="0" id="TMRendah_7" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_9_2" min="0" max="10000" value="0" id="TMRendah_8" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_9_1" min="0" max="10000" value="0" id="TMRendah_9" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_9_2" min="0" max="10000" value="0" id="TMRendah_10" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="9_jumlah" min="0" max="10000" value="0" id="TMRendah_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah Rayuan</td>
        <td><input class="form-control input-sm" type="number" name="1_1_10_1" min="0" max="10000" value="0" id="TMRayuan_1" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_10_2" min="0" max="10000" value="0" id="TMRayuan_2" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_10_1" min="0" max="10000" value="0" id="TMRayuan_3" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_10_2" min="0" max="10000" value="0" id="TMRayuan_4" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_10_1" min="0" max="10000" value="0" id="TMRayuan_5" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_10_2" min="0" max="10000" value="0" id="TMRayuan_6" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_10_1" min="0" max="10000" value="0" id="TMRayuan_7" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_10_2" min="0" max="10000" value="0" id="TMRayuan_8" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_10_1" min="0" max="10000" value="0" id="TMRayuan_9" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_10_2" min="0" max="10000" value="0" id="TMRayuan_10" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="10_jumlah" min="0" max="10000" value="0" id="TMRayuan_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah R/S</td>
        <td><input class="form-control input-sm" type="number" name="1_1_11_1" min="0" max="10000" value="0" id="TMRS_1" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_11_2" min="0" max="10000" value="0" id="TMRS_2" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_11_1" min="0" max="10000" value="0" id="TMRS_3" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_11_2" min="0" max="10000" value="0" id="TMRS_4" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_11_1" min="0" max="10000" value="0" id="TMRS_5" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_11_2" min="0" max="10000" value="0" id="TMRS_6" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_11_1" min="0" max="10000" value="0" id="TMRS_7" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_11_2" min="0" max="10000" value="0" id="TMRS_8" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_11_1" min="0" max="10000" value="0" id="TMRS_9" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_11_2" min="0" max="10000" value="0" id="TMRS_10" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="11_jumlah" min="0" max="10000" value="0" id="TMRS_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Banduan Dagang</td>
        <td><input class="form-control input-sm" type="number" name="1_1_12_1" min="0" max="10000" value="0" id="BDagang_1" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_12_2" min="0" max="10000" value="0" id="BDagang_2" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_12_1" min="0" max="10000" value="0" id="BDagang_3" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_12_2" min="0" max="10000" value="0" id="BDagang_4" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_12_1" min="0" max="10000" value="0" id="BDagang_5" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_12_2" min="0" max="10000" value="0" id="BDagang_6" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_12_1" min="0" max="10000" value="0" id="BDagang_7" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_12_2" min="0" max="10000" value="0" id="BDagang_8" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_12_1" min="0" max="10000" value="0" id="BDagang_9" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_12_2" min="0" max="10000" value="0" id="BDagang_10" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="12_jumlah" min="0" max="10000" value="0" id="BDagang_jumlah" readonly /></td>
    </tr>

@endif


@if(!empty($datas))
    <tr>
        <td rowspan="6">Bukan Sabitan</td>
        <td>Tahanan Mahkamah Tinggi</td>
        <td><input class="form-control input-sm" type="number" name="1_1_7_1" min="0" max="10000" value="{{ $datas[60]['1_1_7_1'] }}" id="TMTinggi_1" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_7_2" min="0" max="10000" value="{{ $datas[63]['1_1_7_2'] }}" id="TMTinggi_2" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_7_1" min="0" max="10000" value="{{ $datas[61]['1_2_7_1'] }}" id="TMTinggi_3" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_7_2" min="0" max="10000" value="{{ $datas[64]['1_2_7_2'] }}" id="TMTinggi_4" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_7_1" min="0" max="10000" value="{{ $datas[62]['1_3_7_1'] }}" id="TMTinggi_5" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_7_2" min="0" max="10000" value="{{ $datas[65]['1_3_7_2'] }}" id="TMTinggi_6" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_7_1" min="0" max="10000" value="{{ $datas[66]['2_4_7_1'] }}" id="TMTinggi_7" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_7_2" min="0" max="10000" value="{{ $datas[67]['2_4_7_2'] }}" id="TMTinggi_8" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_7_1" min="0" max="10000" value="{{ $datas[68]['3_4_7_1'] }}" id="TMTinggi_9" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_7_2" min="0" max="10000" value="{{ $datas[69]['3_4_7_2'] }}" id="TMTinggi_10" onkeyup="addTMTinggi()" onchange="addTMTinggi()" /></td>
        <?php $jumlah = $datas[60]['1_1_7_1'] + $datas[63]['1_1_7_2'] + $datas[61]['1_2_7_1'] + $datas[64]['1_2_7_2'] + $datas[62]['1_3_7_1']
                + $datas[65]['1_3_7_2'] + $datas[66]['2_4_7_1'] + $datas[67]['2_4_7_2'] + $datas[68]['3_4_7_1'] + $datas[69]['3_4_7_2']; ?>
        <td><input class="form-control input-sm" type="number" name="7_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="TMTinggi_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah Sesyen</td>
        <td><input class="form-control input-sm" type="number" name="1_1_8_1" min="0" max="10000" value="{{ $datas[70]['1_1_8_1'] }}" id="TMSesyen_1" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_8_2" min="0" max="10000" value="{{ $datas[73]['1_1_8_2'] }}" id="TMSesyen_2" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_8_1" min="0" max="10000" value="{{ $datas[71]['1_2_8_1'] }}" id="TMSesyen_3" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_8_2" min="0" max="10000" value="{{ $datas[74]['1_2_8_2'] }}" id="TMSesyen_4" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_8_1" min="0" max="10000" value="{{ $datas[72]['1_3_8_1'] }}" id="TMSesyen_5" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_8_2" min="0" max="10000" value="{{ $datas[75]['1_3_8_2'] }}" id="TMSesyen_6" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_8_1" min="0" max="10000" value="{{ $datas[76]['2_4_8_1'] }}" id="TMSesyen_7" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_8_2" min="0" max="10000" value="{{ $datas[77]['2_4_8_2'] }}" id="TMSesyen_8" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_8_1" min="0" max="10000" value="{{ $datas[78]['3_4_8_1'] }}" id="TMSesyen_9" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_8_2" min="0" max="10000" value="{{ $datas[79]['3_4_8_2'] }}" id="TMSesyen_10" onkeyup="addTMSesyen()" onchange="addTMSesyen()" /></td>
        <?php $jumlah = $datas[70]['1_1_8_1'] + $datas[73]['1_1_8_2'] + $datas[71]['1_2_8_1'] + $datas[74]['1_2_8_2'] + $datas[72]['1_3_8_1']
                + $datas[75]['1_3_8_2'] + $datas[76]['2_4_8_1'] + $datas[77]['2_4_8_2'] + $datas[78]['3_4_8_1'] + $datas[79]['3_4_8_2']; ?>
        <td><input class="form-control input-sm" type="number" name="8_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="TMSesyen_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah Rendah</td>
        <td><input class="form-control input-sm" type="number" name="1_1_9_1" min="0" max="10000" value="{{ $datas[80]['1_1_9_1'] }}" id="TMRendah_1" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_9_2" min="0" max="10000" value="{{ $datas[83]['1_1_9_2'] }}" id="TMRendah_2" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_9_1" min="0" max="10000" value="{{ $datas[81]['1_2_9_1'] }}" id="TMRendah_3" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_9_2" min="0" max="10000" value="{{ $datas[84]['1_2_9_2'] }}" id="TMRendah_4" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_9_1" min="0" max="10000" value="{{ $datas[82]['1_3_9_1'] }}" id="TMRendah_5" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_9_2" min="0" max="10000" value="{{ $datas[85]['1_3_9_2'] }}" id="TMRendah_6" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_9_1" min="0" max="10000" value="{{ $datas[86]['2_4_9_1'] }}" id="TMRendah_7" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_9_2" min="0" max="10000" value="{{ $datas[87]['2_4_9_2'] }}" id="TMRendah_8" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_9_1" min="0" max="10000" value="{{ $datas[88]['3_4_9_1'] }}" id="TMRendah_9" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_9_2" min="0" max="10000" value="{{ $datas[89]['3_4_9_2'] }}" id="TMRendah_10" onkeyup="addTMRendah()" onchange="addTMRendah()" /></td>
        <?php $jumlah = $datas[80]['1_1_9_1'] + $datas[83]['1_1_9_2'] + $datas[81]['1_2_9_1'] + $datas[84]['1_2_9_2'] + $datas[82]['1_3_9_1']
                + $datas[85]['1_3_9_2'] + $datas[86]['2_4_9_1'] + $datas[87]['2_4_9_2'] + $datas[88]['3_4_9_1'] + $datas[89]['3_4_9_2']; ?>
        <td><input class="form-control input-sm" type="number" name="9_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="TMRendah_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah Rayuan</td>
        <td><input class="form-control input-sm" type="number" name="1_1_10_1" min="0" max="10000" value="{{ $datas[90]['1_1_10_1'] }}" id="TMRayuan_1" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_10_2" min="0" max="10000" value="{{ $datas[93]['1_1_10_2'] }}" id="TMRayuan_2" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_10_1" min="0" max="10000" value="{{ $datas[91]['1_2_10_1'] }}" id="TMRayuan_3" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_10_2" min="0" max="10000" value="{{ $datas[94]['1_2_10_2'] }}" id="TMRayuan_4" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_10_1" min="0" max="10000" value="{{ $datas[92]['1_3_10_1'] }}" id="TMRayuan_5" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_10_2" min="0" max="10000" value="{{ $datas[95]['1_3_10_2'] }}" id="TMRayuan_6" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_10_1" min="0" max="10000" value="{{ $datas[96]['2_4_10_1'] }}" id="TMRayuan_7" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_10_2" min="0" max="10000" value="{{ $datas[97]['2_4_10_2'] }}" id="TMRayuan_8" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_10_1" min="0" max="10000" value="{{ $datas[98]['3_4_10_1'] }}" id="TMRayuan_9" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_10_2" min="0" max="10000" value="{{ $datas[99]['3_4_10_2'] }}" id="TMRayuan_10" onkeyup="addTMRayuan()" onchange="addTMRayuan()" /></td>
        <?php $jumlah = $datas[90]['1_1_10_1'] + $datas[93]['1_1_10_2'] + $datas[91]['1_2_10_1'] + $datas[94]['1_2_10_2'] + $datas[92]['1_3_10_1']
                + $datas[95]['1_3_10_2'] + $datas[96]['2_4_10_1'] + $datas[97]['2_4_10_2'] + $datas[98]['3_4_10_1'] + $datas[99]['3_4_10_2']; ?>
        <td><input class="form-control input-sm" type="number" name="10_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="TMRayuan_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Mahkamah R/S</td>
        <td><input class="form-control input-sm" type="number" name="1_1_11_1" min="0" max="10000" value="{{ $datas[100]['1_1_11_1'] }}" id="TMRS_1" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_11_2" min="0" max="10000" value="{{ $datas[103]['1_1_11_2'] }}" id="TMRS_2" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_11_1" min="0" max="10000" value="{{ $datas[101]['1_2_11_1'] }}" id="TMRS_3" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_11_2" min="0" max="10000" value="{{ $datas[104]['1_2_11_2'] }}" id="TMRS_4" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_11_1" min="0" max="10000" value="{{ $datas[102]['1_3_11_1'] }}" id="TMRS_5" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_11_2" min="0" max="10000" value="{{ $datas[105]['1_3_11_2'] }}" id="TMRS_6" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_11_1" min="0" max="10000" value="{{ $datas[106]['2_4_11_1'] }}" id="TMRS_7" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_11_2" min="0" max="10000" value="{{ $datas[107]['2_4_11_2'] }}" id="TMRS_8" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_11_1" min="0" max="10000" value="{{ $datas[108]['3_4_11_1'] }}" id="TMRS_9" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_11_2" min="0" max="10000" value="{{ $datas[109]['3_4_11_2'] }}" id="TMRS_10" onkeyup="addTMRS()" onchange="addTMRS()" /></td>
        <?php $jumlah = $datas[100]['1_1_11_1'] + $datas[103]['1_1_11_2'] + $datas[101]['1_2_11_1'] + $datas[104]['1_2_11_2'] + $datas[102]['1_3_11_1']
                + $datas[105]['1_3_11_2'] + $datas[106]['2_4_11_1'] + $datas[107]['2_4_11_2'] + $datas[108]['3_4_11_1'] + $datas[109]['3_4_11_2']; ?>
        <td><input class="form-control input-sm" type="number" name="11_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="TMRS_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Banduan Dagang</td>
        <td><input class="form-control input-sm" type="number" name="1_1_12_1" min="0" max="10000" value="{{ $datas[110]['1_1_12_1'] }}" id="BDagang_1" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_12_2" min="0" max="10000" value="{{ $datas[113]['1_1_12_2'] }}" id="BDagang_2" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_12_1" min="0" max="10000" value="{{ $datas[111]['1_2_12_1'] }}" id="BDagang_3" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_12_2" min="0" max="10000" value="{{ $datas[114]['1_2_12_2'] }}" id="BDagang_4" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_12_1" min="0" max="10000" value="{{ $datas[112]['1_3_12_1'] }}" id="BDagang_5" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_12_2" min="0" max="10000" value="{{ $datas[115]['1_3_12_2'] }}" id="BDagang_6" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_12_1" min="0" max="10000" value="{{ $datas[116]['2_4_12_1'] }}" id="BDagang_7" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_12_2" min="0" max="10000" value="{{ $datas[117]['2_4_12_2'] }}" id="BDagang_8" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_12_1" min="0" max="10000" value="{{ $datas[118]['3_4_12_1'] }}" id="BDagang_9" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_12_2" min="0" max="10000" value="{{ $datas[119]['3_4_12_2'] }}" id="BDagang_10" onkeyup="addBDagang()" onchange="addBDagang()" /></td>
        <?php $jumlah = $datas[110]['1_1_12_1'] + $datas[113]['1_1_12_2'] + $datas[111]['1_2_12_1'] + $datas[114]['1_2_12_2'] + $datas[112]['1_3_12_1']
                + $datas[115]['1_3_12_2'] + $datas[116]['2_4_12_1'] + $datas[117]['2_4_12_2'] + $datas[118]['3_4_12_1'] + $datas[119]['3_4_12_2']; ?>
        <td><input class="form-control input-sm" type="number" name="12_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="BDagang_jumlah" readonly /></td>
    </tr>

@endif























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

    function addTMSesyen()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMSesyen_' + i).value);
        }

        document.getElementById('TMSesyen_jumlah').value = parseInt(values);
    }

    function addTMRendah()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMRendah_' + i).value);
        }

        document.getElementById('TMRendah_jumlah').value = parseInt(values);
    }

    function addTMRayuan()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMRayuan_' + i).value);
        }

        document.getElementById('TMRayuan_jumlah').value = parseInt(values);
    }

    function addTMRS()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TMRS_' + i).value);
        }

        document.getElementById('TMRS_jumlah').value = parseInt(values);
    }



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