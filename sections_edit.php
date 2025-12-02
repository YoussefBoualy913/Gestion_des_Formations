<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une section - MonLMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="form-wrapper">
                <h2><i class="fas fa-file-alt"></i> Nouvelle section</h2>
                <p class="course-subtitle">Cours : PHP 8 Procédural & MySQL</p>

                <form action="sections_store.php" method="POST" class="course-form">
                    <input type="hidden" name="course_id" value="2">

                    <div class="form-group">
                        <label for="title">Titre de la section *</label>
                        <input type="text" id="title" name="title" required placeholder="Ex : Les boucles en PHP">
                    </div>

                    <div class="form-group">
                        <label for="position">Position dans le cours *</label>
                        <input type="number" id="position" name="position" min="1" value="19" required>
                        <small>Plus le chiffre est grand, plus la section apparaît en bas</small>
                    </div>

                    <div class="form-group">
                        <label for="content">Contenu / Résumé</label>
                        <textarea id="content" name="content" rows="10" placeholder="Écrivez ici le contenu détaillé de la section..."></textarea>
                    </div>

                    <div class="form-actions">
                        <a href="sections_by_course.php?id=2" class="btn-secondary">Annuler</a>
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-save"></i> Enregistrer la section
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>