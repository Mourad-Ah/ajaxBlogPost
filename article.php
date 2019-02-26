<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <script src="getComments.js"></script>

   <style>
   tr, th, td {
        border:3px solid lightblue;
        padding:2px;
        border-radius:5px 5px 5px 5px;
   }
   </style>
</head>
<body>


<h3>Blog</h3>
   
   <table>
   
   <?php 
    
   if (!empty($comments)){
   foreach($comments as $key => $comment): ?>
           
           <tr>
               <?php  echo $comment['comment']; ?>
           </tr>
       
   <?php endforeach;}?>

   </table>

  
<input id="data" type="text" style="border:solid 1px black; width:450px; height:200px;" maxlength="100"
;" />

   <input onclick="getComments()" type="submit" value="OK">



   <!-- <input id="data" type="text" style="border:solid 1px black; width:450px; height:200px;" maxlength="1000"
   onkeyup="getComments();" />  -->

   <!-- <div>
   <h3>Emojis</h3>
   </div>

<div id="emoji" style="border:solid 1px black; width:150px; height:50px;">
</div>  -->

   <div>
   <h3>Commentaires</h3>
   </div>

<div id="Affichage" style="border:solid 1px black; width:450px; height:400px;">
</div> 


</body>



</html>


