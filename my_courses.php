 <?php 
 session_start();
 if(!isset($_SESSION['usere_id'])){
     header('location:login.php?');
             exit;
}
 ?> 

    <?php include 'header.php';
          include 'config.php';
        
          $user_id = $_SESSION['usere_id'];
          $sql ="SELECT 
                 users.name,
                 courses.title,
                 courses.level,
                 courses.description ,
                 enrollments.inserte_at,
                 count(sections.title) as nombresection
                 FROM sections
                 JOIN courses on courses.id = sections.course_id
                 JOIN enrollments on courses.id = enrollments.course_id
                 JOIN users on users.id = enrollments.usere_id
                 WHERE users.id= $user_id 
                 GROUP BY  users.name,
                 courses.title,
                 courses.level,
                 courses.description ,
                 enrollments.inserte_at;";

                 $result = mysqli_query($conect,$sql);
    ?>

    <main class="main-container">
        <div class="container">
            <div class="page-header">
                <h2><i class="fas fa-graduation-cap"></i> Mes cours inscrits</h2>
                <a href="courses_list.php" class="btn-primary">Découvrir tous les cours</a>
            </div>
            <div class="courses-grid">
           <?php  
           
           if($row=mysqli_fetch_assoc($result)){
             include 'card.php';
                 while($row=mysqli_fetch_assoc($result)){
                    include 'card.php';

                 }
                }else{

                echo'
                 </div>
                <div class="empty-state" style="text-align:center; margin-top:4rem;">
                <i class="fas fa-book-open" style="font-size:4rem; color:#64748b; margin-bottom:1rem;"></i>
                <h3>Vous n êtes inscrit à aucun cours</h3>
                <p>Découvrez nos formations et commencez votre apprentissage !</p>
                <a href="courses_list.php" class="btn-primary">Voir tous les cours</a>
            </div> ';

                }
            ?>
         </div>      
    </main>

    <?php include 'footer.php'; ?>
