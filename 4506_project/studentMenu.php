<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                    <span class="title">Attendance Online</span>
                </a>
            </li>

            <li>
                <a href="studentMenu.php">
                    <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                    <span class="title">Student Name</span>
                </a>
            </li>

            <li>
                <a href="stuCourse.html">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">Course</span>
                </a>
            </li>

            <li>
                <a href="stuPerson.html">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Edit personal detail</span>
                </a>
            </li>


            <li>
                <a href="stuPerClass.html">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">Class Allocation</span>
                </a>
            </li>

            <li>
                <a href="Login.html">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Sign out</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="main">
        <div class="topbar">

            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <!-- search---->
            <!-- <div class="search">
                <label>
                    <input type="text" placeholder="Search Here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div> -->
            
            <!---user name-->
            <!-- <div class="user">
                <img src="bigcat.jpg" width="60" height="60">
            </div> -->
        </div>
 
        <div class="cardBox">

            <div class="card">
                <div class="Name">Student Name :</div>     
            </div>

            <?php
                if(isset($_GET["stuName"])){
                    $form= <<<EOF
                    <div class="card">
                        <div class="Name">%s</div>     
                    </div>

                    EOF;
                    printf($form,$_GET["stuName"]);
                }
                else{

            
            ?>
            <div class="card">
                <div class="Name">Ho Man Chung</div>     
            </div>
            <?php
                }
            ?>

            <div class="card">
                <div class="Name">Student Number :</div>     
            </div>

            <div class="card">
                <div class="classNumber">20000000</div>
            </div>
        </div>
        
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Class :</h2>
                    <a href="#" class="btn">View all</a>
                </div>
                <table>
                    <thead>
                        <tr>
                        <td>Class</td>
                        <td>Class Teacher</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6A</td>
                            <td>Ho Kwan Cheng</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>

        

   <?php
                if(isset($_GET["className"]) && isset($_GET["classCode"])){
                    
                    echo "<div class='details'>
                    <div class='recentOrders'>
                        <div class='cardHeader'>
                            <h2>Class :</h2>
                            <a href='#' class='btn'>View all</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                <td>Class Name</td>
                                <td>Class Number</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>".$_GET["className"]."</td>
                                    <td>".$_GET["classCode"]."</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>";
                }
        
            ?>

    </div>
</div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>

        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }


        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach( (item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) => 
        item.addEventListener('mouseover',activeLink));

    </script>

</body>
</html>
