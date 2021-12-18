<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ToDoList</title>
  </head>
  <body>
    <h1 class="text-center my-4 py-4">To do list App web</h1>
    <div class="w-50 m-auto
    ">
      <form action="data.php" method="POST" autocomplete="off">
        <label for="title">Task :</label>
        <input class="form-control" type="text" name="title" id="title" required placeholder="Enter Task To Do"><br>
        <button class="btn btn-success">Add ToDo</button>
      </form>
    </div><br>
    <hr class="bg-dark w-50 m-auto">
   <div class="w-50 m-auto">
     <h1>Your Lists</h1>
     <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Task</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
      include 'database.php';
      $sql="SELECT * FROM todos";
      $result=mysqli_query($connect,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $title=$row['title'];
        
      
   ?>
   <tr>
     <td><?php echo $id ?></td>
     <td><?php echo $title ?></td>
     <td>
        <a href="edit.php?id=<?php echo $id?>" class="btn btn-success btn-sm">Edit</a>
        <a href="delete.php?id=<?php echo $id?>" class="btn btn-danger btn-sm">Delete</a>
     </td>
   
    
    
   </tr>
<?php } ?>
   </tr>
<?php } ?>
  </tbody>
</table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>