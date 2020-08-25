Если я прожил 943 миллиона секунд, то каков мой
возраст? Добавить возможность задавать количество секунд.

<form action='<?= htmlentities($_SERVER['SCRIPT_NAME']) ?>' method='post'>
Напишите ваше любимое число: <input type='text' name='number'/>
<input type='hidden' name='stage' value='<?= $stage + 1 ?>'/>
<input type='submit' value='Next'/>
</form>