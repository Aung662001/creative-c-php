<?php require "views/partials/header.php" ?>
<h1>Submit Your Name </h1>
<?php foreach($users as $user):?>
<ul>
    <li><?=$user->name?></li>
</ul>
<?php endforeach; ?>
<form action="name" method="post">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>

<?php require "views/partials/footer.php" ?>