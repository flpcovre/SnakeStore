<?php

$conn = new Statement();

$sql = "SELECT * FROM produtos LIMIT 5";

$rs = $conn->prepareStatement($sql)->executeReader();

$string = '';

while ($rs->next()) {
	$string .= "<div class=\"card-product\">
					<img src=\"{$rs->getString('url_imagem')}\" alt=\"{$rs->getString('nome')}\"
					<h3>{$rs->getString('nome')}</h3>
					<h5>{$rs->getString('tipo')}</h5>
					<button class=\"product-price\" onclick=\"redirect('" . __BASEPATH__ . "produtos/view/id/{$rs->getInt('id')}')\">R$ " . number_format($rs->getString('valor'), 2, ',', '.') . "</button>
				</div>";
}

$view['produtos'] = $string;