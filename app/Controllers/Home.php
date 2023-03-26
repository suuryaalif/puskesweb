<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\PelayananModel;

class Home extends BaseController
{
    public $pelayananModel;
    public $kategoriModel;
    public function __construct()
    {
        $this->pelayananModel = new PelayananModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        //jumlah pencapaian
        $sum_pelA = $this->kategoriModel->where('pelayanan', 'pelayanan A')->selectSum('pencapaian')->first();
        $sum_pelB = $this->kategoriModel->where('pelayanan', 'pelayanan B')->selectSum('pencapaian')->first();
        $sum_pelC = $this->kategoriModel->where('pelayanan', 'pelayanan C')->selectSum('pencapaian')->first();
        $sum_pelD = $this->kategoriModel->where('pelayanan', 'pelayanan D')->selectSum('pencapaian')->first();
        // data semua
        $datas = $this->kategoriModel->findAll();

        $data = [
            'title' => 'Dashboard|Page',
            'all_datas' => $datas,
            'Sm_pelA' => $sum_pelA['pencapaian'],
            'Sm_pelB' => $sum_pelB['pencapaian'],
            'Sm_pelC' => $sum_pelC['pencapaian'],
            'Sm_pelD' => $sum_pelD['pencapaian']
        ];
        return view('Home/dashboard', $data);
    }

    public function pelayananA()
    {
        $pelayanan = 'pelayanan A';
        $fetchdata = $this->kategoriModel->getDatacakup($pelayanan);
        $data = [
            'data' => $fetchdata,
            'title' => 'Pelayanan ' . $pelayanan,
            'pelayanan' => $pelayanan
        ];
        return view('Home/view_pelayanan', $data);
    }

    public function pelayananB()
    {
        $pelayanan = 'pelayanan B';
        $fetchdata = $this->kategoriModel->getDatacakup($pelayanan);
        $data = [
            'data' => $fetchdata,
            'title' => 'Pelayanan ' . $pelayanan,
            'pelayanan' => $pelayanan
        ];
        return view('Home/view_pelayanan', $data);
    }

    public function pelayananC()
    {
        $pelayanan = 'pelayanan C';
        $fetchdata = $this->kategoriModel->getDatacakup($pelayanan);
        $data = [
            'data' => $fetchdata,
            'title' => 'Pelayanan ' . $pelayanan,
            'pelayanan' => $pelayanan
        ];
        return view('Home/view_pelayanan', $data);
    }

    public function pelayananD()
    {
        $pelayanan = 'pelayanan D';
        $fetchdata = $this->kategoriModel->getDatacakup($pelayanan);
        $data = [
            'data' => $fetchdata,
            'title' => 'Pelayanan ' . $pelayanan,
            'pelayanan' => $pelayanan
        ];
        return view('Home/view_pelayanan', $data);
    }

    public function tambahCapai($id)
    {
        $new_jml = $this->request->getVar('input_jml');
        // dapetin nilai sebelumnya
        $before_array = $this->pelayananModel->select('pencapaian')->where('id', $id)->first();
        // kupas array
        $before_jml = $before_array['pencapaian'];
        // model hasil
        $hasil = $this->pelayananModel->tambahCapai($id, $before_jml, $new_jml);
        session()->setFlashdata('success', 'Data Berhasil Ditambah');
        return redirect()->back();
    }

    public function kurangiCapai($id)
    {
        $new_jml = $this->request->getVar('input_jml');
        // dapetin nilai sebelumnya
        $before_array = $this->pelayananModel->select('pencapaian')->where('id', $id)->first();
        // kupas array
        $before_jml = $before_array['pencapaian'];
        // model hasil
        $hasil = $this->pelayananModel->kurangiCapai($id, $before_jml, $new_jml);
        $data = [
            'before' => $before_jml,
            'new' => $new_jml,
            'hasil' => $hasil,
        ];
        session()->setFlashdata('success', 'Data Berhasil Dikurangi');
        return redirect()->back();
    }
    public function hapusUpy($id)
    {
        $this->pelayananModel->hapusUpy($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
}
