<?php
    session_start();
    if(isset($_POST["login"])){
        $user = $_POST["username"];
        $pass = $_POST["password"];

        if($user == 'admin' && $pass == 'admin'){

            $_SESSION["login"] = "admin";
            // $_SESSION["login"] = true;
            echo "<script>location.href = 'admin.php'</script>";
        }else if($user == 'user' && $pass == 'user'){

            $_SESSION["login"] = "user";
            // $_SESSION["login"] = true;
            echo "<script>location.href = 'user.php'</script>";

        }else{

            echo "<h1>Username dan Password Salah</h1>";
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Selamat Datang</h1>
        <h2>Silahkan Login</h2>
        <form action="" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>