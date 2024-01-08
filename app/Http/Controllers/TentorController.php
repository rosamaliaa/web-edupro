<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentorController extends Controller
{
    public function materitentor()
    {
        return view('tentor.materi-tentor');
    }

    public function tugastentor()
    {
        return view('tentor.tugas-tentor');
    }

    public function ujiantentor()
    {
        return view('tentor.ujian-tentor');
    }

    public function tentoruser()
    {
        return view('tentor.tentor-user');
    }

    public function tambahmateritentor()
    {
        return view('tentor.tambah-materi-tentor');
    }

    public function detailtugastentor1()
    {
        return view('tentor.detail-tugas-tentor-1');
    }

    public function detailtugastentor2()
    {
        return view('tentor.detail-tugas-tentor-2');
    }

    public function tentorqb7()
    {
        return view('tentor.ujian-tentor-QB7');
    }

    public function tambahpilgan()
    {
        return view('tentor.tambah-soal-pilgan');
    }

    public function tambahessay()
    {
        return view('tentor.tambah-soal-essay');
    }
}
