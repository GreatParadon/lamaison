<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Test;

class TestController extends BaseController
{
    protected $page = ['title' => 'Test', 'content' => 'test'];
    protected $list_data = [['field' => 'id', 'type' => 'number', 'label' => 'ID'],
        ['field' => 'title', 'type' => 'text', 'label' => 'Title'],
        ['field' => 'image', 'type' => 'image', 'label' => 'Image'],
        ['field' => 'active', 'type' => 'checkbox', 'label' => 'Active']];
    protected $create = true;
    protected $sort = true;
    protected $edit = true;
    protected $delete = true;

    protected function model()
    {
        return new Test();
    }

    protected function formData()
    {
        $form_data = collect([['field' => 'id', 'type' => 'number', 'label' => 'ID'],
            ['field' => 'title', 'type' => 'text', 'label' => 'Title'],
            ['field' => 'image', 'type' => 'image', 'label' => 'Image'],
            ['field' => 'active', 'type' => 'checkbox', 'label' => 'Active']]);
        return $form_data;
    }

    protected function listQuery($list_data)
    {
        return $this->model()->select($list_data->pluck('field')->all())->get();
    }

}
