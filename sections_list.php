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
    <?php include 'config.php'; ?>

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
                        <?php   
                          $sql = <<<EOD
    SELECT (
        SELECT MAX(position) 
        FROM sections 
        WHERE course_id = c.id
    ) AS max_position,
       c.id as idcours,
       s.id,
       s.title as titlesection, 
       s.created_at,
       s.position,
       c.level,
       c.title
FROM sections s
LEFT JOIN courses c
ON c.id = s.course_id

EOD;
$result= mysqli_query($conect,$sql);
                
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row["id"];
                    $titlesection=$row["titlesection"];
                    $createdat=$row["created_at"];
                    $position=$row["position"];
                    $titlecours=$row["title"];
                    $level=$row["level"];
                    $idcours=$row["idcours"];
                    $bnsection=$row["max_position"];
                    
echo "
<tr>
    <td>$id</td>
    <td>$titlesection</td>
    <td><a href='sections_by_course.php? id=$idcours  &  nbsection= $bnsection' class='course-link'>$titlecours</a></td>";
   if($level == "Intermédiaire"){
   echo" <td><span class='level intermediate'>$level</span></td>";
}elseif( $level == "Intermédiaire" ){
       echo " <td><span class='level beginner'>$level</span></td>";
       
    }else{
       echo " <td><span class='level advanced'>$level</span></td>";

   }
    echo "
    <td>$position</td>
    <td>$createdat</td>
    <td class='actions-cell'>
        <a href='sections_edit.php? id=10' class='btn-edit'><i class='fas fa-edit'></i></a>
        <a href='sections_delete.php?id=10' class='btn-delete'><i class='fas fa-trash'></i></a>
    </td>
</tr>";}
                                ?>

                       
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>