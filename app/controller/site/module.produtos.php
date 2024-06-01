<?php

$conn = new Statement();
$action = $request->get('action');

if ($action == '' || $action == 'buscar') {

	$sql = "SELECT * FROM produtos";
	
	if (isset($_POST['item'])) {
		$sql .= " WHERE nome LIKE '%{$_POST['item']}%'";
	}

	$rs = $conn->prepareStatement($sql)->executeReader();

	$string = "<div class=\"espacoproduto\">
	    				<div class=\"products-container\">";

	while ($rs->next()) {
		$string .= "<div class=\"card-product\">
						<img src=\"{$rs->getString('url_imagem')}\" alt=\"{$rs->getString('nome')}\"></img>
						<h3 onclick=\"speak('{$rs->getString('nome')}')\">{$rs->getString('nome')}</h3>
						<h5>{$rs->getString('tipo')}</h5>
						<button class=\"product-price\" onclick=\"redirect('" . __BASEPATH__ . "{$view['module']}/view/id/{$rs->getInt('id')}')\">R$ " . number_format($rs->getString('valor'), 2, ',', '.') . "</button>
					</div>";
	}

	$string .= "</div>
			</div>";

	$view['produtos'] = $string;	

} else if ($action == 'view') {

	$id = $request->get('id');

	$sql = "SELECT * FROM produtos WHERE id = {$id}";

	$rs = $conn->prepareStatement($sql)->executeReader();

	if ($rs->next()) {
		$view['produtos'] = "<div class=\"container\">
							    <div class=\"card\">
							        <div class=\"shoeBackground\">

							            <h1 class=\"nike\">nike</h1>
							            <img src=\"img/logo.png\" alt=\"\" class=\"logo-card\">
							            <a href=\"#\" class=\"share\"><i class=\"fas fa-share-alt\"></i></a>

							            <img src=\"{$rs->getString('url_imagem')}\" alt=\"{$rs->getString('nome')}\">
							        </div>
							        <div class=\"info\">
							            <div class=\"shoeName\">
							                <div>
							                    <h1 class=\"big\" onclick=\"speak('{$rs->getString('nome')}')\">{$rs->getString('nome')}</h1>
							                    <span class=\"new\">new</span>
							                </div>
							                <h3 class=\"small\">{$rs->getString('tipo')}</h3>
							            </div>
							            <h3 class=\"title\">Descrição</h3>
							            <div class=\"description\">
							                <p class=\"text\" onclick=\"speak('{$rs->getString('descricao')}')\">{$rs->getString('descricao')}</p>
							            </div>
							            <div class=\"color-container\">
							                <h3 class=\"title\">Cores</h3>
							                <div class=\"colors\">
							                    <span class=\"color active\" primary=\"#2175f5\" color=\"blue\"></span>
							                    <span class=\"color\" primary=\"#f84848\" color=\"red\"></span>
							                    <span class=\"color\" primary=\"#29b864\" color=\"green\"></span>
							                    <span class=\"color\" primary=\"#ff5521\" color=\"orange\"></span>
							                    <span class=\"color\" primary=\"#444\" color=\"black\"></span>
							                </div>
							            </div>
							            <div class=\"size-container\">
							                <h3 class=\"title\">Tamanhos</h3>
							                <div class=\"sizes\">
							                    <span class=\"size\">38</span>
							                    <span class=\"size\">39</span>
							                    <span class=\"size\">40</span>
							                    <span class=\"size\">41</span>
							                </div>
							            </div>
							            <div class=\"buy-price\">
							                <a href=\"#\" class=\"buy\"><i class=\"fas fa-shopping-cart\"></i>Adicionar ao Carrinho</a>
							                <div class=\"price\">
							                    <i>R$</i>
							                    <h1>{$rs->getString('valor')}</h1>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>";
	}
}