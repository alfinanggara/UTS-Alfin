<?php
    use App\Models\mahasiswa;
    use App\Models\vjlhmhskrs;
?>
@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')
    <h1>Index Mahasiswa</h1>
    <style>
        table tr{
            padding: 10px;
        }
    </style>
    <table style="padding: 10px;">
        <tr>
        <th>No</th>
            <th>kode matakuliah</th>
            <th>Nama matakuliah</th>
            <th>SKS</th>
        </tr>
        <?php
        // $mahasiswas = mahasiswa::get();

        // foreach ($mahasiswas as $mahasiswa) {
        //     echo "<tr>";
        //     echo "<td>".$mahasiswa->studentId."</td>";
        //     echo "<td>".$mahasiswa->nama."</td>";
        //     echo "<td>".$mahasiswa->jurusan."</td>";
        //     echo "<td>".$mahasiswa->tahunMasuk."</td>";
        //     echo "</tr>";
        // }

        
        $rows = DB::select("
        SELECT StudentID,Nama,kode_krs,kode_term,kode_matakuliah,nama_matakuliah,sks,total_sks FROM vmhskrs");
        $no=1;

        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row->kode_matakuliah."</td>";
            echo "<td>".$row->nama_matakuliah."</td>";
            echo "<td>".$row->sks."</td>";
            echo "</tr>";
            $no+=1;
        }
        ?>
    </table>
@endsection