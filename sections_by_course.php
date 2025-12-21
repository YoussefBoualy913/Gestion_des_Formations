 <?php 
 session_start();

 ?> 
    <?php include 'header.php';
          require_once 'config.php';
     ?>

    <main class="main-container">
        <div class="container">
            <?php
            $id = (int)$_GET["course_id"];
            $sql = "select title,level from courses where id = $id";
            $result = mysqli_query($conect,$sql);
            $row = mysqli_fetch_assoc($result);
            $titlecours = $row["title"];
            $levelecours = $row["level"]; 
            
            $sql = "select count(*)as nb_section from sections where course_id = $id";
            $result = mysqli_query($conect,$sql);
            $row=mysqli_fetch_assoc($result);
            $nbsection = $row["nb_section"];
            
            echo"<div class='page-header'>
                <div>
                    <h2> $titlecours</h2>
                    <p class='course-subtitle'>$nbsection sections • Niveau $levelecours</p>    
                    </div>
                    <a href='sections_create.php? course_id=$id' class='btn-primary'>
                        <i class='fas fa-plus'></i> Ajouter une section
                        </a>
            </div>"

            ?>         
            <div class="sections-list">
            <?php 
                            
            $sql = "select * from  sections where course_id = $id";
            $result = mysqli_query($conect,$sql);
            
            while($row = mysqli_fetch_assoc($result)){
                $position = $row["position"];
                $title = $row["title"];
                $content = $row["content"];
                $section_id = $row["id"];
                
                    echo  "<div class='section-item'>
                    <div class='section-order'>$position</div>
                    <div class='section-content'>
                    <h4> $title</h4>
                    <p>$content</p>
                    </div>
                    <div class='section-actions'>";
                     if(isset($_SESSION['usere_id'])){
                         echo"
                         <a href='sections_edit.php? id=$section_id & course_id=$id & bysection=1' class='btn-edit'><i class='fas fa-edit'></i></a>
                         <a href='sections_delete.php?  id=$section_id & course_id= $id ' class='btn-delete'><i class='fas fa-trash'></i></a>
                         
                         ";
                         }

                echo"    </div>
                </div>";
                }
                ?>
            </div>

            <div style="margin-top: 2rem;">
                <a href="courses_list.php" class="btn-secondary">
                    <i class="fas fa-arrow-left"></i> Retour aux cours
                </a>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
