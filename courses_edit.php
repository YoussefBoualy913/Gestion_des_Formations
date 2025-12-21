 <?php 
 session_start();
 if(!isset($_SESSION['usere_id'])){
     header('location:login.php?');
             exit;
}
 ?> 
<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
    <main class="main-container">
        <div class="container">
            <div class="form-wrapper">
                <h2><i class="fas fa-book-medical"></i>Modifier le cours</h2>
               <?php 
                $id=(int)$_GET['id'];
                $sql = "select * from courses where id=$id";

                $result= mysqli_query($conect,$sql);
                $row=mysqli_fetch_assoc($result);
              
               ?>
               
                <form action='courses_edit.php? id=<?=$_GET['id'] ?>' method="POST" class="course-form">
               

                    <div class="form-group">
                        <label for="title">Titre du cours *</label>
                        <input type="text" id="title" name="title" value="<?=$row['title']; ?>" placeholder="Ex : PHP 8 & MySQL de A à Z">
                    </div>

                    <div class="form-group">
                        <label for="level">Niveau *</label>
                        <select id="level" name="level" value="<?=$row['level']; ?>">
            
                            <option value="Débutant">Débutant</option>
                            <option value="Intermédiaire">Intermédiaire</option>
                            <option value="Avancé">Avancé</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="6" placeholder="Présentez brièvement le contenu du cours..."><?=$row['description']; ?></textarea>
                    </div>
    <?php 

    
    if(isset($_POST["submit"])){
         if(empty($_POST["title"])){
            echo "<p style='color:red;'>title ne  doit etre pas vide </p> ";
            
        } elseif(!in_array($_POST["level"],["Débutant","Intermédiaire","Avancé"])){
              echo '<p style="color:red;">"'.$_POST["level"].'" level n exist pas! </p> ';
        }else{
    $title=$_POST["title"];
    $description=$_POST["description"];
    $level=$_POST["level"];
   
    $sql = "UPDATE `courses` SET `title`=?,`description`=?,`level`=? WHERE id=$id";
     $stmt = mysqli_prepare($conect, $sql);
             mysqli_stmt_bind_param( $stmt,"sss",$title,$description,$level);
             mysqli_stmt_execute($stmt);
    header('location:courses_list.php?');
    exit;
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
  