<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\getData;
use Illuminate\Support\Facades\DB;

class loController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userData = getData::select(DB::raw("COUNT(fs_kd_reg) as count"))
            ->whereYear('fd_tgl_masuk', date('Y'))
            ->groupBy(DB::raw("Month(fd_tgl_masuk)"))
            ->pluck('count');

        // $bulan = getData::select(DB::raw("month(fd_tgl_jam_masuk) as month"))
        //     ->whereYear('fd_tgl_jam_masuk', date('Y'))
        //     ->groupBy(DB::raw("Month(fd_tgl_jam_masuk)"))
        //     ->pluck('month');
        // dd($userData);
        return view('pages.index', ['userData' => $userData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
