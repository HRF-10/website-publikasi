<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "E-ASKADUTA | Aspirasi Saya";

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        if ($start_date && $end_date) {
        $aspirasis = Aspirasi::where('user_id', auth()->user()->id)
                            ->whereDate('created_at', '>=', $start_date)
                            ->whereDate('created_at', '<=', $end_date)
                            ->paginate(10);
        } else {
            $aspirasis = Aspirasi::where('user_id', auth()->user()->id)->paginate(10);
        }

        return view('admin.aspirasi', compact('title','aspirasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data dari form
        $validateData = $request->validate([
            'pihak' => 'required|max:50',
            'aspirasi' => 'required',
        ], [
            'pihak.required' => 'Pihak yang dituju harus diisi.',
            'aspirasi.required' => 'Kolom aspirasi harus diisi.'
        ]);

        // Menambahkan user_id ke data yang divalidasi
        $validateData['user_id'] = auth()->user()->id;

        // Membersihkan input dari tag HTML yang tidak diinginkan
        $cleanData = [
            'pihak' => strip_tags($validateData['pihak']),
            'aspirasi' => strip_tags($validateData['aspirasi']),
            'user_id' => $validateData['user_id'],
        ];

        // Tambahkan nilai default untuk progres, keterangan, dan tanggapan
        $cleanData['progres'] = "aspirasi anda sedang ditampung";
        $cleanData['keterangan'] = "tidak ada";
        $cleanData['tanggapan'] = "belum ditanggapi";

        // Membuat entri baru dalam basis data
        Aspirasi::create($cleanData);

        // Redirect dengan pesan sukses
        return redirect('/formasi')->with('success', 'Aspirasi Anda berhasil dikirimkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "E-ASKADUTA | Aspirasi Saya";
        $aspirasi = Aspirasi::find($id);

        return view('admin.show', compact('title', 'aspirasi'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
