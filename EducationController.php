<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\UserModel;

class EducationController extends Controller
{

    public function index()
    {   
        View::render('education/index.view', [
            'users'          => UsersModel::get(1),
            'education'    => EducationModel::userEducation(1),
        ]);
    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    public function create()
    {
        
    }

    public function show()
    {

    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}
