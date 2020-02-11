<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<center>
<H1>Данные о студентах, записавшихся на языковые курсы</H1>
</center>


<?php

$file = file('data.txt');
sort($file, SORT_STRING);
$length = count($file);
echo '<B>Список слушателей курса "'.$_POST['language'].' язык":</B><br>';

$k=1;
for ($i=0; $i<=$length; $i++)
	{
		list( $surname, $name, $patronymic, $kurs, $number, $month, $years, $email,  $fr, $isp, $it, $port, $kit, $txtArea) = preg_split( "/\|/", "$file[$i]" );
	
		if ($fr==$_POST['language']||$isp==$_POST['language'] || $it==$_POST['language'] || $port==$_POST['language'] || $kit==$_POST['language'])
		{
			
			echo $k.'. '."$surname $name $patronymic".'<br>'."Студент $kurs".'<br>'."Дата рождения: $number $month $years года".'<br>'."E-mail: $email".'<br>'."Языковая подготовка: $txtArea".'<br>'.'<br>' ;
			$k++;
		}
	}

if($k==1) echo '<B> Слушателей нет</B>'; else{
echo '<HR>';

		if ( $_POST['language']=="Французский") 
		{
			echo "Организационное собрание о курсах французского языка состоится <b>23 октября 2018</b> года в <b>11:00</b> в аудитории <b>420</b>. <br> ";
			
		}
		if ( $_POST['language']=="Испанский") 
		{
			echo "Организационное собрание о курсах испанского языка состоится <b>27 октября 2018</b> года в <b>10:00</b> в аудитории <b>433</b>. <br> ";
			
		}
		if ( $_POST['language']=="Итальянский") 
		{
			echo "Организационное собрание о курсах итальянского языка состоится <b>29 октября 2018</b> года в <b>12:00</b> в аудитории <b>501</b>. <br> ";
			
		}
		if ( $_POST['language']=="Португальский") 
		{
			echo "Организационное собрание о курсах португальского языка состоится <b>25 октября 2018</b> года в <b>11:30</b> в аудитории <b>402</b>. <br> ";
			
		}
		if ( $_POST['language']=="Китайский") 
		{
			echo "Организационное собрание о курсах китайского языка состоится <b>20 октября 2018</b> года в <b>9:00</b> в аудитории <b>400</b>. <br> ";
			
		}

}





?>