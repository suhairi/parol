<?php

namespace App\Http\Controllers\Admin;

use App\Details;
use App\Keluarmasuk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecordsController extends Controller
{
    public function index()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);

        $pokokSena_L = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 2)
            ->where('jantina_id', 1)
            ->sum('jumlah');

        $pokokSena_P = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 2)
            ->where('jantina_id', 2)
            ->sum('jumlah');

        $alorSetar_L = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 1)
            ->where('jantina_id', 1)
            ->sum('jumlah');

        $alorSetar_P = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 1)
            ->where('jantina_id', 2)
            ->sum('jumlah');


        $sungaiPetani_L = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 3)
            ->where('jantina_id', 1)
            ->sum('jumlah');

        $sungaiPetani_P = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 3)
            ->where('jantina_id', 2)
            ->sum('jumlah');


        $parol_L = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 4)
            ->where('jantina_id', 1)
            ->sum('jumlah');

        $parol_P = Details::where('tarikh', $tarikh)
            ->where('cawangan_id', 4)
            ->where('jantina_id', 2)
            ->sum('jumlah');


        $kem_L = Details::where('tarikh', $tarikh)
            ->where('jantina_id', 1)
            ->where('kesalahan_id', 22)
            ->sum('jumlah');

        $kem_P = Details::where('tarikh', $tarikh)
            ->where('jantina_id', 2)
            ->where('kesalahan_id', 22)
            ->sum('jumlah');

        $pkw_L = Details::where('tarikh', $tarikh)
            ->where('jantina_id', 1)
            ->where('kesalahan_id', 23)
            ->sum('jumlah');

        $pkw_P = Details::where('tarikh', $tarikh)
            ->where('jantina_id', 2)
            ->where('kesalahan_id', 23)
            ->sum('jumlah');

        $rp_L = Details::where('tarikh', $tarikh)
            ->where('jantina_id', 1)
            ->where('kesalahan_id', 21)
            ->sum('jumlah');

        $rp_P = Details::where('tarikh', $tarikh)
            ->where('jantina_id', 2)
            ->where('kesalahan_id', 21)
            ->sum('jumlah');



        return View('admin.index',
            compact('data', 'pokokSena_L', 'pokokSena_P',
                'alorSetar_L', 'alorSetar_P',
                'sungaiPetani_L', 'sungaiPetani_P',
                'parol_L', 'parol_P',
                'kem_L', 'kem_P',
                'pkw_L', 'pkw_P',
                'rp_L', 'rp_P'
            )
        );
    }

    public function ringkasan1()
    {
        $year = Carbon::now()->format('Y');
        $data = [];

        for($i = 1; $i <= 9; $i++)
        {

            for ($j = 1; $j <= 12; $j++) {
                $detail = Keluarmasuk::where('tarikh', 'like', $year . '-' . $j . '-%')
                    ->where('kesalahan', $i)
                    ->sum('jumlah');

                array_push($data, [$i . '_' . $j => $detail]);
            }
        }

        $jumlah = 1;

//        dd($data);

        return View('admin.ringkasan.ringkasan1', compact('data', 'jumlah'));
    }
    public function ringkasan2()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);

        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

        return View('admin.ringkasan.ringkasan2', compact('data', 'jumlah'));
    }

    public function ringkasan3()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);


        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

        $jumlahAlorSetar = $data[0]['jumlah'] + $data[1]['jumlah'];
        $jumlahPokokSena = $data[2]['jumlah'] + $data[3]['jumlah'];
        $jumlahSungaiPetani = $data[4]['jumlah'] + $data[5]['jumlah'];
        $jumlahParol = $data[6]['jumlah'] + $data[7]['jumlah'];

        $peratusAlorSetar = number_format(($jumlahAlorSetar / $jumlah * 100), 2);
        $peratusPokokSena = number_format(($jumlahPokokSena / $jumlah * 100), 2);
        $peratusSungaiPetani = number_format(($jumlahSungaiPetani / $jumlah * 100), 2);
        $peratusParol = number_format(($jumlahParol / $jumlah * 100), 2);

        $charts['chart'] = [
            'plotBackgroundColor' => null,
            'plotBorderWidth' => null,
            'plotShadow' => false,
            'type' => 'pie'
        ];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['tooltip'] = ['pointFormat' => '{series.name}: <b>{point.percentage:.1f}%</b>'];
        $charts['credits'] = false;
        $charts['plotOptions'] = [
            'pie' => [
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels' => ['enabled' => true, 'format' => '<b>{point.name}</b>: {point.percentage:.1f} %'],
                'showInLegend' => true
            ],
        ];
        $charts['series'] = [[
            'name' => 'Bilangan',
            'colorByPoint' => true,
            'data' => [
                [
                    'name' => 'Alor Setar',
                    'y' => (int)$peratusAlorSetar,
                    'sliced' => true,
                    'selected' => true
                ],
                [
                    'name' => 'Pokok Sena',
                    'y' => (int)$peratusPokokSena
                ],
                [
                    'name' => 'Sungai Petani',
                    'y' => (int)$peratusSungaiPetani
                ],
                [
                    'name' => 'Parol',
                    'y' => (int)$peratusParol
                ]

            ]
        ]];
        // hello world--}}

        return View('admin.ringkasan.ringkasan3', compact('data', 'charts', 'jumlah'));
    }

    public function ringkasan4()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);

        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Alor Setar', 'Pokok Sena', 'Sungai Petani', 'Parol'],
            'title' => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min' => 0,
            'title' => [
                'text' => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout' => 'horizontal',
            'align' => 'right',
            'verticalAlign' => 'top',
            'x' => -70,
            'y' => 30,
            'floating' => true,
            'borderWidth' => 1,
            'backgroundColor' => '#FFFFFF',
            'shadow' => true
        ];
        $charts['credits'] = ['enabled' => false];
        $charts['series'] = [
            [
                'name' => 'PEREMPUAN',
                'data' => [(int)$data[1]['jumlah'], (int)$data[3]['jumlah'], (int)$data[5]['jumlah'], (int)$data[6]['jumlah']]
            ],
            [
                'name' => 'LELAKI',
                'data' => [(int)$data[0]['jumlah'], (int)$data[2]['jumlah'], (int)$data[4]['jumlah'], (int)$data[7]['jumlah']]
            ]
        ];


        return View('admin.ringkasan.ringkasan4', compact('data', 'charts', 'jumlah'));
    }

    public function ringkasan5()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // ALOR SETAR
        $data = $this->getRingkasan4($tarikh, 1);

        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India', 'Bukan Warga', 'Lain-lain'],
            'title' => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min' => 0,
            'title' => [
                'text' => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout' => 'horizontal',
            'align' => 'right',
            'verticalAlign' => 'top',
            'x' => -70,
            'y' => 20,
            'floating' => true,
            'borderWidth' => 1,
            'backgroundColor' => '#FFFFFF',
            'shadow' => true
        ];
        $charts['credits'] = ['enabled' => false];
        $charts['series'] = [
            [
                'name' => 'PEREMPUAN',
                'data' => [
                    (int)$data[1]['jumlah'],
                    (int)$data[3]['jumlah'],
                    (int)$data[5]['jumlah'],
                    (int)$data[7]['jumlah'],
                    (int)$data[9]['jumlah']
                ]
            ],
            [
                'name' => 'LELAKI',
                'data' => [
                    (int)$data[0]['jumlah'],
                    (int)$data[2]['jumlah'],
                    (int)$data[4]['jumlah'],
                    (int)$data[6]['jumlah'],
                    (int)$data[8]['jumlah']
                ]
            ]
        ];

