<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<center>
<H1>Форма записи студентов на языковые курсы</H1>
</center>
<form action="action.php" method="POST">
<b>Фамилия</b>
<br>
<input type="text" name="surname"  >
<br>
<b>Имя</b>
<br>
<input type="text" name="name"  >
<br>
<b>Отчество</b>
<br>
<input type="text" name="patronymic"  >
<br>
<b>Дата Рождения</b>
<br>

<select name="number" size="1"	>


<?php
for ($i=1; $i<32; $i++)
{
	echo '<option value='.$i.'>'.$i.'</option>';
}
?>

</select>

<select name="month" size="1">

<option value = "Января">Января</option>;
<option value = "Февраля">Февраля</option>;
<option value = "Марта">Марта</option>;
<option value = "Апреля">Апреля</option>;
<option value = "Мая">Мая</option>;
<option value = "Июня">Июня</option>;
<option value = "Июля"> Июля</option>;
<option value = "Августа"> Августа</option>;
<option value = "Сентября">Сентября</option>;
<option value = "Октября"> Октября </option>;
<option value = "Ноября"> Ноября </option>;
<option value = "Декабря"> Декабря </option>;

</select>


<select name="year" size="1">

<?php
for ($i=1980; $i<2002; $i++)
{
echo '<option value='.$i.'>'.$i.'</option>';
}
?>
</select>

<br>
<b>Выберите год (курс) обучения:</b>
<br>
<input name="yearofs" type = "radio" value="1">1
<input name="yearofs" type = "radio" value="2">2
<input name="yearofs" type = "radio" value="3">3
<input name="yearofs" type = "radio" value="4">4
<input name="yearofs" type = "radio" value="5">5

<br>
<b>Выберите язык(-и), который(-е) Вы бы хотели изучать:</b>
<br>

<input name="languages[]" type="checkbox" value="fr">Французский
<br>
<input name="languages[]" type="checkbox" value="is">Испанский
<br>
<input name="languages[]" type="checkbox" value="it">Итальянский
<br>
<input name="languages[]" type="checkbox" value="po">Португальский
<br>
<input name="languages[]" type="checkbox" value="ki">Китайский
<br>
<b>E-mail:</b>
<br>
<input type="text" name="e_mail" size="25" maxlength="25" value="">

<br>
<b>Телефон:</b>
<br>
<input type="text" name="phone" size="25" maxlength="25" value="">

<br>
<b>Дополнительная информация:</b>
<br>
<textarea name="addInf" cols="50" rows="10" > </textarea>
<br>
<input type="submit" name="okbutton" value="OK">

</form>