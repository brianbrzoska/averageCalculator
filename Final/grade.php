<html>

    <head>

        <title> Grade average calculator</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="grade.css">



    </head>



    <body>
    <nav class="navbar navbar-expand-lg navbar-light" id ="navigation">
          <a class="navbar-brand" style = "color:white;"><b>Grade Average Calculator</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php" style = "color:white;">GPA Calculator <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="grade.php" style = "color:white;">Grade Average Calulator</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>

        <div class = "container">

        <table>

        <tr><td>Assignment</td><td>Grade (%)</td><td>Weight (%)</td></tr>

        </table>


            <form action="grade.php" method="POST">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade1" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight1" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade2" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight2" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade3" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight3" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade4" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight4" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade5" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight5" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade6" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight6" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">     

                <input type = "number" name = "Grade7" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight7" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade8" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight8" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade9" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight9" id = "Weight1" placeholder = "Weight (%)">

                <input type = "text" name = "Assignment" id = "Assignment" placeholder = "Assignment">

                <input type = "number" name = "Grade10" id = "Grade1" placeholder = "Grade (%)">

                <input type = "number" name = "Weight10" id = "Weight1" placeholder = "Weight (%)">
                <br>
                <input type="submit" value = "Calculate" id ="calculate" class = "btn btn-primary">

                </form>







        <?php

$grade1 = $_POST['Grade1'];

$weight1 = $_POST['Weight1'];

$grade2 = $_POST['Grade2'];

$weight2 = $_POST['Weight2'];

$grade3 = $_POST['Grade3'];

$weight3 = $_POST['Weight3'];

$grade4 = $_POST['Grade4'];

$weight4 = $_POST['Weight4'];

$grade5 = $_POST['Grade5'];

$weight5 = $_POST['Weight5'];

$grade6 = $_POST['Grade6'];

$weight6 = $_POST['Weight6'];

$grade7 = $_POST['Grade7'];

$weight7 = $_POST['Weight7'];

$grade8 = $_POST['Grade8'];

$weight8 = $_POST['Weight8'];

$grade9 = $_POST['Grade9'];

$weight9 = $_POST['Weight9'];

$grade10 = $_POST['Grade10'];

$weight10 = $_POST['Weight10'];

@$numerator = (($grade1 * $weight1) + ($grade2 * $weight2) + ($grade3 * $weight3) + ($grade4 * $weight4) + ($grade5 * $weight5) + ($grade6 * $weight6) + ($grade7 * $weight7) + ($grade8 * $weight8) + ($grade9 * $weight9) + ($grade10 * $weight10))
/($weight1 + $weight2 + $weight3 + $weight4 + $weight5 + $weight6 + $weight7 + $weight8 + $weight9 + $weight10);



?>



</div>


<h1 id="result">Grade Average : <?php echo  round($numerator, 2) ?></h1>
<h1 class = "h1-bottom"><?php 
if ($numerator >= 90) {

echo "Your letter grade is: A";
}

if ($numerator >= 80 && $numerator < 90) {

echo "Your letter grade is: B";
}

if ($numerator >= 70 && $numerator < 80) {

echo "Your letter grade is: C";
}

if ($numerator >= 60 && $numerator < 70) {

echo "Your letter grade is: D";
}

if ($numerator < 60) {

echo "Your letter grade is: F";
}
?></h1>

<footer>

<table>

<tr><td style= "font-size:30px; padding-bottom: 20px;">Links</td><td style= "font-size:30px">Partners</td><td style= "font-size:30px">Other</td></tr>
<tr><td><a class = "a-bottom" href = "https://github.com/">Github</a></td><td style= "font-weight:lighter;">Jason Ellis</td><td></td></tr>
<tr><td></td><td style= "font-weight:lighter;">Brian Brozovska</td><td></td></tr>
<tr><td></td><td style= "font-weight:lighter;">Kaden Fuller-Aujla</td><td></td></tr>

</table>


</footer>

    </body>

    </html>