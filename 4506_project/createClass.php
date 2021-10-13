<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <title>Document</title>
</head>
<script type="text/javascript" src="jslib/jquery-1.11.1.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
           var classs="";
            $("#create").click(function(){
                $("#classInfor > tbody").append("<tr><td><input type='text' id='Class'></td><td><input type='text' id='nStudent'></td><td><button id='save'>save</button></td></tr>");
            });

            $(document).on('click', '#save', function() {
                if(classs==""){
                    alert("Please enter Class!");
                } 
                else{
                    alert("Class created!");
                    var url = "addStudent.php?class=" + classs + "&teaName=HoKwanCheng";
                    window.location.href = url;  
                }
            });
            $(document).on('change', '#classCode', function() { 
                classCode=$(this).val();
            });
            $(document).on('change', '#className', function() { 
                className=$(this).val();
            });
            $(document).on('change', '#Class', function() { 
                classs=$(this).val();
            });

            $(document).on('click', '#edit', function() {
                var row = $(this).closest('tr');
                var Class=$(row.find("td:eq(0)").html()).val();
                var url="editClass.php?class="+Class+"&teaName=HoKwanCheng";
                window.location.href = url;
            });

        });
    </script>    
<style>
    
    #save{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        #edit{
            background-color: #008CBA; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 4px 2px;
            cursor: pointer;
      
            
        }
        #edit:hover{
            background-color: red;
            color: white;
        }
    .content-table{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0,15);
 }
 
 .content-table thead tr{
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
 }
 
 .content-table th,
 .content-table td{
    padding: 12px 15px;
 
 }
 
 .content-table tbody tr{
    border-bottom: 1px solid #dddddd;
 }
 
 .content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;
 }
 
 .content-table tbody tr:last-of-type{
    border-bottom: 2px solid #009879;
 }
 
 .content-table tbody tr.active-row{
    font-weight: bold;
    color: #009879;
 }
 
 h1{
    color: #009879
 }
</style>
<body>
<?php
    $url = "TeacherMenu.php";
    $des="";
    if(isset($_GET["class"]) && isset($_GET["no"])){
        $des=$_GET["des"];
        $url = $url."?class=".$_GET["class"]."&des=".$des;
    }
        
?>
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
                <a href=<?php echo $url ?>>
                    <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                    <span class="title">Teacher Name</span>
                </a>
            </li>

            <li>
                <a href="createClass.php">
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
 
        <h1>Create Class</h1>
            <input type="button" id='create' value="Create Class">
            <table id="classInfor" border="1" class="content-table">    
                <thead>
                <th>Class</th>
                <th>No.Student</th>
                <th>Status</th>
                </thead>
                <tbody>
                <tr>
                    <td><input type='text' id='Class' value="1B"></td>
                    <td><input type='text' id='nStudent' value="10"></td>
                    <td><button id='edit'>Edit</button></td>
                </tr>
                <tr>
                    <td><input type='text' id='Class' value="2B"></td>
                    <td><input type='text' id='nStudent' value="13"></td>
                    <td><button id='edit'>Edit</button></td>
                </tr>
                <tr>
                    <td><input type='text' id='Class' value="1A"></td>
                    <td><input type='text' id='nStudent' value="9"></td>
                    <td><button id='edit'>Edit</button></td>
                </tr>
                <?php 
                if(isset($_GET["class"]) && isset($_GET["no"])){
                    echo "<tr>
                    <td><input type='text' id='Class' value='".$_GET["class"]."'></td>
                    <td><input type='text' id='nStudent' value='".$_GET["no"]."'></td>
                    <td><button id='edit'>Edit</button></td>
                    </tr>";
                }
            ?>
                </tbody>
            </table>

        
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
