<?php
require_once "../header.php";
require_once "../logic/authHandler.php";
?>
<form class="container text-center form w-25" action="../logic/authHandler.php" method = "POST">

    <label class="form-label row">
        <input class="form-control" name="email" placeholder="Email:" type="text" value="<?= $_POST['email'] ?? '' ?>" >
    </label>
    <label class="form-label row">
        <input class="form-control" name="password" placeholder="Password:" type="text" value="<?= $_POST['password'] ?? '' ?>" >
    </label>

    <input type="submit" name="submit"  value="submit" class="btn btn-success"">

</form>
<?php
echo $_POST["email"];
require_once"../footer.php";