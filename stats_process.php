<?php 
require_once 'config.php';

$sql1 = "select count(*) as totalcours from  courses ";
            $result = mysqli_query($conect,$sql1);
            $total_c = mysqli_fetch_assoc( $result);

            $sql2 = "select count(*) as totalutilisature from  users ";
            $result = mysqli_query($conect,$sql2);
            $total_u = mysqli_fetch_assoc( $result);

            $sql3 = "select count(*) as totalinscription from  enrollments ";
            $result = mysqli_query($conect,$sql3);
            $total_ins = mysqli_fetch_assoc( $result);

            $sql4 = "SELECT c.title,e.course_id,COUNT(e.course_id) as total
                    FROM courses c 
                    INNER JOIN enrollments e on c.id = e.course_id
                    GROUP BY e.course_id
                    HAVING COUNT(e.course_id)=(
                         select max(nbinsription)
                         from(
                              select count(course_id) as nbinsription
                              from enrollments
                              GROUP by course_id
                              ) tb
                       )";
            $result = mysqli_query($conect,$sql4);
            $courplus_insc = mysqli_fetch_assoc( $result);

             $sql5 = "SELECT avg(nbsection)as Moyensection   FROM (
                      SELECT course_id ,COUNT(*) as nbsection   
                      FROM sections 
                      GROUP BY course_id)t;";
            $result = mysqli_query($conect,$sql5);
            $Moyen_section= mysqli_fetch_assoc( $result);

            $sql6 = "SELECT c.title,c.description,level,c.created_at,COUNT(s.course_id) as totalsection
                    FROM courses c 
                    INNER JOIN sections s on c.id = s.course_id
                    GROUP BY  c.title,c.description,level,c.created_at
                    HAVING totalsection > 5";
            $result6 = mysqli_query($conect,$sql6);

            $sql7 = "SELECT  name,email,created_at FROM `users` WHERE date(created_at) >='2025-1-1'";
            $result7 = mysqli_query($conect,$sql7);

              $sql8 = "SELECT c.title,c.description,c.level
                    FROM courses c
                    LEFT JOIN  enrollments e on c.id = e.course_id
                    WHERE e.course_id is null";

            $result8 = mysqli_query($conect,$sql8);

             $sql9 = "SELECT users.name,courses.title as nom_de_course,enrollments.inserte_at
                      FROM courses
                      JOIN enrollments on courses.id = enrollments.course_id
                      JOIN users on users.id = enrollments.usere_id
                      WHERE  inserte_at = (SELECT MAX(inserte_at)
                      FROM enrollments);";

            $result9 = mysqli_query($conect,$sql9);
           
            
           
?>