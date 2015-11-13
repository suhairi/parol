<!-- ###################################  SABITAN ######################################### -->
@include('forms._details_sabitan_cetak')

<!-- ############################### BUKAN SABITAN ####################################### -->

@include('forms._details_bukansabitan_cetak')

{{--<!-- ###################################  DADAH  ######################################### -->--}}

{{--<!-- kesalahan->id = 13 -->--}}
@include('forms._details_dadah_cetak')

{{--<!-- ###################################  MUDA  ######################################### -->--}}

{{--<!-- kesalahan->id = 14 -->--}}
@include('forms._details_muda_cetak')



@if($cawangan == 'ALOR SETAR' || $cawangan == 'POKOK SENA')

    {{--<!-- ###################################  PAROL  ######################################### -->--}}

    {{--<!-- kesalahan->id = 15 -->--}}
    @include('forms._details_parol_cetak')


    {{--<!-- ####################################  KEM  ########################################## -->--}}

    {{--<!-- kesalahan->id = 16 -->--}}
    @include('forms._details_kem_cetak')

@endif





