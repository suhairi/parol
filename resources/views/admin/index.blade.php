@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-xs-2">&nbsp;</div>

        <div class="col-xs-8">

            <div align="center">
                <img src="{{ asset('images/crest.jpg') }}" width="100" height="100"> <br /><br />
                <h4>Laporan Statistik Harian</h4>
                <h4>Banduan / ODP / ODS Kem / PKW / Residen Rumah Perantaraan. </h4>
                <h4>PEJABAT PENGARAH PENJARA KEDAH</h4>

                <br />

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th width="50">BIL</th>
                        <th>INSTITUSI</th>
                        <th width="150"><div align="center">LELAKI</div></th>
                        <th width="150"><div align="center">WANITA</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td>PENJARA POKOK SENA</td>
                        <td><div align="center">{{ $pokokSena_L }}</div></td>
                        <td><div align="center">{{ $pokokSena_P }}</div></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>PENJARA ALOR SETAR</td>
                        <td><div align="center">{{ $alorSetar_L }}</div></td>
                        <td><div align="center">{{ $alorSetar_P }}</div></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>PENJARA SUNGAI PETANI</td>
                        <td><div align="center">{{ $sungaiPetani_L }}</div></td>
                        <td><div align="center">{{ $sungaiPetani_P }}</div></td>
                    </tr>

                    <tr>
                        <td>3.</td>
                        <td>PEJABAT PAROL</td>
                        <td><div align="center">{{ $parol_L }}</div></td>
                        <td><div align="center">{{ $parol_P }}</div></td>
                    </tr>


                    <tr>
                        <th colspan="2"><div align="right">JUMLAH</div></th>
                        <th><div align="center">{{ $pokokSena_L + $sungaiPetani_L + $alorSetar_L + $parol_L }}</div></th>
                        <th><div align="center">{{ $pokokSena_P + $sungaiPetani_P + $alorSetar_P + $parol_P }}</div></th>
                    </tr>
                    </tbody>
                </table>

                <br />

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th width="50">BIL</th>
                        <th>INSTITUSI</th>
                        <th width="150"><div align="center">LELAKI</div></th>
                        <th width="150"><div align="center">WANITA</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td>ODS PAROL</td>
                        <td><div align="center">{{ $pokokSena_L + $sungaiPetani_L + $alorSetar_L + $parol_L }}</div></td>
                        <td><div align="center">{{ $pokokSena_P + $sungaiPetani_P + $alorSetar_P + $parol_P }}</div></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>ODS KSAH</td>
                        <td><div align="center">{{ $kem_L }}</div></td>
                        <td><div align="center">{{ $kem_P }}</div></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>PKW</td>
                        <td><div align="center">{{ $pkw_L }}</div></td>
                        <td><div align="center">{{ $pkw_P }}</div></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Residen (RP)</td>
                        <td><div align="center">{{ $rp_L }}</div></td>
                        <td><div align="center">{{ $rp_P }}</div></td>
                    </tr>
                    <tr>
                        <th colspan="2"><div align="right">JUMLAH</div></th>
                        <th><div align="center">{{ $kem_L + $pkw_L + $rp_L }}</div></th>
                        <th><div align="center">{{ $kem_P + $pkw_P + $rp_P }}</div></th>
                    </tr>

                    </tbody>
                </table>
            </div>

            @include('admin.includes._controlButtons')

            {{--// hello world--}}

        </div>

        <script>

            $(document).ready(function() {

                var timeout = setTimeout(function() {
                    // The refresh is occurring here
                    window.location.href = "{{ route('admin.ringkasan1') }}";
                }, 10000);

                $('#pause').click(function(e) {
                    clearTimeout(timeout);
                    $('#pause').hide();
                });

                $('#next').click(function() {
                    window.location = "{{ route('admin.ringkasan1') }}";
                });

                $('#previous').click(function() {
                    window.location = "{{ route('admin.index') }}";
                });


            });
        </script>



    </div>


@stop