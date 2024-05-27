-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2024 às 01:19
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_tenis`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `valor` float NOT NULL,
  `url_imagem` text NOT NULL,
  `descricao` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tipo`, `valor`, `url_imagem`, `descricao`) VALUES
(52, 'Nike SB Dunk Low J-Pack Chicago', 'Lowest Ask', 339, '/SnakeStore/img/produto15.png', 'O Dunk adjacente ao skate apresenta uma biqueira de couro branco perfurada com paredes de painel central de couro branco. Sobreposições de couro vermelho flamejante pontilham o antepé, os ilhós e o calcanhar. A marca aparece na forma de um swoosh de couro preto em cada lado do sapato, bordado “Nike” tonal no calcanhar e detalhes Nike SB brancos acentuados na lingueta de náilon vermelho. Dado que esta é a versão skatável do Dunk, o sapato exibe uma língua de malha branca fofa para absorção de impacto. Os toques finais incluem rendas de algodão preto e sola intermédia em dois tons branca e sola vermelha.'),
(53, 'Nike SB Dunk Low Pro Why So Sad?', 'Lowest Ask', 156, '/SnakeStore/img/produto16.png', 'O Why So Sad? x Nike SB Dunk Low apresenta uma base de couro azul claro e línguas de malha com sobreposições rasgadas em azul escuro para revelar o amarelo por baixo. Um logotipo de galinha com skate bordado no calcanhar lateral, “Why So Sad?” marca na etiqueta interna da língua e pontos de interrogação bordados nos calcanhares. Uma entressola branca no topo de uma sola translúcida completa o design.'),
(54, 'Nike SB Dunk Low Sandy Bodecker', 'Lowest Ask', 110, '/SnakeStore/img/produto17.png', 'O Nike Dunk Low SB \'Sandy Bodecker\' apresenta um design exclusivo inspirado no único Charity Dunk de 2003. O cano baixo utilizava um cabedal de couro envernizado com as cores exclusivas do eBay, o site popular onde o sapato era vendido em um leilão de caridade beneficiando skateparks da área de Portland. Deixado um mistério por anos, o vencedor do mistério acabou sendo revelado como Sandy Bodecker, o \'patriarca do skate da Nike\'. de janelas cortadas translúcidas. Dentro do sapato, palmilhas de fotografia personalizadas, cortesia do designer James Arizumi, exibem imagens que homenageiam o legado duradouro de Sandy Bodecker.'),
(55, 'Nike SB Dunk Low Travis Scott', 'Lowest Ask', 1200, '/SnakeStore/img/produto18.png', 'A Nike, em mais uma parceria de sucesso com um dos maiores rappers do cenário mundial, Travis Scott, lança o primeiro tênis para os amantes do skate com assinatura do músico americano para a linha Nike Dunk Low características do sneaker Nike SB Dunk Low Travis Scott.\n\nComposto pela parte superior de camurça, com aplicações de lona estampada e flanela xadrez, o Nike SB Dunk Low Travis Scott revela uma gravura de elefante conforme a gravura estampada em azul-marinho se desgasta.'),
(56, 'Nike SB Dunk Low Jarritos', 'Lowest Ask', 280, '/SnakeStore/img/produto19.png', 'O Jarritos x Nike Dunk Low SB apresenta um design colaborativo inspirado na popular marca mexicana de refrigerante. A parte superior combina uma base de couro branco Phantom com sobreposições de lona de cânhamo e um Swoosh têxtil verde malaquita. O logotipo Jarritos é bordado em verde e laranja no calcanhar lateral, enquanto a marca dupla embeleza a etiqueta da língua tecida. As abas de calcanhar incompatíveis são estampadas com \'Nike\' e \'Jarritos\' no sapato esquerdo e direito. Ancorando o tênis está uma sola de borracha durável que combina paredes laterais brancas com uma sola verde e laranja de dois tons.'),
(57, 'Nike Dunk Low 3D Swoosh', 'Lowest Ask', 154, '/SnakeStore/img/produto20.png', 'Cinza, branco, couro, detalhe de logo Swoosh, logo posterior bordado, bico arredondado, fechamento frontal por amarração, patch de logo na lingueta, logo na palmilha e solado de borracha. Este item é fornecido por um marketplace premium de tênis que reúne peças raras e já esgotadas.'),
(58, 'Dunk Low Retro Reverse Panda', 'Lowest Ask', 431, '/SnakeStore/img/produto21.png', 'Semelhante à sua contraparte muito amada, o “Reverse Panda” emprega uma paleta simples de preto sobre branco. O bloqueio de cores, no entanto, é um desvio do par mencionado acima: o mais claro dos dois neutros é usado nas sobreposições e Swoosh, enquanto o tom oposto fica por baixo. Abaixo, a única unidade também é invertida, revertendo a aparência que estamos acostumados a ver no amado design de Peter Moore.'),
(59, 'Jordan 1 Retro High OG “Chicago”', 'Lowest Ask', 330, '/SnakeStore/img/produto8.png', 'O Air Jordan 1 Retro High “Chicago” retornou para o verão de 2015 como parte da linha remasterizada da Jordan Brand. Após seu lançamento retro altamente antecipado em 2013, o Air Jordan 1 Retro High OG “Chicago” receberá o tratamento “OG” construído com materiais premium. O tênis vem em seu esquema de cores original branco, preto e vermelho. Apresentando o tratamento Nike Air exibido na língua e nas cores do Chicago Bulls.\n\nProdutos relacionados\nNIKE - Air Jordan 1 Retro \"Newstalgia\" -NOVO-\nNIKE - Air Jordan 1 Retro \"Newstalgia\" -NOVO-\n12x de R$ 120,83\nA partir de R$ 1.450,00\nComprar Agora \n43%\nNIKE - Air Jordan 1 Retro \"Atmosphere\" -NOVO-\nNIKE - Air Jordan 1 Retro \"Atmosphere\" -NOVO-\n12x de R$ 203,75\nA partir de R$ 2.445,00\nComprar Agora \nNIKE - Air jordan 1 Retro \"Starfish\" -NOVO-\nNIKE - Air jordan 1 Retro \"Starfish\" -NOVO-\n12x de R$ 262,91\nR$ 3.155,00\nComprar Agora \nNIKE - Air Jordan 1 Retro \"Sail\" -NOVO-\nNIKE - Air Jordan 1 Retro \"Sail\" -NOVO-\n12x de R$ 314,16\nR$ 3.770,00\nComprar Agora \nPineapple Co.\nSOBRE A LOJA\nAtuando no mercado desde 2015, com a finalidade de disponibilizar aos nossos clientes itens de lançamentos exclusivos, limitados ou de venda exclusiva no exterior, somos especializados em tênis e itens de streetwear e objetos colecionáveis em que na maioria dos casos esgotam de imediato no lançamento. Nosso objetivo é criar um mercado de revenda, onde você se sinta seguro ao comprar e vender produtos de forma autêntica.\n\nCATEGORIAS\nSALE\nACESSÓRIOS\nCALÇADOS\nVESTUÁRIO\nART & TOY\nSHOE CARE\nSKATE\nMARCAS\nVINTAGE\nCONTEÚDO\nFale Conosco\nPolítica de Devolução\nPolítica de Troca\nPolítica de Frete e Prazos\nPolítica de Privacidade\nConsiderações Finais\nSOCIAL\n\nPAGUE COM\nproxy-paypal-express-checkout\nSELOS\nSite Seguro\nPINEAPPLE EXPRESS PRESTACAO DE SERVICO DE INTERMEDIACAO LTDA - CNPJ: 41.522.521/0001-96 © Todos os direitos reservados. 2024\n\nChiclÃ© Theme Templates Loja VirtualLoja Integrada\nUtilizamos cookies para que você tenha a melhor experiência em nosso site. Para saber mais acesse nossa página de Política de Privacidade\n\nEntendi\nTOPO\n'),
(60, 'Air Jordan 1 High OG “Bred”', 'Lowest Ask', 1800, '/SnakeStore/img/produto9.png', 'Quando você amarra um AJ1, você sabe que está sob os holofotes. E quando está revestido de cetim brilhante (na mesma cor preto e vermelho do original de 85), essa luz brilha de volta. Este retorno de 2016 também vem com um par extra de cadarços para que você possa trocá-los ou dobrá-los. Observe a bolsa: uma bolsa Jumpman está incluída para carregar todos os seus elogios.'),
(61, 'Air Jordan 1 High OG “Royal”', 'Lowest Ask', 308, '/SnakeStore/img/produto10.png', 'O Air Jordan 1 Retro High OG ‘Hyper Royal’ assume uma estética envelhecida, destacada por uma parte superior de couro branco com sobreposições de camurça azul desbotada. Golpes de cinza neutro contrastantes pousam no Swoosh e na gola acolchoada, adicionando à paleta discreta do tênis. Os elementos da marca OG incluem um logotipo Jordan Wings na aba lateral do colarinho e uma lingueta Nike trançada. O cano alto é montado em uma copa de borracha AJ1 padrão, com amortecimento Nike Air encapsulado no calcanhar.'),
(62, 'Jordan 1 Retro High Court “Purple”', 'Lowest Ask', 386, '/SnakeStore/img/produto11.png', 'A lendária silhueta de Michael Jordan retorna em uma nova versão de uma colorway antiga. O Air Jordan 1 High Court Purple 2.0 foi lançado em 2020 e é uma nova versão da colorway Court Purple lançada antigamente, desta vez o sneaker traz um esquema de cores positivamente majestoso como parte dos esforços contínuos da Jordan na produção de cobiçadas cores Jordan 1 não originais.'),
(63, 'Jordan 1 Mid SE Space Jam', 'Lowest Ask', 169, '/SnakeStore/img/produto12.png', 'O tênis que causou mais alvoroço na história sneakerhead ganha uma nova colorway incrível para abrilhantar os passos dos apaixonados por este incrível e histórico calçado.'),
(64, 'Jordan 1 Mid SE Lakers', 'Lowest Ask', 207, '/SnakeStore/img/produto13.png', 'O Air Jordan 1 Mid “Lakers” é uma edição especial do mid-top Jordan 1 inspirado no Los Angeles Lakers. O Jordan 1 Mid está equipado com as cores do time Michael Jordan e o Chicago Bulls derrotado nas finais da NBA de 1991.'),
(65, 'Jordan 1 Retro High OG Washed Black', 'Lowest Ask', 170, '/SnakeStore/img/produto14.png', 'Camurça cinza, couro branco, detalhes em preto arrojados - soam atemporais para nós. É um daqueles combos que vão elevar qualquer ajuste, para qualquer evento. Tipo, deixe seus tênis brilharem com algum moletom para um passeio de domingo preguiçoso, mas elegante. Podemos até ver essas beldades limpas indo bem em um evento de gala. As opções são infinitas, a escolha é sua.'),
(66, 'Jordan 4 Retro Metallic Purple (GS)', 'Lowest Ask', 510, '/SnakeStore/img/produto1.png', 'Lançado como parte de um pacote metálico de quatro peças, o Air Jordan 4 Retro \'Purple Metallic\' apresenta um esquema de cores de dois tons simples na clássica silhueta mid-top. O tênis utiliza uma estrutura de couro branco imaculada, acentuada com toques violetas de cores contrastantes nos ilhós moldados, unidade Air visível e hits de marcas externas, incluindo logotipos Jumpman exclusivos na etiqueta de língua e no painel de salto.'),
(67, 'Jordan 4 Retro Black Cat (2020)', 'Lowest Ask', 769, '/SnakeStore/img/produto2.png', 'A edição 2020 do Air Jordan 4 Retro \'Black Cat\' traz de volta o colorido preto da silhueta clássica, que se inspira em um dos vários apelidos de Michael Jordan. Como no lançamento original de 2006, este par usa uma parte superior de camurça preta monocromática com uma entressola preta correspondente. A marca Jumpman na etiqueta de língua tecida é renderizada em Light Graphite, representando o único elemento de design contrastante do tênis.'),
(68, 'Air Jordans 4 Retro Off-White Sail', 'Lowest Ask', 884, '/SnakeStore/img/produto3.png', 'Virgil Abloh volta a trabalhar silhuetas da Jordan nessa criação única, a silhueta escolhida da vez foi a lendária Air Jordan 4. Após espreitadelas em Paris e Chicago, sua mais recente colaboração finalmente chegou, ostentando o texto em negrito patenteado da marca gráficos e uma maquiagem de cores suaves.'),
(69, 'Jordan 4 Retro Red Thunder', 'Lowest Ask', 351, '/SnakeStore/img/produto4.png', 'O Air Jordan 4 desembarcou pela primeira vez em 1989, e décadas depois, seus detalhes especiais continuam fazendo história. A parte superior em nobuck, os recortes em mesh nas laterais e na parte inferior da língua e a unidade de Air visível estão de volta, mas em uma nova paleta de cores típica para a temporada. '),
(70, 'Jordan 4 Retro Fire Red (2020)', 'Lowest Ask', 500, '/SnakeStore/img/produto5.png', 'O Nike Air Jordan 4 Retro \'Fire Red\' 2012 baseia-se no colorway 1989 White / Fire Red OG. O design combina uma parte superior em couro branco, detalhes em vermelho fogo e preto e uma sola azul-gelo.\nLançado em agosto de 2012, o tênis também apresenta a marca Jumpman na língua e no calcanhar. Os tênis também foram lançados em 2006, mas foram chamados de Air Mars 4 Retro \'Mars\'.'),
(71, 'Jordan 4 Retro Thunder (2023)', 'Lowest Ask', 295, '/SnakeStore/img/produto6.png', 'A edição de 2023 do Air Jordan 4 Retro \'Thunder\' traz de volta o cobiçado colorway originalmente lançado em 2006 (e reeditado anteriormente em 2012). A parte superior é envolta em nubuck preto liso, contrastando com toques de amarelo nos ilhós moldados, painel lateral e língua inferior, com os dois últimos componentes cobertos por rede preta.'),
(72, 'Jordan 4 Retro SB (Pine Green)', 'Lowest Ask', 389, '/SnakeStore/img/produto7.png', 'Este Air Jordan 4 apresenta uma parte superior de couro branco com sobreposições de camurça cinza neutro e detalhes contrastantes em verde pinho nos ilhós e na entressola. “Nike SB” substituindo “Nike Air/Jumpman” nos calcanhares com marca de língua vermelha no topo de uma entressola branca e sola de borracha Gum completam o design. Co-branding e embalagem especial também estão incluídos.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `usuario`, `cpf`, `numero`, `senha`) VALUES
(1, 'ericluiz2109@gmail.com', 'elpo13', '122.164.167-03', '27998151905', '123456'),
(26, 'ericluiz2109@gmail.com', 'elpo12', '122.122.122-12', '27998158765', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
