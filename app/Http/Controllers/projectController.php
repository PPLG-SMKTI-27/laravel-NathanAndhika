<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\views\project;

class projectController extends Controller
{
    public function index()
    {
        $list = [
            [
                'title' => 'Cyber Landing Page',
                'desc' => 'Landing page futuristik dengan Tailwind CSS dan animasi interaktif.',
                'tech' => 'HTML, TAILWIND',
            ],
            [
                'title' => 'Cyber Landing Page',
                'desc' => 'Landing page futuristik dengan Tailwind CSS dan animasi interaktif.',
                'tech' => 'HTML, TAILWIND',
            ],
            [
                'title' => 'Portfolio Website',
                'desc'  => 'Website personal branding dengan tampilan dark mode modern dan responsif.',
                'tech'  => 'HTML, CSS, JAVASCRIPT',
            ],
            [
                'title' => 'Admin Dashboard',
                'desc'  => 'Dashboard admin dengan UI gelap, grafik data, dan layout responsif.',
                'tech'  => 'REACT, TAILWIND',
            ],
            [
                'title' => 'E-Commerce Landing Page',
                'desc'  => 'Landing page produk dengan fokus konversi, animasi, dan CTA menarik.',
                'tech'  => 'HTML, TAILWIND, JAVASCRIPT',
            ],
            [
                'title' => 'Sistem Parkir Mall',
                'desc'  => 'Aplikasi pencatatan parkir kendaraan roda dua dan empat berbasis MVC.',
                'tech'  => 'PHP, MYSQL, MVC',
            ],
            [
                'title' => 'Absensi Online',
                'desc'  => 'Sistem absensi berbasis web dengan login user dan rekap kehadiran.',
                'tech'  => 'LARAVEL, MYSQL',
            ],
            [
                'title' => 'Company Profile Website',
                'desc'  => 'Website profil perusahaan dengan desain profesional dan informatif.',
                'tech'  => 'HTML, CSS, TAILWIND',
            ],


        ];
        return view('project', [
            'nama' => 'Nathan',
            'list' => $list,
        ]);
    }
}
