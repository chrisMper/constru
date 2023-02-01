<?php
    class cv extends Controller{
        public function index(){
            $data = [];

        $this-> view('users/eng/index', $data);
        }
    } 