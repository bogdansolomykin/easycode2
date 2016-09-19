<form action="editauthorsave.php" name="editAuthor" method="GET">
    Имя автора: <input type="text" name="newName" value="<?= $name ?>">
    Возраст: <input type="text" name="newAge" value="<?= $age ?>">
    <input type="hidden" name="idAuthorToEdit" value="<?= $idToEdit ?>">
    <input type="submit" name="editAuthorButton" value="Save!">
</form>
