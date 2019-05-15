<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Performance;
use DataTables;
use Carbon\Carbon;

class PerformanceController extends Controller
{
    public function index(Request $request)
    {
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');

        $performances = Performance::select([
            'id',
            'target_time',
            'work_time',
            'achievement',
            'overtime',
            'created_at'
        ]);
        if (!empty($start_date) && !empty($end_date)) {
            $performances->whereBetween('created_at', [$start_date, $end_date]);
        }

        return Datatables::of($performances)
            ->editColumn('created_at', function ($data) {
                return $data->created_at
                    ? with(new Carbon($data->created_at))->format('d')
                    : '';
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(created_at,'%d') like ?", [
                    "%$keyword%"
                ]);
            })
            ->make(true);
    }

    public function monthly(Request $request)
    {
        $performances = Performance::select([
            'id',
            'target_time',
            'work_time',
            'achievement',
            'overtime',
            'created_at'
        ])->whereMonth('created_at', Carbon::now()->month);

        return Datatables::of($performances)
            ->editColumn('created_at', function ($data) {
                return $data->created_at
                    ? with(new Carbon($data->created_at))->format('d')
                    : '';
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(created_at,'%d') like ?", [
                    "%$keyword%"
                ]);
            })
            ->make(true);
    }
}
