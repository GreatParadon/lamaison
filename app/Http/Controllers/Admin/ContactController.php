<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Contact;

class ContactController extends BaseController
{
    protected $page = ['title' => 'Contact', 'content' => 'contact'];
    protected $list_data = [['field' => 'id', 'type' => 'number', 'label' => 'ID'],
        ['field' => 'name', 'type' => 'text', 'label' => 'Name'],
        ['field' => 'email', 'type' => 'text', 'label' => 'Email'],
        ['field' => 'tel', 'type' => 'text', 'label' => 'Tel'],
        ['field' => 'topic', 'type' => 'text', 'label' => 'Topic']];
    protected $create = false;
    protected $sort = false;
    protected $edit = false;
    protected $delete = false;

    protected function model()
    {
        return new Contact();
    }

    protected function formData()
    {
        $form_data = collect($this->list_data);
        return $form_data;
    }

    protected function listQuery($list_data)
    {
        return $this->model()->select($list_data->pluck('field')->all())->get();
    }

}
