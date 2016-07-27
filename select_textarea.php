Наша форма:
​
<form action="" name="test-form" method="GET">
    Город:
    <select name="city">
        <option value="1">Харьков</option>
        <option value="2">Киев</option>
        <option value="3">Одесса</option>
    </select>
    <br />
    <textarea name="long_text"></textarea>
    <input type="submit" value="Кнопка!">
</form>
<pre>
<?php
print_r($_GET);