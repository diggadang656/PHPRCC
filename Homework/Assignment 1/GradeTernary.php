<html>
 <?php /*
 	Dany Dang
	Sept 14th, 2015
 	Ternary Operator Homework
	   */
 ?>
 <body>
	 <?php
	 //uses the form to get score from the user
        $gradezero = "NULL";
        $score = $_GET['score'];
     ?>
     
    <p>Your grade is
	<?php //calculates the score and outputs the grade.
            if($score<0)                   $grade="an invalid score.";
			if($score>=0  && $score<60)    $grade="an F";
			if($score>=60 && $score<70)    $grade="a D";
			if($score>=70 && $score<80)    $grade="a C";
			if($score>=80 && $score<90)    $grade="a B";
			if($score>=90 && $score<=100)  $grade="an A";
			if($score>100)                 $grade="an invalid score.";
                   
            echo $grade;
    ?>
    
    .</p>

 </body>
</html>