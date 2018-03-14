<?php

	$recepient = "test-t7@ukr.net";
	$sitename = "Коловрат-С (Строительные услуги)";

	$name = trim($_POST["name"]);
	$phone = trim($_POST["tel"]);
	$from = trim($_POST["from"]);
	$email = trim($_POST["email"]);

	$app_type = trim($_POST["app_type"]);
	$nedvigimost = trim($_POST["nedvigimost"]);
	$remont = trim($_POST["remont"]);
	$ploshad = trim($_POST["ploshad"]);
	$floor = trim($_POST["floor"]);
	$wall = trim($_POST["wall"]);
	$top = trim($_POST["top"]);
	$electric = trim($_POST["electric"]);
	$water = trim($_POST["water"]);
	$heat = trim($_POST["heat"]);
	$meterial = trim($_POST["meterial"]);

	if ($email) {
		$email = "\nEmail: " . $email;
	}

	$calculate_fields = "\n";

	if ($app_type) { $calculate_fields .= "\nТип помещения: " . $app_type; }
	if ($nedvigimost) { $calculate_fields .= "\nТип недвижимости: " . $nedvigimost; }
	if ($remont) { $calculate_fields .= "\nТип ремонта: " . $remont; }
	if ($ploshad) { $calculate_fields .= "\nПлощадь: " . $ploshad; }
	if ($floor) { $calculate_fields .= "\n+ Выравнивание пола"; }
	if ($wall) { $calculate_fields .= "\n+ Выравнивание стен"; }
	if ($top) { $calculate_fields .= "\n+ Выравнивание потолка"; }
	if ($electric) { $calculate_fields .= "\n+ Замена электрики"; }
	if ($water) { $calculate_fields .= "\n+ Замена системы водоснабжения"; }
	if ($heat) { $calculate_fields .= "\n+ Замена системы отопления"; }
	if ($meterial) { $calculate_fields .= "\n+ Материал нашей фирмы"; }

	$message = "Имя: $name \nТелефон: $phone" . $email . "\nЗаявка с раздела: $from" . $calculate_fields;

	$pagetitle = "Новая заявка с сайта \"$sitename\"";
	mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
