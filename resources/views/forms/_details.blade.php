<!-- ###################################  SABITAN ######################################### -->
@include('forms._details_sabitan')

<!-- ############################### BUKAN SABITAN ####################################### -->

@include('forms._details_bukansabitan')

<!-- ###################################  DADAH  ######################################### -->

<!-- kesalahan->id = 13 -->
@include('forms._details_dadah')

<!-- ###################################  MUDA  ######################################### -->

<!-- kesalahan->id = 14 -->
@include('forms._details_muda')



@if($cawangan == 'ALOR SETAR' || $cawangan == 'POKOK SENA')

    <!-- ###################################  PAROL  ######################################### -->

    <!-- kesalahan->id = 15 -->
    @include('forms._details_parol')


    <!-- ####################################  KEM  ########################################## -->

    <!-- kesalahan->id = 16 -->
    @include('forms._details_kem')

@endif





