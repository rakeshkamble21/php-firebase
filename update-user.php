
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
<link rel = "stylesheet" href  = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">   
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="container register">
                <div class="row">
            
                <?php
                $key=$_GET['key'];
                require 'dbconfig.php';
                $ref='PLC/';
                $getdata=$database->getReference($ref)->getChild($key)->getValue();

            
            ?>
                                <h3 class="register-heading">Update a Employee</h3>
                                <form action="" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="id *" value="<?php echo $key;?>"  name="key" />
                                            <input type="text" class="form-control" placeholder="id *" value="<?php echo $getdata['0'];?>"  name="id" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name *" value="<?php echo $getdata['1'];?>"  name="name" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Password *"  value="<?php echo $getdata['2'];?>"  name="password" />
                                        </div>
                                        
                    
                                       
                                        <input type="submit"  class="btnRegister"  value="Register"/>
                                    </div>
                                    </form>
                                </div>
                            </div>
                          
                </div>
            </div>

            
</body>
</html>

<?php

require 'dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    $id=$_POST['id'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $key=$_POST['key'];

    $data=[
        'id'=>$id,
        'name'=>$name,
        'password'=>$password
    ];

        $ref='phpdemo-2f659-default-rtdb/'.$key;
        $postdata=$database->getReference($ref)->update($data);
        if($postdata)
        {
            echo "Data updated";
        }
        else
        {
            echo "something went wrong";
        }
}
?>

