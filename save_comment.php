<?php



$comment=$_POST['comment'];
$date=date("Y-m-d H:i:s");
$date_create=$date;

//Ecriture dans la base de donnée
   $connec = new PDO('mysql:dbname=Blog', 'root', '0000');
   // Pour identifier les erreurs
   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // Prepare une requête
   $request = $connec->prepare("INSERT INTO comm (date_create,comment) VALUES ('$date_create','$comment')");
   // Execute la requête SQL
   $request->execute();
   
  
//Recupération depuis la base de donnée
function getAllComments() {
   $connec = new PDO("mysql:dbname=Blog", 'root', '0000');
   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $request = $connec->prepare("SELECT * FROM comm;");
   $request->execute();
   return $request->fetchAll(PDO::FETCH_ASSOC);
}

 $comments = getAllcomments();

//Verfication de la 


if (isset($_POST['comment']))

 //if (isset($_POST['comment']))

{

//  //  echo ('ok').'<br>';
   echo $date_create.'<br>';
//    //echo $id.'<br>';
  //echo $comment.'<br>';
 }
 else{
     
 }







?>
