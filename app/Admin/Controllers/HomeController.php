<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('精思數位戰情中心')
//            ->description('Description...')
            ->body(function (Row $row) {
                $row->column(6, function (Column $column) {
//                    $column->row(Dashboard::title());
                    $column->row(new Examples\Tickets());
                    $column->row(new Examples\ProductOrders());
                });

                $row->column(6, function (Column $column) {
                    $column->row(function (Row $row) {
                        $row->column(12, new Examples\NewUsers());
//                        $row->column(6, new Examples\NewDevices());
                    });

                    $column->row(new Examples\Sessions());
                });
            });
    }
}
