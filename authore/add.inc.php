<?php
require_once '../signup/config_seesion.inc.php';  
 if (!isset($_SESSION['user_id'])) {
    header('Location: ../signup/sign_index.php?error=unauthorized');
   exit();
 }else if(isset($_SESSION['user_id'])){
$session_id=$_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title =$_POST['title'];

     $content_txt=$_POST['content'];
     $author_id = $session_id;
     echo $session_id;

try{

    require_once'../signup/dbh.inc.php';
    require_once'add_model.php';

    require_once'add_contr.php';
$errore=[];
if( isinput_empty($title,$content_txt)){
    $errores['empty_input']='fill in all fildes';
        }
        if($errore){
            $_SESSION['errors_post']=$errore;
     
            header("location:../authore/creat.php?post=success");

            die();
        
        }
        creat_post($pdo, $title, $content_txt,  $author_id);

        $pdo=null;
        $stmt=null;
        die();

}
catch(PDOException $e){

die('Query failed '.$e->getMessage());

}}
else{
    header("location:creat_post.php");
    die();
}
}