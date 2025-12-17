<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - MonLMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

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
                        <input type="email" id="email" name="email" required placeholder="votre@email.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required placeholder="••••••••">
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
</body>
</html>