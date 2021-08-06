<?php
class Franchise extends Controller
{
    public function index($provinsi = "JABODETABEK")
    {
        $data['Franchise'] = $this->model('Frencise_model')->dataFrenchise($provinsi);
        $this->view('Franchise/index', $data);
    }
}
