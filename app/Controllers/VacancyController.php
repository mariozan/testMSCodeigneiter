<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Vacancies;
use CodeIgniter\HTTP\ResponseInterface;

class VacancyController extends BaseController
{

    public function index()
    {

        $vacancies = new Vacancies();

        $data = $vacancies->getVacancies();

        return view('includes/header')
        . view('vacancies/list', ["data" => $data->getResult()]);
    }

    public function create()
    {
        return view('includes/header')
        . view('vacancies/create');
    }

    public function store(){

        $vacancy = new Vacancies();

        $data = array(
            'name' => $_POST['name'],
            'description' => $_POST['description'],
        );

        $vacancy->addVacancy($data);

        return redirect()->to('vacancies', null, 'refresh');
    }
}
