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
    <?php include 'header.php';
          include 'config.php';
     ?>

    <main class="main-container">
        <div class="container">
            <div class="form-wrapper">
                <h2><i class="fas fa-file-alt"></i> Nouvelle section</h2>
<?php             
                  if(isset($_GET['course_id'])){
                    $cour_id = number_format($_GET["course_id"]);
                  }else {
                    $cour_id =  number_format($_POST["course_id"]);
                  }
                  
                   $sql = "select title from courses where id =  $cour_id";
                   $result = mysqli_query($conect,$sql);
                   $row = mysqli_fetch_assoc($result);
                   $cours_title = $row['title'];
                   echo "<p class='course-subtitle'>Cours :$cours_title </p>"
?> 

                <form action="sections_create.php" method="POST" class="course-form">
                    <input type="hidden" name="course_id" value="
                    <?php 
                     if(isset($_GET['course_id'])){echo $_GET['course_id'] ;}else{echo $_POST['course_id'] ;}
                     ?>
                    ">

                    <div class="form-group">
                        <label for="title">Titre de la section *</label>
                        <input type="text" id="title" name="title"  placeholder="Ex : Les boucles en PHP">
                    </div>

                    <div class="form-group">
                        <label for="position">Position dans le cours *</label>
                        <input type="number" id="position" name="position" min="1" value="1" required>
                        <small>Plus le chiffre est grand, plus la section apparaît en bas</small>
                    </div>

                    <div class="form-group">
                        <label for="content">Contenu / Résumé</label>
                        <textarea id="content" name="content" rows="10" placeholder="Écrivez ici le contenu détaillé de la section..."></textarea>
                    </div>
<?php
    if(isset($_POST["submit"])){
        if(empty($_POST["title"])){
            echo "<p style='color:red;'>title ne  doit etre pas vide </p> ";
        
        } elseif(empty($_POST["position"])){
              echo '<p style="color:red;">title ne  doit etre pas vide </p> ';
        }
        else { 
            
            $title = $_POST["title"];
            $content = $_POST["content"];
            $position = $_POST["position"];
            
            $sql = "insert into  `sections`(`title`,`course_id`,`content`,`position`) values('$title','$cour_id','$content','$position')";
            $result = mysqli_query($conect,$sql);

            header('location:sections_by_course.php? course_id='.$cour_id);
        }
        
    }
?>

                    <div class="form-actions">
                        <a href="sections_by_course.php?id=<?=$cour_id ?>" class="btn-secondary">Annuler</a>
                        <button type="submit" class="btn-primary" name="submit">
                            <i class="fas fa-save"></i> Enregistrer la section
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="script.js"> </script>
</body>
</html>