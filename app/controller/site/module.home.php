<?php

$conn = new Statement();
$action = $request->get('action');

if ($action == 'toggleColorBlind') {
	if (isset($_POST['color'])) {
		$_SESSION['colorBlind'] = $_POST['color'];
	}
	exit;
}

$sql = "SELECT * FROM produtos LIMIT 5";

$rs = $conn->prepareStatement($sql)->executeReader();

$string = '';

while ($rs->next()) {
	$string .= "<div class=\"card-product\" aria-label=\"{$rs->getString('nome')}\">
	<img src=\"{$rs->getString('url_imagem')}\" alt=\"{$rs->getString('nome')}\"</img>
	<h3 onclick=\"speak('{$rs->getString('nome')}')\">{$rs->getString('nome')}</h3>
	<h5>{$rs->getString('tipo')}</h5>
	<button class=\"product-price\" onclick=\"redirect('" . __BASEPATH__ . "produtos/view/id/{$rs->getInt('id')}')\">R$ " . number_format($rs->getString('valor'), 2, ',', '.') . "</button>
	</div>";
}

$view['produtos'] = $string;