//        dd($data[4]['jumlah']);


        return View('admin.ringkasan.ringkasan5', compact('data', 'charts', 'jumlah'));

    }

    public function ringkasan6()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // POKOK SENA
        $data = $this->getRingkasan4($tarikh, 2);
        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India', 'Bukan Warga', 'Lain-lain'],
            'title' => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min' => 0,
            'title' => [
                'text' => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout' => 'horizontal',
            'align' => 'right',
            'verticalAlign' => 'top',
            'x' => -70,
            'y' => 20,
            'floating' => true,
            'borderWidth' => 1,
            'backgroundColor' => '#FFFFFF',
            'shadow' => true
        ];
        $charts['credits'] = ['enabled' => false];
        $charts['series'] = [
            [
                'name' => 'PEREMPUAN',
                'data' => [
                    (int)$data[1]['jumlah'],
                    (int)$data[3]['jumlah'],
                    (int)$data[5]['jumlah'],
                    (int)$data[7]['jumlah'],
                    (int)$data[9]['jumlah']
                ]
            ],
            [
                'name' => 'LELAKI',
                'data' => [
                    (int)$data[0]['jumlah'],
                    (int)$data[2]['jumlah'],
                    (int)$data[4]['jumlah'],
                    (int)$data[6]['jumlah'],
                    (int)$data[8]['jumlah']
                ]
            ]
        ];

