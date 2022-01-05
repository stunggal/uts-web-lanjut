<?php
class Home extends Controller
{
    public function index()
    {
        $data['data'] = $this->model('data_model')->getAllData();
        $data['anggota'] = $this->model('anggota_model')->getAllData();
        $data['tes'] = 'tes';
        $this->view('home/index', $data);
    }
}
