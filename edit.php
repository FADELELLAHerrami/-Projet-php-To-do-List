<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit your ToDoList</title>
  </head>
  <body>
    <h1 class="text-center my-4 py-4">To do list App web</h1>
    <?php
      include 'database.php';
      $id=$_GET['id'];
      $sql="select * from todos where id=".$id;
      $result=mysqli_query($connect,$sql);
      if($result){
        $row=mysqli_fetch_assoc($result);
        $title=$row['title'];
        
      }


    ?>
    <div class="w-50 m-auto
    ">
      <form action="edication.php" method="POST" autocomplete="off">
        <label for="title">Task :</label>
        <input value="<?php global $title;echo $title ?>" class="form-control" type="text" name="title" id="title" required placeholder="Edit Task To Do"><br>
        <input type="hidden" name="id" id="id" value="<?php $id; echo $id ?>">
        <button class="btn btn-success">Edit</button>
      </form>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>