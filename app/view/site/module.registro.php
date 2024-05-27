<div class="background-image"></div>
<div class="pre-header">
    <div class="logo">
        <img src="<?=__BASEPATH__?>img/logoesquerda_1.png" alt="Logo">
    </div>
</div>
<div class="registro-container">
    <div class="registrologo">
        <img src="<?=__BASEPATH__?>img/registro.png" alt="Logo">
    </div>
    <form action="register_process.php" method="post">
        <div class="input-container">
            <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="input-container">
            <input type="text" name="usuario" placeholder="Usuário" required>
        </div>
        <div class="input-container">
            <input type="text" id="cpf" name="cpf" placeholder="CPF: xxx.xxx.xxx-xx" required>
        </div>
        <div class="input-container">
            <input type="tel" id="numero" name="numero" placeholder="Número: (xx) xxxxx-xxxx" required>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Senha" required>
        </div>
        <button type="submit" class="submit-btn">Registre-se</button>
        <div class="btn-home">
            <a href="<?=__BASEPATH__?>">Voltar para página inicial</a>
        </div>
        <div class="btn-home2">
            <a href="<?=__BASEPATH__?>login">Tela de login</a>
        </div>
    </form>
</div>

<div class="footer-bottom">
    <p>&copy; 2023 Snake Store. Todos os direitos reservados.</p>
</div>
    
<script>
    $(document).ready(function() {
        $(".btn-home").click(function() {
            window.location.href = "<?=__BASEPATH__?>";
        });

        $(".btn-home2").click(function() {
            window.location.href = "<?=__BASEPATH__?>login";
        });

        $("#cpf").mask("999.999.999-99");
        $("#telefone-input").mask("(99) 99999-9999");
    });
</script>