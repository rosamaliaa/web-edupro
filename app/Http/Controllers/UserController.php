<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aksesmateri()
    {
        return view('user.akses-materi-');
    }

    public function tugasuser()
    {
        return view('user.tugas');
    }

    public function pengerjaanto()
    {
        return view('user.pengerjaan-try-out');
    }

    public function profileuser()
    {
        return view('user.profile-user');
    }

    public function landingpage()
    {
        return view('user.landing-page-');
    }

    public function akseskimia()
    {
        return view('user.akses-materi-1-');
    }

    public function detailmateri()
    {
        return view('user.detail-materi-');
    }

    public function detauiluploadtugas()
    {
        return view('user.detail-upload-tugas-');
    }

    public function detauiluploadtugas2()
    {
        return view('user.detail-upload-tugas-2-');
    }

    public function detailpengerjaanto()
    {
        return view('user.detail-pengerjaan-try-out-');
    }

    public function historynilai()
    {
        return view('user.history-nilai-');
    }
}
