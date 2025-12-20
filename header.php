<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonLMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="courses_list.php" style="color:#8b5cf6; text-decoration:none;">MonLMS</a></h1>
        </div>
        <nav class="nav">
            <a href="courses_list.php" class="nav-link active"><i class="fas fa-book"></i> Cours</a>
            <a href="logout.php" class="nav-link deconnect">
       <i class="fas fa-sign-out-alt"></i> Se deconnecté
    </a>
           
        </nav>
        <div class="theme-toggle">
            <input type="checkbox" id="theme-switch">
            <label for="theme-switch" class="toggle-label"></label>
        </div>
    </div>
</header>