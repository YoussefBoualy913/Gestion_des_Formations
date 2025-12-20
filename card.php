 
                <div class="course-card enrolled">
                    <div class="course-header">
                        <?php 
                        if($row["level"]=="Débutant"){
                        echo ' <span class="level beginner">'.$row["level"].'</span>';
                    }elseif($row["level"]=="Avancé"){
                        echo ' <span class="level advanced">'.$row["level"].'</span>';
                        
                    }else{
                        echo ' <span class="level intermediate">'.$row["level"].'</span>';
                        
                    }
                     ?>
                    
                        <h3><?= $row["title"];?></h3>
                    </div>
                    <p class="course-desc"><?= $row["description"];?></p>
                    <div class="course-meta">
                        <span><i class="fas fa-book-open"></i><?= $row["nombresection"];?>sections</span>
                        <span><i class="fas fa-calendar"></i><?= $row["inserte_at"];?></span>
                    </div>
                    <div class="course-actions">
                        <a href="course_view.php?id=2" class="btn-primary">Accéder au cours</a>
                    </div>
                </div>