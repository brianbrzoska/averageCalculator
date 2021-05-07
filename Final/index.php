<html>

    <head>

        <title>
            Final
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">

    </head>


    <body>
    <nav class="navbar navbar-expand-lg navbar-light" id ="navigation">
          <a class="navbar-brand" style = "color:white;"><b>GPA Calculator</b></a>
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

        <div class="container">

        <table>

        <tr><td>Class</td><td>Letter Grade</td><td>Credits</td></tr>

        </table>

            <form action = "index.php" method = "POST" id="calculate">

                <input type = "text" name = "course" placeholder = "Course name" minlength="2" maxlength="30">

                <select id = "grade" name = "grade1" placeholder = "grade">

                    <option value="" disabled selected>Select a letter grade</option>
                    
                    <option value="4.00">A</option>

                    <option value="3.67">A-</option>

                    <option value="3.33">B+</option>

                    <option value="3.00">B</option>

                    <option value="2.67">B-</option>

                    <option value="2.33">C+</option>

                    <option value="2.00">C</option>

                    <option value="1.67">C-</option>

                    <option value="1.33">D+</option>

                    <option value="1.00">D</option>

                    <option value="0.67">D-</option>

                    <option value="0">F</option>
 
                  </select>

                <input type = "number" name = "credits1" placeholder = "Credits" min="0" max="5">

                <input type = "text" name = "course" placeholder = "Course name" minlength="2" maxlength="30">

<select id = "grade" name = "grade2" placeholder = "grade">

    <option value="" disabled selected>Select a letter grade</option>
    
    <option value="4.00">A</option>

    <option value="3.67">A-</option>

    <option value="3.33">B+</option>

    <option value="3.00">B</option>

    <option value="2.67">B-</option>

    <option value="2.33">C+</option>

    <option value="2.00">C</option>

    <option value="1.67">C-</option>

    <option value="1.33">D+</option>

    <option value="1.00">D</option>

    <option value="0.67">D-</option>

    <option value="0">F</option>

  </select>

<input type = "number" name = "credits2" placeholder = "Credits" min="0" max="5">

<input type = "text" name = "course" placeholder = "Course name" minlength="2" maxlength="30">

<select id = "grade" name = "grade3" placeholder = "grade">

    <option value="" disabled selected>Select a letter grade</option>
    
    <option value="4.00">A</option>

    <option value="3.67">A-</option>

    <option value="3.33">B+</option>

    <option value="3.00">B</option>

    <option value="2.67">B-</option>

    <option value="2.33">C+</option>

    <option value="2.00">C</option>

    <option value="1.67">C-</option>

    <option value="1.33">D+</option>

    <option value="1.00">D</option>

    <option value="0.67">D-</option>

    <option value="0">F</option>

  </select>

<input type = "number" name = "credits3" placeholder = "Credits" min="0" max="5">

<input type = "text" name = "course" placeholder = "Course name" minlength="2" maxlength="30">

<select id = "grade" name = "grade4" placeholder = "grade">

    <option value="" disabled selected>Select a letter grade</option>
    
    <option value="4.00">A</option>

    <option value="3.67">A-</option>

    <option value="3.33">B+</option>

    <option value="3.00">B</option>

    <option value="2.67">B-</option>

    <option value="2.33">C+</option>

    <option value="2.00">C</option>

    <option value="1.67">C-</option>

    <option value="1.33">D+</option>

    <option value="1.00">D</option>

    <option value="0.67">D-</option>

    <option value="0">F</option>

  </select>

<input type = "number" name = "credits4" placeholder = "Credits" min="0" max="5">

<input type = "text" name = "course" placeholder = "Course name" minlength="2" maxlength="30">

<select id = "grade" name = "grade5" placeholder = "grade">

    <option value="" disabled selected>Select a letter grade</option>
    
    <option value="4.00">A</option>

    <option value="3.67">A-</option>

    <option value="3.33">B+</option>

    <option value="3.00">B</option>

    <option value="2.67">B-</option>

    <option value="2.33">C+</option>

    <option value="2.00">C</option>

    <option value="1.67">C-</option>

    <option value="1.33">D+</option>

    <option value="1.00">D</option>

    <option value="0.67">D-</option>

    <option value="0">F</option>

  </select>

<input type = "number" name = "credits5" placeholder = "Credits" min="0" max="5">

<input type = "text" name = "course" placeholder = "Course name" minlength="2" maxlength="30">

<select id = "grade" name = "grade6" placeholder = "grade">

    <option value="" disabled selected>Select a letter grade</option>
    
    <option value="4.00">A</option>

    <option value="3.67">A-</option>

    <option value="3.33">B+</option>

    <option value="3.00">B</option>

    <option value="2.67">B-</option>

    <option value="2.33">C+</option>

    <option value="2.00">C</option>

    <option value="1.67">C-</option>

    <option value="1.33">D+</option>

    <option value="1.00">D</option>

    <option value="0.67">D-</option>

    <option value="0">F</option>

  </select>

<input type = "number" name = "credits6" placeholder = "Credits" min="0" max="5">



<br>
                <input type="submit" value = "Calculate" id ="calculatebtn" class = "btn btn-primary">

                <br>



        </div>




    </form>

    <?php 

    
$grade1 = $_POST['grade1'];

$grade2 = $_POST['grade2'];

$grade3 = $_POST['grade3'];

$grade4 = $_POST['grade4'];

$grade5 = $_POST['grade5'];

$grade6 = $_POST['grade6'];

$credit1 = $_POST['credits1'];

$credit2 = $_POST['credits2'];

$credit3 = $_POST['credits3'];

$credit4 = $_POST['credits4'];

$credit5 = $_POST['credits5'];

$credit6 = $_POST['credits6'];

@$sum = (($grade1 * $credit1) + ($grade2 * $credit2) + ($grade3 * $credit3) + ($grade4 * $credit4) + ($grade5 * $credit5) + ($grade6 * $credit6))
/($credit1 + $credit2 + $credit3 + $credit4 + $credit5 + $credit6);


?>

    <h1 id="result">GPA : <?php echo  round($sum, 2) ?></h1>

    <h1 class = "h1-bottom"><?php 

if ($sum >= 3.67) {

    echo "Your letter grade is: A";
    }
    
    if ($sum >= 2.67 && $sum < 3.67) {
    
    echo "Your letter grade is: B";
    }
    
    if ($sum >= 1.67 && $sum < 2.67) {
    
    echo "Your letter grade is: C";
    }
    
    if ($sum >= 0.67 && $sum < 1.67) {
    
    echo "Your letter grade is: D";
    }
    
    if ($sum < 0.67) {
    
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