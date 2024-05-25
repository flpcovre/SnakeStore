  <div class="background-image"></div>
    <div class="pre-header">
        <div class="logo">
            <img src="/trabalho2/img/logoesquerda_1.png" alt="Logo">
        </div>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const passwordInput = document.querySelector('input[name="password"]');
            const passwordToggle = document.createElement("span");
            passwordToggle.className = "password-toggle fa fa-eye";
            passwordToggle.onclick = togglePasswordVisibility;

            passwordInput.parentNode.appendChild(passwordToggle);

            function togglePasswordVisibility() {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    passwordToggle.classList.remove("fa-eye");
                    passwordToggle.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    passwordToggle.classList.remove("fa-eye-slash");
                    passwordToggle.classList.add("fa-eye");
                }
            }
        });
        </script>

        <script>
            $(document).ready(function() {
                $(".btn-register").click(function() {
                    window.location.href = "<?=__BASEPATH__?>registro";
                });

                $(".btn-home").click(function() {
                    window.location.href = "<?=__BASEPATH__?>";
                });
            });
        </script>

        <div class="buttons">
            <button class="btn-register">Registre-se</button>
            <hr class="hr-styled">
        </div>
    </div>
    <div class="login-container">
        <div class="logo2">
            <img src="/trabalho2/img/logoloja.png" alt="Logo">
        </div>
        <form action="login_process.php" method="post">
            <div class="input-container">
                <input type="text" name="username" placeholder="Usuário" required>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Senha" required>
            </div>
            <div class="remember-me-container">
                <label for="rememberMe">Lembrar-me</label>
                <input type="checkbox" id="rememberMe">
                <div class="forgot-password">
                    <a href="#">Esqueceu a senha?</a>
                </div>
            </div>
                <button type="submit" class="submit-btn">Entrar</button>
                <div class="btn-home">
            <div class="btn-home">
                <a href="<?=__BASEPATH__?>">Voltar para página inicial</a>
            </div>
        </div>
    </form>
</div>
        <div class="footer-bottom">
            <p>&copy; 2023 Snake Store. Todos os direitos reservados.</p>
        </div>
</body>