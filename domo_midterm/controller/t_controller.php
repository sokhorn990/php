<?php
 $data = array();
 flexible_function($data);
 function flexible_function(&$data){
     $function= 'view';
     if(isset($_GET['action'])){
         $function = $_GET['action'];
     }
     $function($data);
 }
     function view(&$data){
         $data['student']=m_view();
         $data['page']="domo/view.php";
     }
     function add_form(&$data){
         $data['page']="domo/add.php";
     }
    //  add
     function add_student(&$data){
    $result = m_add($_POST);
    if($result){
        $action = "view";
    }else{
        $action = "add_form";
    }
    header("location:index.php?action=$action");
     }
    //  add
?>