<form method="post" action="">
    <input type="text" name="fullname" placeholder="Ho Ten">
    <input type="text" name="email" placeholder="Email">
    <button type="submit">submit</button>
    <?php
    if(isset($_POST['fullname'])){
        echo '<pre>';
        print_r($_POST['fullname']);
        echo '</pre>';
    }
        
    ?>
</form>