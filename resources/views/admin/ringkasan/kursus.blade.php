@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-xs-12">



                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Senarai Kursus Bulan Ini</h4></div>
                    <div class="panel-body">

                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nama Kursus</th>
                                <th>Tarikh</th>
                                <th>Lokasi</th>
                                <th><div align="center">Tempoh (hari)</div></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($courses as $course)
                                <tr>
                                    <td>{{ $course->nama }}</td>
                                    <td>{{ $course->tarikh->format('d-m-Y') }}</td>
                                    <td>{{ $course->lokasi->nama }}</td>
                                    <td align="center">{{ $course->tempoh }}</td>
                                </tr>

                            @empty
                                <tr>
                                    <th class="danger" colspan="4">Tiada Data.</th>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>



        </div>




        @include('admin.includes._controlButtons')
    </div>

    <script>

        $(document).ready(function() {

            var timeout = setTimeout(function() {
                // The refresh is occurring here
                window.location.href = "{{ route('admin.ringkasan1_1') }}";
            }, 10000);

            $('#pause').click(function(e) {
                clearTimeout(timeout);
                $('#pause').hide();
            });

            $('#next').click(function() {
                window.location = "{{ route('admin.ringkasan1_1') }}";
            });

            $('#previous').click(function() {
                window.location = "{{ route('admin.index') }}";
            });


        });
    </script>



@stop