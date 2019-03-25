<?php
$data = array();
Flexible_function($data);

function Flexible_function(&$data){
    $function = 'login';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action;
        
    }
    $function($data);
}


function login(&$data){
    $data['page'] = 'employee/login';
}

function loginValidation() {
    validationUser();
    if(!isset($_SESSION['uname'])){
        header('Location: index.php?action=view');
    }
}

function logout(&$data) {
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php?action=login');
    }
}

function register(&$data){
    $data['page'] = 'employee/register';
}

function registerUser(&$data) {
    $data = createUser($_POST);
    if($data) {
        $action = 'login';
    } else {
        $action = 'register';
    }
    header("Location:index.php?action=$action");
}

function view(&$data){
    $data['employee_data'] = m_get_data();
    $data['page'] = 'employee/view';
}


function add(&$data){
    $data['page'] = 'employee/add';
}

function add_employee($data) {
    $data = m_add_employee($_POST);
    if($data) {
        $action = 'view';
    } else {
        $action = 'add';
    }
    header("Location:index.php?action=$action");
}


//update data to database
function edit(&$data){
    $data['employee_data'] = m_edit_employee();
    $data['page'] = 'employee/update';
}

function update(&$data){
    $data = m_update_employee($_POST);
    $id = $_GET['id'];
    if($data) {
        $action = 'view';
    } else {
        $action = 'edit&id=$id';
    }
    header("Location:index.php?action=$action");
}


//delete data from database
function delete(&$data){
    $data = m_delete_employee();
    if($data) {
        header('location:index.php?action=view');
    } else {
        echo "Cannot delete";
    }
}


//view data 
function viewdata(&$data) {
    $data['employee_data'] = m_viewdata_employee();
    $data['page'] = 'employee/viewdata';
}

