
    <?php include 'headerlogin.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="auth-card">
                <div class="auth-header">
                    <i class="fas fa-user-plus"></i>
                    <h2>Créer un compte étudiant</h2>
                    <p>Rejoignez la plateforme et commencez à apprendre</p>
                </div>

                <form action="register_process.php" method="POST" class="auth-form">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" placeholder="Jean Dupont">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="jean.dupont@email.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required placeholder="Minimum 8 caractères">
                    </div>

                    <div class="form-group">
                        <label for="password_confirm">Confirmer le mot de passe</label>
                        <input type="password" id="password_confirm" name="password_confirm" required placeholder="Retapez votre mot de passe">
                    </div>

                    <button type="submit" class="btn-primary full-width">
                        <i class="fas fa-user-plus"></i> Créer mon compte
                    </button>
                </form>

                <div class="auth-footer">
                    <p>Déjà un compte ? <a href="login.php">Se connecter</a></p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
