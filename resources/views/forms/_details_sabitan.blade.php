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
    Dadah           -> 13
    Muda            -> 14
    Parol `         -> 15
    KEM             -> 16
    POCA            -> 17
Jantina
    Lelaki          -> 1
    Perempuan       -> 2


CONTOH
    Warganegara, Melayu, Banduan Akhir, Lelaki  = 1_1_1_1 <input name="1_1_1_1">
    Warganegara, India, HLama, Perempuan        = 1_3_5_2 <input name="1_3_5_2">


JUMLAH
    <input name="1_jumlah">
-->
@if(empty($datas))
<tr>
    <td rowspan="6">Sabitan</td>
    <td>Banduan Akhir</td>
    <td><input class="form-control input-sm" type="number" name="1_1_1_1" min="0" max="10000" value="0" id="BA_1" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_1_2" min="0" max="10000" value="0" id="BA_2" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_1_1" min="0" max="10000" value="0" id="BA_3" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_1_2" min="0" max="10000" value="0" id="BA_4" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_1_1" min="0" max="10000" value="0" id="BA_5" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_1_2" min="0" max="10000" value="0" id="BA_6" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_1_1" min="0" max="10000" value="0" id="BA_7" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_1_2" min="0" max="10000" value="0" id="BA_8" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_1_1" min="0" max="10000" value="0" id="BA_9" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_1_2" min="0" max="10000" value="0" id="BA_10" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_jumlah" min="0" max="10000" value="0" id="BA_jumlah" readonly /></td>
</tr>
<tr>
    <td>Banduan Seumur Hayat</td>
    <td><input class="form-control input-sm" type="number" name="1_1_2_1" min="0" max="10000" value="0" id="BSHayat_1" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_2_2" min="0" max="10000" value="0" id="BSHayat_2" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_2_1" min="0" max="10000" value="0" id="BSHayat_3" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_2_2" min="0" max="10000" value="0" id="BSHayat_4" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_2_1" min="0" max="10000" value="0" id="BSHayat_5" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_2_2" min="0" max="10000" value="0" id="BSHayat_6" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_2_1" min="0" max="10000" value="0" id="BSHayat_7" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_2_2" min="0" max="10000" value="0" id="BSHayat_8" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_2_1" min="0" max="10000" value="0" id="BSHayat_9" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_2_2" min="0" max="10000" value="0" id="BSHayat_10" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_jumlah" min="0" max="10000" value="0" id="BSHayat_jumlah" readonly /></td>
</tr>
<tr>
    <td>Banduan Seumur Hidup</td>
    <td><input class="form-control input-sm" type="number" name="1_1_3_1" min="0" max="10000" value="0" id="BSHidup_1" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_3_2" min="0" max="10000" value="0" id="BSHidup_2" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_3_1" min="0" max="10000" value="0" id="BSHidup_3" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_3_2" min="0" max="10000" value="0" id="BSHidup_4" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_3_1" min="0" max="10000" value="0" id="BSHidup_5" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_3_2" min="0" max="10000" value="0" id="BSHidup_6" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_3_1" min="0" max="10000" value="0" id="BSHidup_7" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_3_2" min="0" max="10000" value="0" id="BSHidup_8" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_3_1" min="0" max="10000" value="0" id="BSHidup_9" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_3_2" min="0" max="10000" value="0" id="BSHidup_10" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_jumlah" min="0" max="10000" value="0" id="BSHidup_jumlah" readonly /></td>
</tr>
<tr>
    <td>Tahanan Limpah Sultan</td>
    <td><input class="form-control input-sm" type="number" name="1_1_4_1" min="0" max="10000" value="0" id="TLSultan_1" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_4_2" min="0" max="10000" value="0" id="TLSultan_2" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_4_1" min="0" max="10000" value="0" id="TLSultan_3" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_4_2" min="0" max="10000" value="0" id="TLSultan_4" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_4_1" min="0" max="10000" value="0" id="TLSultan_5" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_4_2" min="0" max="10000" value="0" id="TLSultan_6" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_4_1" min="0" max="10000" value="0" id="TLSultan_7" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_4_2" min="0" max="10000" value="0" id="TLSultan_8" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_4_1" min="0" max="10000" value="0" id="TLSultan_9" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_4_2" min="0" max="10000" value="0" id="TLSultan_10" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
    <td><input class="form-control input-sm" type="number" name="4_jumlah" min="0" max="10000" value="0" id="TLSultan_jumlah" readonly /></td>
</tr>
<tr>
    <td>Hukuman Lama</td>
    <td><input class="form-control input-sm" type="number" name="1_1_5_1" min="0" max="10000" value="0" id="HLama_1" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_5_2" min="0" max="10000" value="0" id="HLama_2" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_5_1" min="0" max="10000" value="0" id="HLama_3" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_5_2" min="0" max="10000" value="0" id="HLama_4" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_5_1" min="0" max="10000" value="0" id="HLama_5" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_5_2" min="0" max="10000" value="0" id="HLama_6" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_5_1" min="0" max="10000" value="0" id="HLama_7" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_5_2" min="0" max="10000" value="0" id="HLama_8" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_5_1" min="0" max="10000" value="0" id="HLama_9" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_5_2" min="0" max="10000" value="0" id="HLama_10" onkeyup="addHLama()" onchange="addHLama()" /></td>
    <td><input class="form-control input-sm" type="number" name="5_jumlah" min="0" max="10000" value="0" id="HLama_jumlah" readonly /></td>
</tr>
<tr>
    <td>Hukuman Singkat</td>
    <td><input class="form-control input-sm" type="number" name="1_1_6_1" min="0" max="10000" value="0" id="HSingkat_1" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_6_2" min="0" max="10000" value="0" id="HSingkat_2" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_6_1" min="0" max="10000" value="0" id="HSingkat_3" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_6_2" min="0" max="10000" value="0" id="HSingkat_4" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_6_1" min="0" max="10000" value="0" id="HSingkat_5" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_6_2" min="0" max="10000" value="0" id="HSingkat_6" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_6_1" min="0" max="10000" value="0" id="HSingkat_7" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_6_2" min="0" max="10000" value="0" id="HSingkat_8" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_6_1" min="0" max="10000" value="0" id="HSingkat_9" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_6_2" min="0" max="10000" value="0" id="HSingkat_10" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
    <td><input class="form-control input-sm" type="number" name="6_jumlah" min="0" max="10000" value="0" id="HSingkat_jumlah" readonly /></td>
</tr>

@endif

@if(!empty($datas))
    <tr>
        <td rowspan="6">Sabitan</td>
        <td>Banduan Akhir</td>
        <td><input class="form-control input-sm" type="number" name="1_1_1_1" min="0" max="10000" value="{{ $datas[0]['1_1_1_1'] }}" id="BA_1" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_1_2" min="0" max="10000" value="{{ $datas[3]['1_1_1_2'] }}" id="BA_2" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_1_1" min="0" max="10000" value="{{ $datas[1]['1_2_1_1'] }}" id="BA_3" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_1_2" min="0" max="10000" value="{{ $datas[4]['1_2_1_2'] }}" id="BA_4" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_1_1" min="0" max="10000" value="{{ $datas[2]['1_3_1_1'] }}" id="BA_5" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_1_2" min="0" max="10000" value="{{ $datas[5]['1_3_1_2'] }}" id="BA_6" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_1_1" min="0" max="10000" value="{{ $datas[6]['2_4_1_1'] }}" id="BA_7" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_1_2" min="0" max="10000" value="{{ $datas[7]['2_4_1_2'] }}" id="BA_8" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_1_1" min="0" max="10000" value="{{ $datas[8]['3_4_1_1'] }}" id="BA_9" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_1_2" min="0" max="10000" value="{{ $datas[9]['3_4_1_2'] }}" id="BA_10" onkeyup="addBAkhir()" onchange="addBAkhir()" /></td>
        <?php $jumlah = $datas[0]['1_1_1_1'] + $datas[3]['1_1_1_2'] + $datas[1]['1_2_1_1'] + $datas[4]['1_2_1_2'] + $datas[2]['1_3_1_1']
                + $datas[5]['1_3_1_2'] + $datas[6]['2_4_1_1'] + $datas[7]['2_4_1_2'] + $datas[8]['3_4_1_1'] + $datas[9]['3_4_1_2']; ?>
        <td><input class="form-control input-sm" type="number" name="1_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="BA_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Banduan Seumur Hayat</td>
        <td><input class="form-control input-sm" type="number" name="1_1_2_1" min="0" max="10000" value="{{ $datas[10]['1_1_2_1'] }}" id="BSHayat_1" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_2_2" min="0" max="10000" value="{{ $datas[13]['1_1_2_2'] }}" id="BSHayat_2" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_2_1" min="0" max="10000" value="{{ $datas[11]['1_2_2_1'] }}" id="BSHayat_3" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_2_2" min="0" max="10000" value="{{ $datas[14]['1_2_2_2'] }}" id="BSHayat_4" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_2_1" min="0" max="10000" value="{{ $datas[12]['1_3_2_1'] }}" id="BSHayat_5" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_2_2" min="0" max="10000" value="{{ $datas[15]['1_3_2_2'] }}" id="BSHayat_6" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_2_1" min="0" max="10000" value="{{ $datas[16]['2_4_2_1'] }}" id="BSHayat_7" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_2_2" min="0" max="10000" value="{{ $datas[17]['2_4_2_2'] }}" id="BSHayat_8" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_2_1" min="0" max="10000" value="{{ $datas[18]['3_4_2_1'] }}" id="BSHayat_9" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_2_2" min="0" max="10000" value="{{ $datas[19]['3_4_2_2'] }}" id="BSHayat_10" onkeyup="addBSHayat()" onchange="addBSHayat()" /></td>
        <?php $jumlah = $datas[10]['1_1_2_1'] + $datas[13]['1_1_2_2'] + $datas[11]['1_2_2_1'] + $datas[14]['1_2_2_2'] + $datas[12]['1_3_2_1']
                + $datas[15]['1_3_2_2'] + $datas[16]['2_4_2_1'] + $datas[17]['2_4_2_2'] + $datas[18]['3_4_2_1'] + $datas[19]['3_4_2_2']; ?>
        <td><input class="form-control input-sm" type="number" name="2_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="BSHayat_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Banduan Seumur Hidup</td>
        <td><input class="form-control input-sm" type="number" name="1_1_3_1" min="0" max="10000" value="{{ $datas[20]['1_1_3_1'] }}" id="BSHidup_1" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_3_2" min="0" max="10000" value="{{ $datas[23]['1_1_3_2'] }}" id="BSHidup_2" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_3_1" min="0" max="10000" value="{{ $datas[21]['1_2_3_1'] }}" id="BSHidup_3" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_3_2" min="0" max="10000" value="{{ $datas[24]['1_2_3_2'] }}" id="BSHidup_4" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_3_1" min="0" max="10000" value="{{ $datas[22]['1_3_3_1'] }}" id="BSHidup_5" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_3_2" min="0" max="10000" value="{{ $datas[25]['1_3_3_2'] }}" id="BSHidup_6" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_3_1" min="0" max="10000" value="{{ $datas[26]['2_4_3_1'] }}" id="BSHidup_7" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_3_2" min="0" max="10000" value="{{ $datas[27]['2_4_3_2'] }}" id="BSHidup_8" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_3_1" min="0" max="10000" value="{{ $datas[28]['3_4_3_1'] }}" id="BSHidup_9" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_3_2" min="0" max="10000" value="{{ $datas[29]['3_4_3_2'] }}" id="BSHidup_10" onkeyup="addBSHidup()" onchange="addBSHidup()" /></td>
        <?php $jumlah = $datas[20]['1_1_3_1'] + $datas[23]['1_1_3_2'] + $datas[21]['1_2_3_1'] + $datas[24]['1_2_3_2'] + $datas[22]['1_3_3_1']
                + $datas[25]['1_3_3_2'] + $datas[26]['2_4_3_1'] + $datas[27]['2_4_3_2'] + $datas[28]['3_4_3_1'] + $datas[29]['3_4_3_2']; ?>
        <td><input class="form-control input-sm" type="number" name="3_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="BSHidup_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Tahanan Limpah Sultan</td>
        <td><input class="form-control input-sm" type="number" name="1_1_4_1" min="0" max="10000" value="{{ $datas[30]['1_1_4_1'] }}" id="TLSultan_1" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_4_2" min="0" max="10000" value="{{ $datas[33]['1_1_4_2'] }}" id="TLSultan_2" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_4_1" min="0" max="10000" value="{{ $datas[31]['1_2_4_1'] }}" id="TLSultan_3" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_4_2" min="0" max="10000" value="{{ $datas[34]['1_2_4_2'] }}" id="TLSultan_4" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_4_1" min="0" max="10000" value="{{ $datas[32]['1_3_4_1'] }}" id="TLSultan_5" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_4_2" min="0" max="10000" value="{{ $datas[35]['1_3_4_2'] }}" id="TLSultan_6" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_4_1" min="0" max="10000" value="{{ $datas[36]['2_4_4_1'] }}" id="TLSultan_7" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_4_2" min="0" max="10000" value="{{ $datas[37]['2_4_4_2'] }}" id="TLSultan_8" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_4_1" min="0" max="10000" value="{{ $datas[38]['3_4_4_1'] }}" id="TLSultan_9" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_4_2" min="0" max="10000" value="{{ $datas[39]['3_4_4_2'] }}" id="TLSultan_10" onkeyup="addTLSultan()" onchange="addTLSultan()" /></td>
        <?php $jumlah = $datas[30]['1_1_4_1'] + $datas[33]['1_1_4_2'] + $datas[31]['1_2_4_1'] + $datas[34]['1_2_4_2'] + $datas[32]['1_3_4_1']
                + $datas[35]['1_3_4_2'] + $datas[36]['2_4_4_1'] + $datas[37]['2_4_4_2'] + $datas[38]['3_4_4_1'] + $datas[39]['3_4_4_2']; ?>
        <td><input class="form-control input-sm" type="number" name="4_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="TLSultan_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Hukuman Lama</td>
        <td><input class="form-control input-sm" type="number" name="1_1_5_1" min="0" max="10000" value="{{ $datas[40]['1_1_5_1'] }}" id="HLama_1" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_5_2" min="0" max="10000" value="{{ $datas[43]['1_1_5_2'] }}" id="HLama_2" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_5_1" min="0" max="10000" value="{{ $datas[41]['1_2_5_1'] }}" id="HLama_3" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_5_2" min="0" max="10000" value="{{ $datas[44]['1_2_5_2'] }}" id="HLama_4" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_5_1" min="0" max="10000" value="{{ $datas[42]['1_3_5_1'] }}" id="HLama_5" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_5_2" min="0" max="10000" value="{{ $datas[45]['1_3_5_2'] }}" id="HLama_6" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_5_1" min="0" max="10000" value="{{ $datas[46]['2_4_5_1'] }}" id="HLama_7" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_5_2" min="0" max="10000" value="{{ $datas[47]['2_4_5_2'] }}" id="HLama_8" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_5_1" min="0" max="10000" value="{{ $datas[48]['3_4_5_1'] }}" id="HLama_9" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_5_2" min="0" max="10000" value="{{ $datas[49]['3_4_5_2'] }}" id="HLama_10" onkeyup="addHLama()" onchange="addHLama()" /></td>
        <?php $jumlah = $datas[40]['1_1_5_1'] + $datas[43]['1_1_5_2'] + $datas[41]['1_2_5_1'] + $datas[44]['1_2_5_2'] + $datas[42]['1_3_5_1']
                + $datas[45]['1_3_5_2'] + $datas[46]['2_4_5_1'] + $datas[47]['2_4_5_2'] + $datas[48]['3_4_5_1'] + $datas[49]['3_4_5_2']; ?>
        <td><input class="form-control input-sm" type="number" name="5_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="HLama_jumlah" readonly /></td>
    </tr>
    <tr>
        <td>Hukuman Singkat</td>
        <td><input class="form-control input-sm" type="number" name="1_1_6_1" min="0" max="10000" value="{{ $datas[50]['1_1_6_1'] }}" id="HSingkat_1" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_6_2" min="0" max="10000" value="{{ $datas[53]['1_1_6_2'] }}" id="HSingkat_2" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_6_1" min="0" max="10000" value="{{ $datas[51]['1_2_6_1'] }}" id="HSingkat_3" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_6_2" min="0" max="10000" value="{{ $datas[54]['1_2_6_2'] }}" id="HSingkat_4" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_6_1" min="0" max="10000" value="{{ $datas[52]['1_3_6_1'] }}" id="HSingkat_5" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_6_2" min="0" max="10000" value="{{ $datas[55]['1_3_6_2'] }}" id="HSingkat_6" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_6_1" min="0" max="10000" value="{{ $datas[56]['2_4_6_1'] }}" id="HSingkat_7" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_6_2" min="0" max="10000" value="{{ $datas[57]['2_4_6_2'] }}" id="HSingkat_8" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_6_1" min="0" max="10000" value="{{ $datas[58]['3_4_6_1'] }}" id="HSingkat_9" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_6_2" min="0" max="10000" value="{{ $datas[59]['3_4_6_2'] }}" id="HSingkat_10" onkeyup="addHSingkat()" onchange="addHSingkat()" /></td>
        <?php $jumlah = $datas[50]['1_1_6_1'] + $datas[53]['1_1_6_2'] + $datas[51]['1_2_6_1'] + $datas[54]['1_2_6_2'] + $datas[52]['1_3_6_1']
                + $datas[55]['1_3_6_2'] + $datas[56]['2_4_6_1'] + $datas[57]['2_4_6_2'] + $datas[58]['3_4_6_1'] + $datas[59]['3_4_6_2']; ?>
        <td><input class="form-control input-sm" type="number" name="6_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="HSingkat_jumlah" readonly /></td>
    </tr>

    
@endif

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

    function addBSHayat()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('BSHayat_' + i).value);
        }

        document.getElementById('BSHayat_jumlah').value = parseInt(values);
    }

    function addBSHidup()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('BSHidup_' + i).value);
        }

        document.getElementById('BSHidup_jumlah').value = parseInt(values);
    }

    function addTLSultan()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('TLSultan_' + i).value);
        }

        document.getElementById('TLSultan_jumlah').value = parseInt(values);
    }

    function addHLama()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('HLama_' + i).value);
        }

        document.getElementById('HLama_jumlah').value = parseInt(values);
    }

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