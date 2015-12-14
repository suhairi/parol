@extends('layouts.members_cetak')

@section('content')

    <div class="row">

        @if($jumlah != 0)

            <div class="col-xs-12">
                <table class="table table-bordered">
                    <thead class="alert alert-info">
                    <tr>
                        <th colspan="14">Pergerakan Masuk - {{ ucwords(strtolower($cawangan)) }} Bagi Tahun {{ $year }}</th>
                    </tr>
                    <tr align="center">

                    </tr>
                    <tr>
                        <th><div align="center"><strong>Perkara</strong></div></th>
                        <th><div align="center"><strong>Jan</strong></div></th>
                        <th><div align="center"><strong>Feb</strong></div></th>
                        <th><div align="center"><strong>Mac</strong></div></th>
                        <th><div align="center"><strong>Apr</strong></div></th>
                        <th><div align="center"><strong>Mei</strong></div></th>
                        <th><div align="center"><strong>Jun</strong></div></th>
                        <th><div align="center"><strong>Jul</strong></div></th>
                        <th><div align="center"><strong>Ogos</strong></div></th>
                        <th><div align="center"><strong>Sept</strong></div></th>
                        <th><div align="center"><strong>Okt</strong></div></th>
                        <th><div align="center"><strong>Nov</strong></div></th>
                        <th><div align="center"><strong>Dis</strong></div></th>
                        <th><div align="center"><strong>Jumlah</strong></div></th>
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

    <script>

        $(document).ready(function () { window.print(); });

    </script>

@stop