//        dd($data[4]['jumlah']);


        return View('admin.ringkasan.ringkasan6', compact('data', 'charts', 'jumlah'));

    }

    public function ringkasan7()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // POKOK SENA
        $data = $this->getRingkasan4($tarikh, 3);
        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India', 'Bukan Warga', 'Lain-lain'],
            'title' => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min' => 0,
            'title' => [
                'text' => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout' => 'horizontal',
            'align' => 'right',
            'verticalAlign' => 'top',
            'x' => -70,
            'y' => 20,
            'floating' => true,
            'borderWidth' => 1,
            'backgroundColor' => '#FFFFFF',
            'shadow' => true
        ];
        $charts['credits'] = ['enabled' => false];
        $charts['series'] = [
            [
                'name' => 'PEREMPUAN',
                'data' => [
                    (int)$data[1]['jumlah'],
                    (int)$data[3]['jumlah'],
                    (int)$data[5]['jumlah'],
                    (int)$data[7]['jumlah'],
                    (int)$data[9]['jumlah']
                ]
            ],
            [
                'name' => 'LELAKI',
                'data' => [
                    (int)$data[0]['jumlah'],
                    (int)$data[2]['jumlah'],
                    (int)$data[4]['jumlah'],
                    (int)$data[6]['jumlah'],
                    (int)$data[8]['jumlah']
                ]
            ]
        ];

//        dd($data[4]['jumlah']);


        return View('admin.ringkasan.ringkasan7', compact('data', 'charts', 'jumlah'));

    }

    public function ringkasan8()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // POKOK SENA
        $data = $this->getRingkasan4($tarikh, 4);
        $jumlah = 0;
        for ($i = 0; $i <= 7; $i++) {
            $jumlah += (int)$data[$i]['jumlah'];
        }

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India'],
            'title' => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min' => 0,
            'title' => [
                'text' => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout' => 'horizontal',
            'align' => 'right',
            'verticalAlign' => 'top',
            'x' => -70,
            'y' => 20,
            'floating' => true,
            'borderWidth' => 1,
            'backgroundColor' => '#FFFFFF',
            'shadow' => true
        ];
        $charts['credits'] = ['enabled' => false];
        $charts['series'] = [
            [
                'name' => 'PEREMPUAN',
                'data' => [
                    (int)$data[1]['jumlah'],
                    (int)$data[3]['jumlah'],
                    (int)$data[5]['jumlah']
                ]
            ],
            [
                'name' => 'LELAKI',
                'data' => [
                    (int)$data[0]['jumlah'],
                    (int)$data[2]['jumlah'],
                    (int)$data[4]['jumlah']
                ]
            ]
        ];

//        dd($data[4]['jumlah']);


        return View('admin.ringkasan.ringkasan8', compact('data', 'charts', 'jumlah'));

    }

    protected function getData($date)
    {
        $tarikh = $date;
        $data = [];

        // ALOR SETAR - Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 1)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'ALOR SETAR', 'Jantina' => 'LELAKI', 'jumlah' => $count]);

        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 1)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'ALOR SETAR', 'Jantina' => 'PEREMPUAN', 'jumlah' => $count]);

        // POKOK SENA - Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 2)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'ALOR SETAR', 'Jantina' => 'LELAKI', 'jumlah' => $count]);

        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 2)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'ALOR SETAR', 'Jantina' => 'PEREMPUAN', 'jumlah' => $count]);

        // SUNGAI PETANI - Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 3)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'ALOR SETAR', 'Jantina' => 'LELAKI', 'jumlah' => $count]);

        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 3)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'ALOR SETAR', 'Jantina' => 'PEREMPUAN', 'jumlah' => $count]);

        // PAROL - Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 4)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'PAROL', 'Jantina' => 'LELAKI', 'jumlah' => $count]);

        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', 4)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['tarikh' => $tarikh, 'Cawangan' => 'PAROL', 'Jantina' => 'PEREMPUAN', 'jumlah' => $count]);


        return $data;
    }

    protected function getRingkasan4($date, $cawangan)
    {
        $tarikh = $date;
        $data = [];

        // ALOR SETAR -  Melayu Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('bangsa_id', 1)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // Melayu - Perempuan
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('bangsa_id', 1)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // ALOR SETAR -  Cina Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('bangsa_id', 2)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // Cina - Perempuan
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('bangsa_id', 2)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // ALOR SETAR -  India Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('bangsa_id', 3)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // India - Perempuan
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('bangsa_id', 3)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // B. Warga Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('warganegara_id', 2)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // B. Warga Perempuan
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('warganegara_id', 2)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // Lain-lain Lelaki
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('warganegara_id', 3)
            ->where('jantina_id', 1)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        // Lain-lain Perempuan
        $count = Details::where('tarikh', 'like', $tarikh . '%')
            ->where('cawangan_id', $cawangan)
            ->where('warganegara_id', 3)
            ->where('jantina_id', 2)
            ->sum('jumlah');
        array_push($data, ['jumlah' => $count]);

        return $data;
    }

}
       