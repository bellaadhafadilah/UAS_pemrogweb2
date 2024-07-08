<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\HasilPerhitungan;

class PerhitunganController extends Controller
{
    public function hitungWP()
    {
        // Ambil semua data kriteria dan alternatif
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        
        // Normalisasi bobot kriteria
        $total_bobot = $kriteria->sum('bobot');
        $normalized_weights = $kriteria->mapWithKeys(function ($k) use ($total_bobot) {
            return [$k->id => $k->bobot / $total_bobot];
        });

        // Hitung nilai S
        $s_values = [];
        foreach ($alternatif as $alt) {
            $s_value = 1;
            foreach ($kriteria as $k) {
                $value = $alt->{$k->kode};
                if ($k->label == 'cost') {
                    $value = 1 / $value; // Jika cost, balik nilai pembagian
                }
                $s_value *= pow($value, $normalized_weights[$k->id]);
            }
            $s_values[$alt->id] = $s_value;
        }

        // Hitung total S untuk perhitungan nilai V
        $total_s = array_sum($s_values);

        // Periksa jika total S adalah nol
        if ($total_s == 0) {
            return response()->json(['message' => 'Error: Total S adalah nol, terjadi pembagian dengan nol.']);
        }

        // Hitung nilai V dan siapkan data untuk dimasukkan
        $results = [];
        foreach ($s_values as $alt_id => $s_value) {
            $v_value = $s_value / $total_s;
            $results[] = [
                'alternatif_id' => $alt_id,
                'nilai_s' => $s_value,
                'nilai_v' => $v_value,
            ];
        }

        // Urutkan hasil berdasarkan nilai V secara menurun untuk menentukan ranking
        usort($results, function ($a, $b) {
            return $b['nilai_v'] <=> $a['nilai_v'];
        });

        // Tambahkan ranking ke hasil
        foreach ($results as $rank => $result) {
            $results[$rank]['ranking'] = $rank + 1;
        }

        // Hapus hasil yang sudah ada
        HasilPerhitungan::truncate();

        // Simpan hasil perhitungan ke dalam database
        HasilPerhitungan::insert($results);

        // Ambil data hasil perhitungan untuk ditampilkan ke view
        $hasilPerhitungans = HasilPerhitungan::all();

        // Kembalikan view hasil.blade.php dengan data hasil perhitungan
        return view('perhitungan.hasil', compact('hasilPerhitungans'));
    }
}
