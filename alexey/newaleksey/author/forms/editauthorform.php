
<form action="treatmentEdit.php" name="EditDB" method="GET">
    <input type="text" name="AuthorNameEdit" value="<?= $values['name'] ?>">
    <input type="text" name="AuthorAgeEdit" value="<?= $values['age'] ?>">
    <input type="hidden" name="AuthorId" value="<?= $authorID ?>">
    <input type="submit" value="Edit">
</form>
<a href="index.php">К перечню авторов</a>