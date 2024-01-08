<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function useradminsiswa()
    {
        return view('admin.user-admin-siswa-');
    }

    public function kelas()
    {
        return view('admin.kelas');
    }

    public function mapel()
    {
        return view('admin.mapel');
    }

    public function profiladmin()
    {
        return view('admin.profile-admin');
    }

    public function useradmintentor()
    {
        return view('admin.user-tentor-');
    }

    public function tambahsiswa()
    {
        return view('admin.tambah-siswa');
    }
}
