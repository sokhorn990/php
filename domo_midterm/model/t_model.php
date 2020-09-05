<?php 
    function m_view(){
        include_once "connection.php";
        $query ='SELECT * FROM student';
        $result = mysqli_query($connect,$query);
        $info =[];
        if($result && mysqli_num_rows($result)>0){
            foreach($result as $total){
                $info[] = $total;
            }
        }
        return $info;
    }
    // add

    function m_add($data){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $score = $_POST['score'];
        $sex = $_POST['sex'];
        include_once "connection.php";
        $query = "INSERT INTO student(name,class,maRk,sex) VALUES ('$name','$class','$score','$sex')";
        $result =mysqli_query($connect,$query);
        return $result;
                    
    }
    // add
?>