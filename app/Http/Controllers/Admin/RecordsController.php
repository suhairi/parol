<?php

namespace App\Http\Controllers\Admin;

use App\Details;
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

        return View('admin.index', compact('data'));
    }

    public function ringkasan2()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);

        return View('admin.ringkasan.ringkasan2', compact('data'));
    }

    public function ringkasan3()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);

        $charts['chart']    = [
            'plotBackgroundColor' => null,
            'plotBorderWidth'     => null,
            'plotShadow'          => false,
            'type'                => 'pie'
        ];
        $charts['title']        = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['tooltip']      = ['pointFormat' => '{series.name}: <b>{point.y} </b>'];
        $charts['credits']       = false;
        $charts['plotOptions']  = [
            'pie' => [
                    'allowPointSelect' => true,
                    'cursor' => 'pointer',
                    'dataLabels' => ['enabled' => true],
                    'showInLegend' => false
            ],
        ];
        $charts['series'] = [[
            'name'          => 'Bilangan',
            'colorByPoint'  => true,
            'data'          => [
                [
                    'name'  => 'Alor Setar',
                    'y'     => $data[0]['jumlah'] + $data[1]['jumlah'],
                    'sliced' => true,
                    'selected' => true
                ],
                [
                    'name'  => 'Pokok Sena',
                    'y'     => $data[2]['jumlah'] + $data[3]['jumlah']
                ],
                [
                    'name'  => 'Sungai Petani',
                    'y'     => $data[4]['jumlah'] + $data[5]['jumlah']
                ]
            ]
        ]];

        return View('admin.ringkasan.ringkasan3', compact('data', 'charts'));
    }

    public function ringkasan4()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        $data = $this->getData($tarikh);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Alor Setar', 'Pokok Sena', 'Sungai Petani'],
            'title'     => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min'   => 0,
            'title' => [
                'text'  => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout'        => 'horizontal',
            'align'         => 'right',
            'verticalAlign' => 'top',
            'x'             => -70,
            'y'             => 30,
            'floating'      => true,
            'borderWidth'   => 1,
            'backgroundColor'=> '#FFFFFF',
            'shadow'        => true
        ];
        $charts['credits'] = ['enabled' => false];
        $charts['series'] = [
            [
                'name' => 'PEREMPUAN',
                'data' => [(int)$data[1]['jumlah'], (int)$data[3]['jumlah'], (int)$data[5]['jumlah']]
            ],
            [
                'name' => 'LELAKI',
                'data' => [(int)$data[0]['jumlah'], (int)$data[2]['jumlah'], (int)$data[4]['jumlah']]
            ]
        ];


        return View('admin.ringkasan.ringkasan4', compact('data', 'charts'));
    }

    public function ringkasan5()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // ALOR SETAR
        $data = $this->getRingkasan4($tarikh, 1);

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India', 'Bukan Warga', 'Lain-lain'],
            'title'     => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min'   => 0,
            'title' => [
                'text'  => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout'        => 'horizontal',
            'align'         => 'right',
            'verticalAlign' => 'top',
            'x'             => -70,
            'y'             => 20,
            'floating'      => true,
            'borderWidth'   => 1,
            'backgroundColor'=> '#FFFFFF',
            'shadow'        => true
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


        return View('admin.ringkasan.ringkasan5', compact('data', 'charts'));

    }

    public function ringkasan6()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // POKOK SENA
        $data = $this->getRingkasan4($tarikh, 2);

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India', 'Bukan Warga', 'Lain-lain'],
            'title'     => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min'   => 0,
            'title' => [
                'text'  => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout'        => 'horizontal',
            'align'         => 'right',
            'verticalAlign' => 'top',
            'x'             => -70,
            'y'             => 20,
            'floating'      => true,
            'borderWidth'   => 1,
            'backgroundColor'=> '#FFFFFF',
            'shadow'        => true
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


        return View('admin.ringkasan.ringkasan6', compact('data', 'charts'));

    }

    public function ringkasan7()
    {
        $tarikh = Carbon::now()->format('Y-m-d');

        // POKOK SENA
        $data = $this->getRingkasan4($tarikh, 3);

//        dd($data);

        $charts['chart'] = ['type' => 'bar'];
        $charts['title'] = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['xAxis'] = [
            'categories' => ['Melayu', 'Cina', 'India', 'Bukan Warga', 'Lain-lain'],
            'title'     => ['text' => null]
        ];
        $charts['yAxis'] = [
            'min'   => 0,
            'title' => [
                'text'  => 'Bilangan',
                'align' => 'high'
            ],
            'labels' => ['overflow' => 'justify']
        ];
        $charts['plotOptions'] = [
            'bar' => ['dataLabels' => ['enabled' => true]]
        ];
        $charts['legend'] = [
            'layout'        => 'horizontal',
            'align'         => 'right',
            'verticalAlign' => 'top',
            'x'             => -70,
            'y'             => 20,
            'floating'      => true,
            'borderWidth'   => 1,
            'backgroundColor'=> '#FFFFFF',
            'shadow'        => true
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


        return View('admin.ringkasan.ringkasan7', compact('data', 'charts'));

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