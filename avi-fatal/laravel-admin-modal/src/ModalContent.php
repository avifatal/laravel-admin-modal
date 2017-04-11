<?php
namespace AviFatal\LaravelAdminModal;

use Encore\Admin\Layout\Content;

class ModalContent extends Content{

    public function __construct($callback = null)
    {
        parent::__construct($callback);
    }

    public function render()
    {
        $items = [
            'header'      => $this->header,
            'description' => $this->description,
            'content'     => $this->build(),
        ];

        if(request()->modal == true  && request()->ajax()) {
            return view('laravel-admin-modal::content', $items)->render();
        }else{
            return view('admin::content', $items)->render();
        }
    }
}