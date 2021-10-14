<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <title>Document</title>
</head>
<style>
    body{
        padding: 0;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    table{
        
        position: absolute;
        left: 130%;
        top: 40%;
        transform: translate(-50%,-50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
    }
    .table2{
        
        position: absolute;
        left: 130%;
        top: 47%;
        transform: translate(-50%,-50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
    }

    tr{
        transition: all .2s ease-in;
        cursor: pointer;
    }

    th
    ,td{
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #header{
        background-color: #16a085;
        color: #fff;
    }

    h1{
        text-align: center;
        font-weight: 600;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }

    tr:hover{
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0,0,0,0.2), -1px -1px 8px rgba(0,0,0,0.2);
    }
    

</style>

<script type="text/javascript" src="jslib/jquery-1.11.1.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){  
            
        });
    </script>
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
                <a href="addStudent.html">
                    <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                    <span class="title">Add Student</span>
                </a>
            </li>


            <li>
                <a href="DropStudent.html">
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

        
        </div>
 
        <h1>Student Attendance</h1>
        <br>
        <hr>
        <br>
        <?php
            if($_GET["class"] == "6A"){
              
        ?>
            <table>
                <thead>
                    <tr id="header">
                        <th>Student ID</th>
                        <th>Class</th>
                        <th>Student Name</th>
                        <th>Attendance</th>
                        <th>Absent</th>
                        <th>Sick Leave</th>
                        <th>Late</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr id="course">
                        <td>01</td>
                        <td>6A</td>
                        <td>Ho Man Chung</td>   
                        <td>75%</td> 
                        <td>20%</td> 
                        <td>0%</td> 
                        <td>5%</td> 
                    </tr>
                    <tr id="course">
                        <td>02</td>
                        <td>6A</td>
                        <td>Li Chi Fung</td>
                        <td>70%</td> 
                        <td>15%</td> 
                        <td>5%</td> 
                        <td>10%</td> 
                    </tr>
                    <tr id="course">
                        <td>03</td>
                        <td>6A</td>
                        <td>Chen Tai Men</td>
                        <td>55%</td> 
                        <td>45%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                        <td>04</td>
                        <td>6A</td>
                        <td>Wong Kun Hui</td>
                        <td>100%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                        <td>05</td>
                        <td>6A</td>
                        <td>Wong Ka Hong</td>
                        <td>80%</td> 
                        <td>20%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                        <td>06</td>
                        <td>6A</td>
                        <td>Leung Chi Shan</td>
                        <td>95%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                        <td>5%</td> 
                    </tr>

                    </tbody>
                </table>

            <?php
            }
            else{
            ?>

        <table class="table2">
        <thead>
                    <tr id="header">
                        <th>Student ID</th>
                        <th>Class</th>
                        <th>Student Name</th>
                        <th>Attendance</th>
                        <th>Absent</th>
                        <th>Sick Leave</th>
                        <th>Late</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr id="course">
                        <td>01</td>
                        <td>1B</td>
                        <td>Ho Fung Chung</td>   
                        <td>0%</td> 
                        <td>100%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                        <td>02</td>
                        <td>1B</td>
                        <td>Li Chi Chung</td>
                        <td>70%</td> 
                        <td>15%</td> 
                        <td>5%</td> 
                        <td>10%</td> 
                    </tr>
                    <tr id="course">
                        <td>03</td>
                        <td>1B</td>
                        <td>Chen Yan Chun</td>
                        <td>65%</td> 
                        <td>35%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                        <td>04</td>
                        <td>1B</td>
                        <td>An Kun Hin</td>
                        <td>80%</td> 
                        <td>20%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                        <td>05</td>
                        <td>1B</td>
                        <td>Wong Ka Jin</td>
                        <td>70%</td> 
                        <td>30%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <tr id="course">
                    <td>06</td>
                        <td>1B</td>
                        <td>Li Ka Chun</td>
                        <td>65%</td> 
                        <td>30%</td> 
                        <td>0%</td> 
                        <td>5%</td> 
                    </tr>
                    <td>07</td>
                        <td>1B</td>
                        <td>Leung Yin</td>
                        <td>100%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                        <td>0%</td> 
                    </tr>
                    <td>08</td>
                        <td>1B</td>
                        <td>Leung Xin Ru</td>
                        <td>65%</td> 
                        <td>30%</td> 
                        <td>0%</td> 
                        <td>5%</td> 
                    </tr>

                    </tbody>
                </table>

                <?php
                }
                ?>
            
        </div>

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
