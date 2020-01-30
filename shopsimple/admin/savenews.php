<?php
 /**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */                  
session_start();
include('../db.php');
$a = $_POST['title'];
$b = $_POST['body'];
// query
$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'eblog_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;
/* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO news (title,body,file,date) VALUES (:a,:b,:c,now())";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$file_name_new));
if($q){
      header("location:news.php");
        }else{
            header("location:addnews.php");
        }
    }
?>
