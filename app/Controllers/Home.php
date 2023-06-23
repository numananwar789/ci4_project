<?php

namespace App\Controllers;

class Home extends BaseController
{

    var $data;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->data = [];
        $this->data['paths'] = PATH;
        $this->data['template'] = TEMPLATE;
    }

    public function index()
    {
        // $data = [];
        // $data['paths'] = PATH;
        // $data['template'] = TEMPLATE;

        // echo $data['paths'];
        // echo $data['template'];

        $data = $this->data;

        echo view('header', $data);
        echo view('home', $data);
        echo view('footer', $data);

    }

    public function browse()
    {
        // $data = [];
        // $data['paths'] = PATH;
        // $data['template'] = TEMPLATE;

        // echo $data['paths'];
        // echo $data['template'];

        $data = $this->data;

        echo view('header', $data);
        echo view('browse', $data);
        echo view('footer', $data);
    }
    
    public function details()
    {
        $data = [];
        $data['paths'] = PATH;
        $data['template'] = TEMPLATE;

        // echo $data['paths'];
        // echo $data['template'];

        $data = $this->data;

        echo view('header', $data);
        echo view('details', $data);
        echo view('footer', $data);
    }

    public function streams()
    {
        // $data = [];
        // $data['paths'] = PATH;
        // $data['template'] = TEMPLATE;

        // echo $data['paths'];
        // echo $data['template'];

        $data = $this->data;

        echo view('header', $data);
        echo view('streams', $data);
        echo view('footer', $data);
    }

    public function profile()
    {
        // $data = [];
        // $data['paths'] = PATH;
        // $data['template'] = TEMPLATE;

        // echo $data['paths'];
        // echo $data['template'];

        $data = $this->data;
        
        echo view('header', $data);
        echo view('profile', $data);
        echo view('footer', $data);
    }
}
