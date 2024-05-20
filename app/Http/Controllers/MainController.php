<?php

namespace App\Http\Controllers;

use App\Models\DawsWpsData;
use App\Models\eForasiData;
use App\Models\Respon;
use App\Models\wks1Data;
use App\Models\wks2Data;
use App\Models\wks3Data;
use App\Models\wks4Data;
use App\Models\wks5Data;
use App\Models\ktuData;
use App\Models\bendaharaData;
use App\Models\mpkData;
use App\Models\spmiData;
use App\Models\bkkData;
use App\Models\ITData;
use App\Models\osisData;
use App\Models\ekskulData;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function about()
    {
        $title = "E-ASKADUTA | Tentang Kami"; // Tentukan judul halaman

        $abouts = DB::connection('mysql')->table('abouts')->get();
        $showBody = true;
        $showExcerpt = false;

        return view('tentang', compact('title', 'abouts', 'showBody', 'showExcerpt'));
    }

    public function respon2023()
    {
        $respons = Respon::where('tahun', 2023)->latest();

        if(request('search')){
            $respons->where(function($query) {
                $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%'); 
            });
        }

        $respons = $respons->paginate(6);

        $title = "E-ASKADUTA | Respon Aspirasi 2023";
        $abouts = DB::connection('mysql')->table('abouts')->get();

        return view('respon.respon2023', compact('title', 'respons', 'abouts'));
    }

    public function respon2024()
    {
        $respons = Respon::whereIn('title', ['FORASI', 'e-FORASI'])->latest()->paginate(6);

        $title = "E-ASKADUTA | Respon Aspirasi 2024";
        $abouts = DB::connection('mysql')->table('abouts')->get();

        return view('respon.respon2024', compact('title', 'respons', 'abouts'));
    }

    public function kurikulum2023()
    {
        $title = "E-ASKADUTA | Respon WKS 1";
        $respons = Respon::all();
        $wks1_data = wks1Data::all();
        
        return view('respon.kurikulum2023', compact('title', 'respons', 'wks1_data'));
    }

    public function kesiswaan2023()
    {
        $title = "E-ASKADUTA | Respon WKS 2";
        $respons = Respon::all();
        $wks2_data = wks2Data::all();
        
        return view('respon.kesiswaan2023', compact('title', 'respons', 'wks2_data'));
    }

    public function sarpras2023()
    {
        $title = "E-ASKADUTA | Respon WKS 3";
        $respons = Respon::all();
        $wks3_data = wks3Data::all();
        
        return view('respon.sarpras2023', compact('title', 'respons', 'wks3_data'));
    }

    public function humas2023()
    {
        $title = "E-ASKADUTA | Respon WKS 4";
        $respons = Respon::all();
        $wks4_data = wks4Data::all();
        
        return view('respon.humas2023', compact('title', 'respons', 'wks4_data'));
    }

    public function ktu2023()
    {
        $title = "E-ASKADUTA | Respon KTU";
        $respons = Respon::all();
        $ktu_data = ktuData::all();
        
        return view('respon.ktu2023', compact('title', 'respons', 'ktu_data'));
    }

    public function bendahara2023()
    {
        $title = "E-ASKADUTA | Respon Bendahara Sekolah";
        $respons = Respon::all();
        $bendahara_data = bendaharaData::all();
        
        return view('respon.bendahara2023', compact('title', 'respons', 'bendahara_data'));
    }

    public function it2023()
    {
        $title = "E-ASKADUTA | Respon Tim IT";
        $respons = Respon::all();
        $it_data = ITData::all();
        
        return view('respon.timIT2023', compact('title', 'respons', 'it_data'));
    }

    public function osis2023()
    {
        $title = "E-ASKADUTA | Respon OSIS";
        $respons = Respon::all();
        $osis_data = osisData::all();
        
        return view('respon.osis2023', compact('title', 'respons', 'osis_data'));
    }

    public function pmr2023()
    {
        $title = "E-ASKADUTA | Respon PMR";
        $respons = Respon::all();
        $ekskul_data = ekskulData::all();
        
        return view('respon.pmr2023', compact('title', 'respons', 'ekskul_data'));
    }

    public function detailRespon($id)
    {
        if ($id == 1) {
            return redirect()->route('kurikulum2023');
        } elseif ($id == 2) {
            return redirect()->route('kesiswaan2023');
        } elseif ($id == 3) {
            return redirect()->route('sarpras2023');
        } elseif ($id == 4) {
            return redirect()->route('humas2023');
        } elseif ($id == 5) {
            return redirect()->route('bendahara2023');
        } elseif ($id == 6) {
            return redirect()->route('ktu2023');
        } elseif ($id == 8) {
            return redirect()->route('timIT2023');
        } elseif ($id == 11) {
            return redirect()->route('osis2023');
        } elseif ($id == 12) {
            return redirect()->route('pmr2023');
        } elseif ($id == 13) {
            return redirect()->route('forasi');
        } elseif ($id == 19) {
            return redirect()->route('eforasi');
        }
    }

    public function forasi()
    {
        $title = "E-ASKADUTA | FORASI";
        $respons = Respon::all();
        $wks1_data = wks1Data::all();
        $wks2_data = wks2Data::all();
        $wks3_data = wks3Data::all();
        $wks4_data = wks4Data::all();
        $wks5_data = wks5Data::all();
        $ktu_data = ktuData::all();
        $spmi_data = spmiData::all();
        $bkk_data = bkkData::all();
        $mpk_data = mpkData::all();
        $osis_data = osisData::all();
        $dawswps_data = DawsWpsData::all();
        $ekskul_data = ekskulData::all();
        
        return view('respon.forasi', compact('title', 'respons', 'wks1_data', 'wks2_data', 'wks3_data', 'wks4_data', 'wks5_data',
    'ktu_data', 'spmi_data', 'bkk_data', 'mpk_data', 'osis_data', 'dawswps_data', 'ekskul_data'));
    }

    public function eforasi()
    {
        $title = "E-ASKADUTA | eFORASI";
        $respons = Respon::all();
        $eforasi_data = eForasiData::all();
        
        return view('respon.eforasi', compact('title', 'respons', 'eforasi_data'));
    }

    public function error()
    {
        $title = "E-ASKADUTA | error!!";
        
        return view('403', compact('title',));
    }
}