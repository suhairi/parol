@extends('layouts.members')

@section('content')

    <div class="row">

        @if($jumlah != 0)

            <div class="col-xs-12">
                <div align="right">
                    <i class="glyphicon glyphicon-print"></i>
                    <a href="{{ route('members.laporan.cetak', ['cawangan' => $cawangan]) }}" target="_blank">
                        Cetak
                        <br /><br/>
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead class="alert alert-info">
                    <tr>
                        <th colspan="14">Pergerakan Masuk - Sungai Petani Bagi Tahun {{ $year }}</th>
                    </tr>
                    <tr align="center">

                    </tr>
                    <tr>
                        <th><div align="center">Perkara</div></th>
                        <th><div align="center">Jan</div></th>
                        <th><div align="center">Feb</div></th>
                        <th><div align="center">Mac</div></th>
                        <th><div align="center">Apr</div></th>
                        <th><div align="center">Mei</div></th>
                        <th><div align="center">Jun</div></th>
                        <th><div align="center">Jul</div></th>
                        <th><div align="center">Ogos</div></th>
                        <th><div align="center">Sept</div></th>
                        <th><div align="center">Okt</div></th>
                        <th><div align="center">Nov</div></th>
                        <th><div align="center">Dis</div></th>
                        <th><div align="center">Jumlah</div></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $count = 0; ?>

                    @for($i = 1; $i <= 9; $i++)

                        @if($i == 1)
                            <?php $hukuman = 'Hukuman Mati'; ?>
                        @endif

                        @if($i == 2)
                            <?php $hukuman = 'Seumur Hayat'; ?>
                        @endif

                        @if($i == 3)
                            <?php $hukuman = 'Seumur Hidup'; ?>
                        @endif

                        @if($i == 4)
                            <?php $hukuman = 'Tahanan Limpah Sultan'; ?>
                        @endif

                        @if($i == 5)
                            <?php $hukuman = 'Hukuman Lama'; ?>
                        @endif

                        @if($i == 6)
                            <?php $hukuman = 'Hukuman Singkat'; ?>
                        @endif

                        @if($i == 7)
                            <?php $hukuman = 'Banduan Dagang'; ?>
                        @endif

                        @if($i == 8)
                            <?php $hukuman = 'Parol'; ?>
                        @endif

                        @if($i == 9)
                            <?php $hukuman = 'Tahanan Poca'; ?>
                        @endif

                        <tr>
                            <td><strong>{{ $hukuman }}</strong></td>
                            <?php $jumlah = 0; ?>
                            @for($j = 1; $j <= 12; $j++)
                                <td align="center">{{ $data[$count][$i . '_' . $j] }}</td>
                                <?php
                                $jumlah += $data[$count][$i . '_' . $j];
                                $count++;
                                ?>
                            @endfor
                            <td align="center"><strong>{{ $jumlah }}</strong></td>

                        </tr>


                    @endfor
                    </tbody>
                </table>
            </div>




        @else
            <div class="col-xs-8 danger">Tiada Data.</div>
        @endif
    </div>

@stop