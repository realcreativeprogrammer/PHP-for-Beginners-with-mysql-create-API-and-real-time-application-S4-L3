<form method='get'> 
    <input type='text' name='firstname' >
    <input type='submit' value='get data' name='submit'>
</form>
<?php
// echo $_GET['id'].'<br>';
// echo $_GET['name'].'<br>';

if(isset($_GET['submit'])){
    echo $_GET['firstname'];
}

?>