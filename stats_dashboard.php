<?php 
session_start();
if(!isset($_SESSION['usere_id'])){
     header('location:login.php?');
             exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Statistiques</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; 
          include 'stats_process.php'; ?>


    <main class="main-container">
        <div class="container">
            <h2 class="dashboard-title"><i class="fas fa-chart-bar"></i> Tableau de bord Administrateur</h2>

            <div class="stats-grid">
                <!-- KPI 1 -->
                <div class="stat-card">
                    <i class="fas fa-book"></i>
                    <h3>Nombre total des cours</h3>
                    <span class="stat-value"><?php echo $row['totacours']; ?></span>
                </div>

                <!-- KPI 2 -->
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <h3>Total utilisateurs</h3>
                    <span class="stat-value">156</span>
                </div>

                <!-- KPI 3 -->
                <div class="stat-card">
                    <i class="fas fa-user-plus"></i>
                    <h3>Total inscriptions</h3>
                    <span class="stat-value">89</span>
                </div>

                <!-- KPI 4 -->
                <div class="stat-card highlight">
                    <i class="fas fa-trophy"></i>
                    <h3>Cours le plus populaire</h3>
                    <span class="stat-value">PHP & MySQL</span>
                    <small>42 inscriptions</small>
                </div>

                <!-- KPI 5 -->
                <div class="stat-card">
                    <i class="fas fa-calculator"></i>
                    <h3>Moyenne sections/cours</h3>
                    <span class="stat-value">14.5</span>
                </div>
            </div>

            <div class="tables-grid">
                <!-- Tableau 6 -->
                <div class="table-card">
                    <h3>Cours avec plus de 5 sections</h3>
                    <table class="styled-table">/* ... contenu tableau ... */</table>
                </div>

                <!-- Autres tableaux (tu rempliras plus tard) -->
                <div class="table-card">
                    <h3>Utilisateurs inscrits en 2025</h3>
                    <table class="styled-table">/* ... */</table>
                </div>

                <div class="table-card">
                    <h3>Cours sans inscription</h3>
                    <table class="styled-table">/* ... */</table>
                </div>

                <div class="table-card">
                    <h3>Dernières inscriptions</h3>
                    <table class="styled-table">/* ... */</table>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>