<?php
	$arr = ['понедельник', "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];

	foreach ($arr as $i => $elem) {
		if ($i == 5 || $i == 6) {
			print('<b>' . $elem . '</b>');
		} else {
            print($elem);
        }
	}