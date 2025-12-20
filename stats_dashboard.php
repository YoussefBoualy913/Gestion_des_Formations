<?php 
session_start();
if(!isset($_SESSION['usere_id'])){
     header('location:login.php?');
             exit;
}
?>

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
                    <span class="stat-value"><?php echo $total_c['totalcours']; ?></span>
                </div>

                <!-- KPI 2 -->
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <h3>Total utilisateurs</h3>
                    <span class="stat-value"><?php echo $total_u['totalutilisature']; ?></span>
                </div>

                <!-- KPI 3 -->
                <div class="stat-card">
                    <i class="fas fa-user-plus"></i>
                    <h3>Total inscriptions</h3>
                    <span class="stat-value"><?php echo $total_ins['totalinscription'];?></span>
                </div>

                <!-- KPI 4 -->
                <div class="stat-card highlight">
                    <i class="fas fa-trophy"></i>
                    <h3>Cours le plus populaire</h3>
                    <p class="stat-value"><?php echo  $courplus_insc['title'];?></p>
                    <small><?php echo  $courplus_insc['total'];?> inscriptions</small>
                </div>

                <!-- KPI 5 -->
                <div class="stat-card">
                    <i class="fas fa-calculator"></i>
                    <h3>Moyenne sections/cours</h3>
                    <span class="stat-value"><?php echo   $Moyen_section['Moyensection'];?></span>
                </div>
            </div>

            <div class="tables-grid">
                <!-- Tableau 6 -->
                <div class="table-card">
                    <h3>Cours avec plus de 5 sections</h3>
                    <table class="styled-table">
                        <tr>
                        <th>title</th>
                        <th>level</th>
                        <th>description</th>
                        
                        <th>nmbre de section</th>
                        </tr>
                        <tr>
                            <?php 
                            while( $cinq_section = mysqli_fetch_assoc($result6)){

                                $title = $cinq_section['title'];
                                $level = $cinq_section['level'];
                                $description = $cinq_section['description'];
                                $crée_dt= $cinq_section['created_at'];
                                $total_sec = $cinq_section['totalsection'];
                                echo"   <tr>
                                <td>$title</td>
                                <td>$level</td>
                                <td>$description</td>
                              
                                <td> $total_sec</td>
                                </tr>
                               ";


                            }
                            
                            ?>
                        </tr>
            </table>
                </div>

                <!-- Autres tableaux (tu rempliras plus tard) -->
                <div class="table-card">
                    <h3>Utilisateurs inscrits en 2025</h3>
                    <table class="styled-table">
                          <tr>
                        <th>name </th>
                        <th>email</th>
                        <th>dat d'inscription</th>
                        
                        </tr>
                        <tr>
                            <?php 
                            while( $inscrire_in = mysqli_fetch_assoc( $result7)){
                                $name = $inscrire_in['name'];
                                $email = $inscrire_in['email'];
                                $created_at = $inscrire_in['created_at'];
                            
                                echo"   <tr>
                                <td> $name</td>
                                <td>$email</td>
                                <td>$created_at</td>
                              
                                </tr>
                               ";


                            }
                            
                            ?>
                        </tr>


                    </table>
                </div>

                <div class="table-card">
                    <h3>Cours sans inscription</h3>
                    <table class="styled-table">
                           <tr>
                        <th>title </th>
                        <th>description</th>
                        <th>level</th>
                        
                        </tr>
                        <tr>
                            <?php 
                            while( $cour_non_inscri = mysqli_fetch_assoc($result8)){
                                $title8 = $cour_non_inscri['title'];
                                $description8 = $cour_non_inscri['description'];
                                $level8 = $cour_non_inscri['level'];
                            
                                echo"   <tr>
                                <td>  $title8</td>
                                <td>$description8</td>
                                <td>$level8</td>
                              
                                </tr>
                               ";


                            }
                            
                            ?>
                        </tr>

                    </table>
                </div>

                <div class="table-card">
                    <h3>Dernières inscriptions</h3>
                    <table class="styled-table">
                           <tr>
                        <th>name </th>
                        <th>nom de course </th>
                        <th>date d'incription</th>
                        
                        </tr>
                        <tr>
                         <?php 
                            while( $dernierinsriotion = mysqli_fetch_assoc($result9)){
                                $name9 = $dernierinsriotion['name'];
                                $nomdecours = $dernierinsriotion['nom_de_course'];
                                $insert_at = $dernierinsriotion['inserte_at'];
                            
                                echo"   <tr>
                                <td>$name9 </td>
                                <td>$nomdecours</td>
                                <td>$insert_at</td>
                              
                                </tr>
                               ";


                            }
                            
                            ?>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
