<?php

namespace App\Controllers;
use App\Models\BloodGroupModel;
use App\Models\BloodModel;

class CrudView extends BaseController
{
    public function index()
    {
        $bloodUser=new BloodModel();
        $data['user']=$bloodUser->get_users();
        return view('view_list',$data);
    }
    public function add_new()
    {
        $bloodModel=new  BloodGroupModel();
        $bloodUser=new BloodModel();
        if($this->request->is('get'))
        {
        $data['blood_group']=$bloodModel->findAll();
        return view('add_new',$data);
        }
        else if($this->request->is('post'))
        {
            $data['username']=$this->request->getVar("name");
            $data['mobile']=$this->request->getVar("mobile");
            $data['blood_group']=$this->request->getVar("blood_group");

            if($bloodUser->insert($data))
            {
                $bloodUser=new BloodModel();
                $data['user']=$bloodUser->where('status',1)->findAll();
                return view('view_list',$data);
            }
        }
    }
    public function edit($id)
    {
        if($this->request->is('get'))
        {
            $bloodUser=new BloodModel();
            $bloodModel=new  BloodGroupModel();
            $data['blood_group']=$bloodModel->findAll();
            $data['user']=$bloodUser->where('id',$id)->find();
            return view('edit',$data);

        
        }
        else if($this->request->is('post'))
        {
            $bloodUser=new BloodModel();
            $data['username']=$this->request->getVar("name");
            $data['mobile']=$this->request->getVar("mobile");
            $data['blood_group']=$this->request->getVar("blood_group");
           if($bloodUser->update($id,$data))
           {
            return redirect()->to(site_url(""));
           }
        }
    }
    public function delete($id)
    {
        $data['status']=0;
        $bloodUser=new BloodModel();
        if($bloodUser->update($id,$data))
           {
            return redirect()->to(site_url(""));
           }

    }
}
