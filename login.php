
    <?php include 'headerlogin.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="auth-card">
                <div class="auth-header">
                    <i class="fas fa-user-lock"></i>
                    <h2>Connexion à votre compte</h2>
                    <p>Accédez à vos cours et à votre tableau de bord</p>
                </div>

                <form action="login_process.php" method="POST" class="auth-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"  placeholder="votre@email.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password"  placeholder="••••••••">
                        <?php if(isset($_GET['errure'])){
                            if($_GET['errure'] == '0'){
                            echo "<p style='color:red'>
                                    mot de passe incorrect!
                                 </p>";}
                             if($_GET['errure'] == '1'){
                            echo "<p style='color:red'>
                                    vous n'etes pas inscrire!
                                 </p>";}

                        }
                         ?>
                    </div>

                    <button type="submit" class="btn-primary full-width">
                        <i class="fas fa-sign-in-alt"></i> Se connecter
                    </button>
                </form>

                <div class="auth-footer">
                    <p>Pas encore de compte ? <a href="register.php">Inscrivez-vous</a></p>
                    <p><a href="courses_list.php">Continuer sans connexion</a></p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
