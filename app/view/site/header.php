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
                <button class="btn-help">Para daltônicos</button>
                <select id="colorblind-select" onchange="applyColorblindFilter()">
                    <option value="normal">Normal</option>
                    <option value="protanopia">Protanopia</option>
                    <option value="deuteranopia">Deuteranopia</option>
                    <option value="tritanopia">Tritanopia</option>
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
                    <input type="text" placeholder="Buscar" onkeypress="buscar('<?=__BASEPATH__?>', event, value)">
                    <span class="search-icon">
                        <img src="<?=__BASEPATH__?>img/lupa.png"
                            alt="Lupa">
                    </span>
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