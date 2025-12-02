<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les sections - MonLMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="page-header">
                <h2><i class="fas fa-list-ol"></i> Toutes les sections</h2>
                <a href="courses_list.php" class="btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour aux cours
                </a>
            </div>

            <div class="table-wrapper">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre de la section</th>
                            <th>Cours</th>
                            <th>Niveau</th>
                            <th>Position</th>
                            <th>Date création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Exemple de lignes (tu les généreras en PHP plus tard) -->
                        <tr>
                            <td>1</td>
                            <td>Introduction au projet LMS</td>
                            <td><a href="sections_by_course.php?id=2" class="course-link">PHP 8 Procédural & MySQL</a></td>
                            <td><span class="level intermediate">Intermédiaire</span></td>
                            <td>1</td>
                            <td>20/11/2025</td>
                            <td class="actions-cell">
                                <a href="sections_edit.php?id=10" class="btn-edit"><i class="fas fa-edit"></i></a>
                                <a href="sections_delete.php?id=10" class="btn-delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Les variables et types de données</td>
                            <td><a href="sections_by_course.php?id=1" class="course-link">HTML & CSS de A à Z</a></td>
                            <td><span class="level beginner">Débutant</span></td>
                            <td>3</td>
                            <td>16/11/2025</td>
                            <td class="actions-cell">
                                <a href="sections_edit.php?id=15" class="btn-edit"><i class="fas fa-edit"></i></a>
                                <a href="sections_delete.php?id=15" class="btn-delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Promesses et Async/Await</td>
                            <td><a href="sections_by_course.php?id=3" class="course-link">JavaScript Moderne ES6+</a></td>
                            <td><span class="level advanced">Avancé</span></td>
                            <td>15</td>
                            <td>29/11/2025</td>
                            <td class="actions-cell">
                                <a href="sections_edit.php?id=27" class="btn-edit"><i class="fas fa-edit"></i></a>
                                <a href="sections_delete.php?id=27" class="btn-delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <!-- Ajoute autant de lignes que tu veux -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>