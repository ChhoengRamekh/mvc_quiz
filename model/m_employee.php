<?php
function m_get_data() {
    include_once 'connection.php';
    $query = 'SELECT * FROM employee';
    $result = mysqli_query($conn, $query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0) {
        while ($get_result_to_array = mysqli_fetch_assoc($result)) {
            $rows[] = $get_result_to_array;
        }
    }
    return($rows);
}


function m_add_employee($data) {
    include_once "connection.php";
    
    $fname    = $_POST['firstname'];
    $lname     = $_POST['lastname'];
    $position  = $_POST['title'];
    $age       = $_POST['age'];
    $exp       = $_POST['yearofservice'];
    $salary    = $_POST['salary'];
    $perks      = $_POST['perks'];
    $email     = $_POST['email'];
    $depart    = $_POST['departmentid'];

    $query = ("INSERT INTO employee (firstname,lastname,title,age,yearofservice,salary,perks,email,departmentid) VALUES('$fname','$lname','$position','$age','$salary','$exp','$perks','$email','$depart' )");
    $result = mysqli_query($conn, $query); 
    return $result;
}


function m_edit_employee(){
    include_once "connection.php";
    $query = "SELECT * FROM employee WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $query);
    return $result;
}

function m_viewdata_employee(){
    include_once "connection.php";
    $query = "SELECT * FROM employee WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $query);
    return $result;
}

function m_update_employee($data) {
    include_once "connection.php";
    
    $fname    = $_POST['firstname'];
    $lname     = $_POST['lastname'];
    $position  = $_POST['title'];
    $age       = $_POST['age'];
    $exp       = $_POST['yearofservice'];
    $salary    = $_POST['salary'];
    $perks      = $_POST['perks'];
    $email     = $_POST['email'];
    $depart    = $_POST['departmentid'];

    $query = "UPDATE employee SET firstname = '$fname', lastname= '$lname',title='$position', age = '$age',
    yearofservice='$exp', salary = '$salary', perks='$perks',email='$email',departmentid='$depart' WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $query);
    return $result;
}

function m_delete_employee(){
    include_once 'connection.php';
    $query = "DELETE FROM employee WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $query);
    return $result;
}


function validationUser() {
    include_once "connection.php";
    
        $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
        $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: index.php?action=view');
            }else{
                header('Location: index.php?action=login');
            }
    
        }

}

function createUser($data) {
    include_once "connection.php";
    $name = $_POST['name'];
    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    $result = mysqli_query($conn,"insert into user(name,username,password) VALUES('$name','$username','$password')");
    return $result;
}

