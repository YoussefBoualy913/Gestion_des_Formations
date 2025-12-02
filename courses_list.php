<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonLMS - Gestion des Cours</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
   <?php include 'header.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="page-header">
                <h2><i class="fas fa-graduation-cap"></i> Gestion des Cours</h2>
                <a href="courses_create.php" class="btn-primary">
                    <i class="fas fa-plus"></i> Nouveau cours
                </a>
                 <a href="sections_list.php" class="btn-secondary">
            Toutes les sections
           </a>
            </div>
           

            <!-- Liste des cours -->
            <div class="courses-grid">
                <!-- Cours 1 -->
                <div class="course-card">
                    <div class="course-header">
                        <span class="level beginner">Débutant</span>
                        <h3>HTML & CSS de A à Z</h3>
                    </div>
                    <p class="course-desc">
                        Apprenez à créer des sites web modernes et responsive avec HTML5 et CSS3.
                    </p>
                    <div class="course-meta">
                        <span><i class="fas fa-book-open"></i> 12 sections</span>
                        <span><i class="fas fa-clock"></i> Créé le 15/11/2025</span>
                    </div>
                    <div class="course-actions">
                        <a href="sections_by_course.php?id=1" class="btn-small">Voir les sections</a>
                        <a href="courses_edit.php?id=1" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="courses_delete.php?id=1" class="btn-delete"><i class="fas fa-trash"></i></a>
                    </div>
                </div>

                <!-- Cours 2 -->
                <div class="course-card">
                    <div class="course-header">
                        <span class="level intermediate">Intermédiaire</span>
                        <h3>PHP 8 Procédural & MySQL</h3>
                    </div>
                    <p class="course-desc">
                        Maîtrisez le PHP procédural et les bases de données MySQL pour vos projets.
                    </p>
                    <div class="course-meta">
                        <span><i class="fas fa-book-open"></i> 18 sections</span>
                        <span><i class="fas fa-clock"></i> Créé le 20/11/2025</span>
                    </div>
                    <div class="course-actions">
                        <a href="sections_by_course.php?id=2" class="btn-small">Voir les sections</a>
                        <a href="courses_edit.php?id=2" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="courses_delete.php?id=2" class="btn-delete"><i class="fas fa-trash"></i></a>
                    </div>
                </div>

                <!-- Cours 3 -->
                <div class="course-card">
                    <div class="course-header">
                        <span class="level advanced">Avancé</span>
                        <h3>JavaScript Moderne ES6+</h3>
                    </div>
                    <p class="course-desc">
                        Domptez les fonctionnalités avancées de JavaScript et les APIs modernes.
                    </p>
                    <div class="course-meta">
                        <span><i class="fas fa-book-open"></i> 25 sections</span>
                        <span><i class="fas fa-clock"></i> Créé le 28/11/2025</span>
                    </div>
                    <div class="course-actions">
                        <a href="sections_by_course.php?id=3" class="btn-small">Voir les sections</a>
                        <a href="courses_edit.php?id=3" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="courses_delete.php?id=3" class="btn-delete"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
        
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        // Switch thème clair/sombre (optionnel, tu peux supprimer si tu veux 0 JS)
        const toggle = document.getElementById('theme-switch');
        toggle.addEventListener('change', () => {
            document.body.classList.toggle('light-theme');
        });
    </script>
</body>
</html>