<!--

-->


<?php
    $errors = [];
    if(!empty($_POST)){
        if(empty($_POST['fullname'])){
            $errors['fullname']['require'] = 'Ho ten bat buoc';
        }else{
            if(strlen($_POST['fullname']) < 5){
                $errors['fullname']['length'] = 'Ho ten toi thieu 5 ki tu';
            }
        }
        if(empty($_POST['email'])){
            $errors['email']['require'] = 'Email bat buoc';
        }else{
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email']['invalid'] = 'Email khong hop le';
            }
        } 
    }
?>

<form method="post" action="">
    <p>Ho ten:
        <input type="text" name="fullname" placeholder="Ho Ten">
        <?php
            echo (!empty($errors['fullname']['require'])) ? '<p style="color:red">'.'ho ten bat buoc'.'</p>' : ''; 
            echo (!empty($errors['fullname']['length'])) ? '<p style="color:red">'.'ho ten khong hop le'.'</p>' : ''; 
        ?>
    </p>
    <p>Email:
        <input type="text" name="email" placeholder="Email">
        <?php 
            echo (!empty($errors['email']['require'])) ? '<p style="color:red">'.'email bat buoc'.'</p>' : ''; 
            echo (!empty($errors['email']['invalid'])) ? '<p style="color:red">'.'email khong hop le'.'</p>' : ''; 
        ?>
        

    </p>
    <button type="submit">submit</button>
</form>