<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau cours - MonLMS</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'config.php'; ?>

    <main class="main-container">
        <div class="container">
            <div class="form-wrapper">
                <h2><i class="fas fa-book-medical"></i> Nouveau cours</h2>
               

                <form action="courses_create.php" method="POST" class="course-form">
                   

                    <div class="form-group">
                        <label for="title">Titre du cours *</label>
                        <input type="text" id="title" name="title"  placeholder="Ex : PHP 8 & MySQL de A à Z">
                    </div>

                    <div class="form-group">
                        <label for="level">Niveau *</label>
                        <select id="level" name="level" >
                            <option value="Débutant">Débutant</option>
                            <option value="Intermédiaire">Intermédiaire</option>
                            <option value="Avancé">Avancé</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="6" placeholder="Présentez brièvement le contenu du cours..."></textarea>
                    </div>
                     <div class="form-group">
                        <label for="title">image</label>
                        <input type="file" id="image" name=""  plimageaceholder="ajouter un image">
                    </div>

  <?php   
    if(isset($_POST["submit"])){
        if(empty($_POST["title"])){
            echo "<p style='color:red;'>title ne  doit etre pas vide </p> ";
            return;
            
        } elseif(!in_array($_POST["level"],["Débutant","Intermédiaire","Avancé"])){
              echo '<p style="color:red;">"'.$_POST["level"].'" level n existpas! </p> ';
        }
        else {
           
            
            $title=$_POST["title"];
            $description=$_POST["description"];
            $level=$_POST["level"];
            
            $sql = ( "insert into  `courses`(`title`,`description`,`level`) values('$title','$description','$level')");
            $result= mysqli_query($conect,$sql);
             echo '<p style="color:green;"> le cours a eteit enregistrer avec succer </p> ';
        }
        
    }
    ?>
                    <div class="form-actions">
                        <a href="courses_list.php" class="btn-secondary">Annuler</a>
                        <button type="submit" name="submit" class="btn-primary">
                            <i class="fas fa-save"></i> Enregistrer le cours
                        </button>
                    </div>
                </form>
    </div>
        </div>
    </main>

   
    <?php include 'footer.php'; ?>
</body>
</html>