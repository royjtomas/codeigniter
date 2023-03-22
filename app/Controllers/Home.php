<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
    if(array_key_exists('user_session',session()->get()))
    {
        return redirect()->to('admin');
    }    
        return view('login_page');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function admin()
    {
        if(array_key_exists('user_session',session()->get()))
        {
            $data = array();
            $data ['user'] = session()->get('user_session');
            return view ('admin_page', $data);           
        }
        else{
            return redirect()->to('/');
        }
            
    }

    public function process ($mode)
    {
        $user_m=new \App\Models\UserAccount();
        if($mode=='login'){
           $username = $this->request->getPost('username');
           $password = $this->request->getPost('pass');

           $users_data = $user_m
           ->where ('username',$username)
           ->where ('passw',$password)
           ->findAll();

           if(count($users_data) > 0){
            session()->set('user_session',$users_data[0]);
            return redirect()->to('admin');
           } else {
            return redirect()->to('login');
           }        
    
        }else{
            return redirect()->to('login');
        }
        
    }

}