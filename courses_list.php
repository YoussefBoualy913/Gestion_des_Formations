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
   <?php include 'config.php'; ?>
   
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
            
            
            
            <div class="courses-grid">
                
    <?php 
                $sql = <<<EOD
    SELECT count(s.position) as max_position, 
       c.id,
       c.title, 
       c.level, 
        c.created_at,
       c.description
FROM courses c
LEFT JOIN sections s
ON c.id = s.course_id
GROUP BY c.id, c.title, c.level, c.description, c.created_at
EOD;

                $result= mysqli_query($conect,$sql);
                
                while($row=mysqli_fetch_assoc($result)){
                    echo '<div class="course-card">
                    <div class="course-header">';
                    if($row["level"]=="Débutant"){
                        echo ' <span class="level beginner">'.$row["level"].'</span>';
                    }elseif($row["level"]=="Avancé"){
                        echo ' <span class="level advanced">'.$row["level"].'</span>';
                        
                    }else{
                        echo ' <span class="level intermediate">'.$row["level"].'</span>';
                        
                    }
                    echo'   <h3>'.$row["title"].'</h3>
                    </div>
                    <p class="course-desc">'.$row["description"].' </p>
                    <div class="course-meta">';
                    $idcours=$row['id'];
                    $pos= $row["max_position"]; 
                    $datecreet= $row["created_at"];
                    
                       echo  "<span><i class='fas fa-book-open'></i> $pos sections</span>
                        <span><i class='fas fa-clock'></i> Créé le $datecreet </span>
                    </div>
                        <div class='course-actions'>
                        <a href='sections_by_course.php? course_id=$idcours ' class='btn-small'>Voir les sections</a>
                        <a href='courses_edit.php? id= $idcours' class='btn-edit'><i class='fas fa-edit'></i></a>
                        <a href='courses_delete.php? id= $idcours'  class='btn-delete'><i class='fas fa-trash'></i></a>
                    </div>
                </div>";
                }
                ?>
                     
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    
</body>
</html>