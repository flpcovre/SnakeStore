  <script>
        const header = document.querySelector('header');
        const headerOffsetTop = header.offsetTop;

        function checkHeaderPosition() {
            if (window.pageYOffset >= headerOffsetTop) {
                header.classList.add('fixed');
            } else {
                header.classList.remove('fixed');
            }
        }

        window.addEventListener('scroll', checkHeaderPosition);
    </script>

    <header>
        <!-- Pré header -->
        <div class="pre-header">
            <div class="logo">
                <img src="<?=__BASEPATH__?>img/logoesquerda_1.png"
                    alt="Logo" >
            </div>
            <div class="buttons">
                <button id="toggleButton" class="btn-help">Ativar Zoom</button>
                <select id="zoom-select" onchange="">
                    <option value="1.5">1.5x</option>
                    <option value="2.5">2.5x</option>
                    <option value="3.5">3.5x</option>
                </select>
                <hr class="hr-styled">
                <button class="btn-help">Para daltônicos</button>
                <select id="colorblind-select" onchange="applyColorblindFilter('<?=__BASEPATH__?>', 'home')">
                    <option value="normal" <?php if ($_SESSION['colorBlind'] == 'normal') echo 'selected'?>>Normal</option>
                    <option value="protanopia" <?php if ($_SESSION['colorBlind'] == 'protanopia') echo 'selected'?>>Protanopia</option>
                    <option value="deuteranopia" <?php if ($_SESSION['colorBlind'] == 'deuteranopia') echo 'selected'?>>Deuteranopia</option>
                    <option value="tritanopia" <?php if ($_SESSION['colorBlind'] == 'tritanopia') echo 'selected'?>>Tritanopia</option>
                </select>
                <hr class="hr-styled">
                <button class="btn-help">Ajuda</button>
                <hr class="hr-styled">
                <button class="btn-join">Junte-se a nós</button>
                <hr class="hr-styled">
                <button class="btn-login" onclick="redirect('<?=__BASEPATH__?>login')">Entrar</button> 
            </div>
        </div>

        <!-- Main header -->
        <div class="main-header">
            <div class="logo2">
                <a href="<?=__BASEPATH__?>">
                    <img src="<?=__BASEPATH__?>img/logoloja.png"
                        alt="Logo">   
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="<?=__BASEPATH__?>produtos">Produtos</a></li>
                    <li><a href="<?=__BASEPATH__?>produtos">Ofertas</a></li>
                    <li><a href="<?=__BASEPATH__?>produtos">Tênis</a></li>
                    <li><a href="<?=__BASEPATH__?>produtos">Acessórios</a></li>
                </ul>
            </div>
            <div class="search-cart">
                <div class="search">
                    <form id="buscarForm" action="<?=__BASEPATH__?>produtos/buscar" method="POST">    
                        <input type="text" placeholder="Buscar" name="item" onkeypress="buscar(event)">
                        <span class="search-icon" style="cursor: pointer;" onclick="buscar(event = null, button = true)">
                            <img src="<?=__BASEPATH__?>img/lupa.png"
                                alt="Lupa">
                        </span>
                    </form>
                    <button class="cart-button">
                        <img src="<?=__BASEPATH__?>img/carrinho.png"
                            alt="Carrinho">
                    </button>
                </div>
            </div>
        </div>

        <!-- Pós header -->
        <div class="pos-header">
            <div class="line"></div>
        </div>
            
    </header>