<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="/style.css">

    <style>
        main {
            /* display: fle; */
        }

        fieldset {
            width: 70%;
        }

        fieldset form input {
            width: 250px;
            height: 20px;
        }

        .chkbox {
            margin-left: 150px;
        }
    </style>

</head>

<body>
    <?php include '../include/header.php'; ?>

    <main>
        <h1>HTML Forms</h1>

        <fieldset>
            <legend>Sign Up Form</legend>
            <form action="" method="get" name="f1" onsubmit="return chkpwd()">
                <input type="text" name="fname" required placeholder="First Name">
                <br><br><input type="text" name="lname" required placeholder="Last Name">
                <br> <br><input type="password" name="password" id="pwd" required placeholder="Password">
                <input type="checkbox" class="chkbox" onclick="showpwd()">
                <br><br><input type="password" name="cpassword" required placeholder="Confirm Password">
                <br> <br><input type="email" name="email" required placeholder="Email">
                <br><br><input type="submit" name="register" value="Register">
            </form>
        </fieldset>

    </main>

</body>

</html>

<script>
    function showpwd() {
        let x = document.getElementById('pwd');
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function chkpwd(){
        let p1 = document.f1.password.value;
        let p2 = document.f1.cpassword.value;

        if(p1 == p2){
            return true;
        }
        else{
            alert("Password Mismatch");
            return false;
            
        }
    }
</script>