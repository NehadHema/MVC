<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h3>All At View</h3> -->
    <?php 
    foreach($posts as $post){
        echo $post['title']."<br>";
        echo $post['body']."<br><hr>";
    }
   
    ?>
</body>
</html>