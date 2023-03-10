<?php
namespace Modules\Admin\Http\Controllers;
use Illuminate\Routing\Controller;

class UserController extends Controller{
    public function index() {
        echo 'index';
    }

    public function add() {
        echo 'add';
    }

    public function deletes() {
        echo 'deletes';
    }

    public function updates() {
        echo 'updates';
    }
}