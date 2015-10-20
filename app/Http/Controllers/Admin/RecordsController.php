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

        $charts['chart']    = [
            'plotBackgroundColor' => null,
            'plotBorderWidth'     => null,
            'plotShadow'          => false,
            'type'                => 'pie'
        ];
        $charts['title']        = ['text' => 'Bilangan Banduan / Tahanan'];
        $charts['tooltip']      = ['pointFormat' => '{series.name}: <b>{series.data.y}</b>'];
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

        return View('admin.ringkasan.ringkasan2', compact('data', 'charts'));
    }

    public function ringkasan3()
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


        return View('admin.ringkasan.ringkasan3', compact('data', 'charts'));
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


}