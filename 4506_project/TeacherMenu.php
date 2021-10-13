<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <title>Document</title>

    <style>
        .details table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}


.details table thead td{
   font-weight: 600;
}

.details .recentOrders table tr{
    color: var(--black1);
    border-bottom: 1px solid rgba(0,0, 0, 0.1);
}

.details .recentOrders table tr:last-child{
    border-bottom: none;
}

.details .recentOrders table tbody tr:hover{
    background: var(--blue);
    color: var(--white);
}

.details .recentOrders table tr td{
    padding: 10px;

}


.details .recentOrders table tr td:last-child{
    text-align: end;
}


    </style>



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
                <a href="TeacherMenu.php">
                    <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                    <span class="title">Teacher Name</span>
                </a>
            </li>

            <li>
                <a href="createClass.php?teaName=Ho Kwan Cheng">
                    <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                    <span class="title">Create Class</span>
                </a>
            </li>



            <li>
                <a href="ViewClassDetail.html">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">View Class Detail</span>
                </a>
            </li>

            <li>
                <a href="ViewStudentList.html">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">View Student list</span>
                </a>
            </li>

            <li>
                <a href="teaSeacrchAt.html">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">Search Student Attendance</span>
                </a>
            </li>

            <li>
                <a href="teaSerVieEdiStu.php">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">Edit View Student Information</span>
                </a>
            </li>

            <li>
                <a href="teaReport.html">
                    <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                    <span class="title">Generate Class Reports</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="remove-outline"></ion-icon></span>
                    <span class="title">Drop Student</span>
                </a>
            </li>

            <li>
                <a href="teaViewEditAc.html">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Personal Account</span>
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
                <div class="Name">Teacher Name :</div>     
            </div>

            <div class="card">
                <div class="Name">Ho Kwan Cheng</div>     
            </div>

            <div class="card">
                <div class="Name">Class Number :</div>     
            </div>

            <div class="card">
                <div class="classNumber">ITP11400</div>
            </div>
        </div>
        
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Class :</h2>
                    <a href="#" class="btn">View all</a>
                </div>
                <table >
                    <thead>
                        <tr>
                        <td>Class</td>
                        <td>Class Description</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6A</td>
                            <td>None</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

   <?php
                if(isset($_GET["class"]) && isset($_GET["des"])){
                    $form= <<<EOF
                            <div class='details'>
                            <div class='recentOrders'>
                                <div class='cardHeader'>
                                    <h2>Class :</h2>
                                    <a href='#' class='btn'>View all</a>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                        <td>Class</td>
                                        <td>Class Description</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>%s</td>
                                            <td>%s</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            </div>
                         EOF;

                        printf($form,$_GET["class"],$_GET["des"]);
                    
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
