<form action="" name="test-form" method="POST">
    Слово: <input type="text" name="word" /> <br />
    Повторы:
    <select name="repeat">
        <?php for ($i = 0; $i < 100; $i++): ?>
            <option value="<?php echo $i ?>"><?= $i ?></option>
        <?php endfor; ?>
    </select>
    <br />
    <input type="submit" value="Кнопка!">
</form>
<?php
$word = $_POST['word'];
for($i = 0; $i < $_POST['repeat']; $i++){
    echo $word . '<br />';
}
?>
<?php if (true) { ?>
    <p style="color: green;">True</p>
<?php } else { ?>
    <p style="color: red;">False</p>
<?php } ?>
