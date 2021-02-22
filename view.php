
<head>
<link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">   
<link rel = "stylesheet" href  = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

</head>

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
            



        <tbody>

        <?php
             require 'dbconfig.php';
                $ref='PLC/'; 
                $data=$database->getReference($ref)->getValue();
                $i=0;
                foreach($data as $key => $data1)
                {
                         ?>
                         <tr>
                        <td><?php echo $data1['0'];?></td>
                        <td><?php echo $data1['1'];?></td>
                        <td><?php echo $data1['2'];?></td>
                        <td>
                        <!-- <button type="button" class="btn btn-primary" ><i class="far fa-eye"></i></button> -->
                        <a type="button" class="btn btn-danger" href="update.php?key=<?php echo $key; ?>">Delete</a>
                        <a type="button" class="btn btn-sm btn-primary" href="update-user.php?key=<?php echo $key; ?>" >Update Data</a>
               
               <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
           <label for="exampleInputEmail1">ID</label>
           <input type="text" class="form-control" name="id" readonly aria-describedby="emailHelp" value="<?php echo $data1['id']; ?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Name</label>
           <input type="text" class="form-control" name="name" aria-describedby="emailHelp" >
       </div>
       <div class="form-group">
           <label for="exampleFormControlTextarea1">Password</label>
           <input type="text" class="form-control" name="password"></textarea>
       </div>
       <input type="hidden" name="ref" value="phpdemo-2f659-default-rtdb/<?php echo $key; ?>">
       <button type="submit" name="update" class="btn btn-primary">Submit</button>
   </form>
            </div>
         </div>
      </div>
   </div>
                        </td>
                    </tr>     
                    

               <?php    
                }

            ?>

         
          
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $ref = $_POST['ref'];
    
    $data = [
        'id' => $id,
        'name' => $name,
        'password' => $password
    ];
    
    $pushData = $database->getReference($ref)->update($data);
    if($pushData)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Update successfull")';  //not showing an alert box.
        echo '</script>';
    }
}


?>