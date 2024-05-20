<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use Illuminate\Contracts\Support\ValidatedData;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "E-ASKADUTA | Admin";
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        if ($start_date && $end_date) {
        $aspirasis = Aspirasi::whereDate('created_at', '>=', $start_date)
                            ->whereDate('created_at', '<=', $end_date)
                            ->paginate(20);
        } else {
            $aspirasis = Aspirasi::paginate(20);
        }

        return view('admin.admin', compact('title','aspirasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        return view('admin.showadmin', compact('title', 'aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Mengambil data aspirasi yang akan diedit
        $title = "E-ASKADUTA | Admin Edit";
        $aspirasi = Aspirasi::findOrFail($id);

        // Mengirim data aspirasi ke view untuk diedit
        return view('admin.edit', compact('title', 'aspirasi'));
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
        $validateData = $request->validate([
            'pihak' => 'required|max:50',
            'aspirasi' => 'required',
            'progres' => 'required',
            'keterangan' => 'required',
        ], [
            'pihak.required' => 'Pihak yang dituju harus diisi.',
            'aspirasi.required' => 'Kolom aspirasi harus diisi.',
        ]);

        // Membersihkan data dari HTML atau tag lainnya
        $cleanData = [
            'pihak' => strip_tags($validateData['pihak']),
            'aspirasi' => strip_tags($validateData['aspirasi']),
            'progres' => $validateData['progres'],
            'keterangan' => $validateData['keterangan'],
            'tanggapan' => "belum ditanggapi",
        ];

        // Ambil aspirasi berdasarkan ID
        $aspirasi = Aspirasi::findOrFail($id);

        // Memperbarui atribut-aspirasi
        $aspirasi->update($cleanData);

        return redirect('admin')->with('success', 'Aspirasi berhasil diperbarui.');
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
