
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCMjV62PhhLwgCmjKHr-hYYCjJajMK8hkg",
    authDomain: "phpdemo-2f659.firebaseapp.com",
    databaseURL: "https://phpdemo-2f659-default-rtdb.firebaseio.com",
    projectId: "phpdemo-2f659",
    storageBucket: "phpdemo-2f659.appspot.com",
    messagingSenderId: "822564182036",
    appId: "1:822564182036:web:56d5541f1f546cff38af01",
    measurementId: "G-31RWNFPTJ1"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>


<?php

require 'dbconfig.php';
 require __DIR__.'/vendor/autoload.php';
 use Kreait\Firebase\Factory;
 use Kreait\Firebase\ServiceAccount;

    if($_SERVER['REQUEST_METHOD']=='post')
    
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $password=$_POST['password'];

        echo $id;
        

        $data=[
            'id'=>$id,
            'name'=>$name,
            'password'=>$password
        ];

            $ref='phpdemo-2f659-default-rtdb';
            $postdata=$database->getReference($ref)->push($data);
            if($postdata)
            {
                echo "Data Inserted";
            }
    
    
    }
?>