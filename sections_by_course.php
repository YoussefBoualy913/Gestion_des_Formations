<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sections du cours - MonLMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="page-header">
                <div>
                    <h2>PHP 8 Procédural & MySQL</h2>
                    <p class="course-subtitle">18 sections • Niveau Intermédiaire</p>
                </div>
                <a href="sections_create.php?course_id=2" class="btn-primary">
                    <i class="fas fa-plus"></i> Ajouter une section
                </a>
            </div>

            <div class="sections-list">
                <!-- Exemple de section -->
                <div class="section-item">
                    <div class="section-order">#1</div>
                    <div class="section-content">
                        <h4>Introduction au projet LMS</h4>
                        <p>Présentation du brief et des objectifs du mini-projet.</p>
                    </div>
                    <div class="section-actions">
                        <a href="sections_edit.php?id=10" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="sections_delete.php?id=10" class="btn-delete"><i class="fas fa-trash"></i></a>
                    </div>
                </div>

                <div class="section-item">
                    <div class="section-order">#2</div>
                    <div class="section-content">
                        <h4>Conception de la base de données (ERD)</h4>
                        <p>Création des tables courses et sections avec relation 1:N.</p>
                    </div>
                    <div class="section-actions">
                        <a href="sections_edit.php?id=11" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="sections_delete.php?id=11" class="btn-delete"><i class="fas fa-trash"></i></a>
                    </div>
                </div>

                <!-- Tu répètes autant que nécessaire -->
            </div>

            <div style="margin-top: 2rem;">
                <a href="courses_list.php" class="btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour aux cours
                </a>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>