<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<center>
<H1>Форма записи студентов на языковые курсы</H1></center>

<?php

$is_valid = True;

$name_ex = "/^([А-Я][а-я]*)(\-|\s[А-Я][а-я])$/";

$surname_result = preg_match($name_ex, $_POST['surname']);
if ($surname_result == 0) {
	echo "Фамилия должна содержать только русские буквы, первая буква — заглавная, допускается использование дефиса и пробела <br/>";
	$is_valid = False;
};

$name_result = preg_match($name_ex, $_POST['surname']);
if ($name_result == 0) {
	echo "Имя должно содержать только русские буквы, первая буква — заглавная, допускается использование дефиса и пробела <br/>";
	$is_valid = False;
};

$patronymic_result = preg_match($name_ex, $_POST['surname']);
if ($patronymic_result == 0) {
	echo "Отчество должно содержать только русские буквы, первая буква — заглавная, допускается использование дефиса и пробела <br/>";
	$is_valid = False;
};

if (filter_var($_POST['e_mail'], FILTER_VALIDATE_EMAIL) == false) {
	echo "Некорректный email <br/>";
	$is_valid = False;
};

$phone_reslut = preg_match("/^(\+7|8)\s?[0-9]{3,}\s?[0-9]{3,}(\s|\-)?[0-9]{2,}(\s|\-)?[0-9]{2,}$/", $_POST['phone']);
if ($phone_reslut == 0) {
	echo "Некорректный номер <br/>";
};


if (!$is_valid) {
	if (empty($_POST['surname']) || 
		empty($_POST['name']) ||
		empty($_POST['patronymic']) ||
		empty($_POST['yearofs']) ||
		empty($_POST['languages']) ||
		empty($_POST['e_mail']) ||
		empty($_POST['phone']))
		{
			echo '<H3> К сожалению, Вы не заполнили поля:</H3>
				
				<ul style="color:#ff0000">';
			if(empty($_POST['surname'])) echo '<li> Фамилия </li>';
			if(empty($_POST['name'])) echo '<li> Имя </li>';
			if(empty($_POST['patronymic'])) echo '<li> Отчество </li>';
			if(empty($_POST['yearofs'])) echo '<li> Год обучения </li>';
			if(empty($_POST['languages'])) echo '<li> Желаемые языки </li>';
			if(empty($_POST['e_mail'])) echo '<li> Адрес электронной почты </li>';
			echo '</ul>';
		}
	else
		{
			$file='data.txt';
			$fl = fopen('data.txt', 'a');
			
			$phone = $_POST['phone'];
			$phone = preg_replace("/^(\+7|8)\s?(\d{3})\s?(\d{3})(\s|\-)?(\d{2})(\s|\-)?(\d{2})$/", "\\1 \\2 \\3-\\5-\\7", $phone);
			
			fwrite($fl, $_POST['surname'].'|'.$_POST['name'].'|'.$_POST['patronymic'].'|'.$_POST['yearofs'].'|'.$phone.'|'.$_POST['month'].'|'.$_POST['year'].'|'.$_POST['e_mail'].'|');
			echo 'Здравствуйте, '.$_POST['name'].'!<br>';
			echo 'Ваша заявка о прохождении языковых курсов получена.<br>';
			echo '<I>Регистрационные данные:</I><br> <hr>';
			echo '<B> Фамилия:</B> ',$_POST['surname'].'<br>';
			echo '<B> Имя:</B> ',$_POST['name'].'<br>';
			echo '<B> Отчество:</B> ',$_POST['patronymic'].'<br>';
			echo '<B> Студент</B> '.$_POST['yearofs'].'-го курса<br>';
			echo '<B> Дата рождения:</B> '.$_POST['number'].' '.$_POST['month'].' '.$_POST['year'].'<br>';
			echo '<B> E-mail:</B> '.$_POST['e_mail'].'<br>';
			echo '<B> Языковая подготовка: '.$_POST['addInf'].'<br><hr>';
			
			if (in_array ( 'fr' , $_POST['languages'])) 
			{
				echo "Организационное собрание о курсах французского языка состоится <b>23 октября 2018</b> года в <b>11:00</b> в аудитории <b>420</b>. <br> ";
				fwrite($fl,'Французский'.'|');
			}
			
			else fwrite($fl, '0'.'|');
			if (in_array ( 'is' , $_POST['languages']))
			{
				echo "Организационное собрание о курсах испанского языка состоится <b>27 октября 2018</b> года в <b>10:00</b> в аудитории <b>433</b>. <br> ";
				fwrite($fl,'Испанский'.'|');
			}
			
			else fwrite($fl, '0'.'|');
			if (in_array ( 'it' , $_POST['languages'])) 
			{
				echo "Организационное собрание о курсах итальянского языка состоится <b>29 октября 2018</b> года в <b>12:00</b> в аудитории <b>501</b>. <br> ";
				fwrite($fl,'Итальянский'.'|');
			}
			
			else fwrite($fl, '0'.'|');
			if (in_array ( 'po' , $_POST['languages'])) 
			{
				echo "Организационное собрание о курсах португальского языка состоится <b>25 октября 2018</b> года в <b>11:30</b> в аудитории <b>402</b>. <br> ";
				fwrite($fl,'Португальский'.'|');
			}
			
			else fwrite($fl, '0'.'|');
			if (in_array ( 'ki' , $_POST['languages'])) 
			{
				echo "Организационное собрание о курсах китайского языка состоится <b>20 октября 2018</b> года в <b>9:00</b> в аудитории <b>400</b>. <br> ";
				fwrite($fl,'Китайский'.'|');
			}
			
			else fwrite($fl, '0'.'|');
			fwrite($fl, $_POST[addInf]."\r\n");
			fclose($fl);
		}
}

	
	
	

?>

	
