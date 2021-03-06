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
            $(document).on('click', '.save', function() { 
                var stuID = $("#stuID").val();
                var Class = $("#Class").val();
                var stuName = $("#stuName").val();
                var phone = $("#phone").val();
                $('#password').prop({type:"password"}); 
                $(".user-details").find('.input-box').each(function() {
                    $(this).find('input,select,textarea').attr("readonly", true);
                });
                $(this).removeClass();
                $(this).addClass("edit");
                $(this).val("Edit");
                alert("Saved！");
                var url = "teaSerVieEdiStu.php?studentID="+stuID+"&class="+Class+"&stuName="+stuName+"&phone="+phone;
                window.location.href = url;
            });
            $(document).on('click', '.edit', function() {   
                alert("You can edit now!");
                $('#password').prop({type:"text"});         
                $(".user-details").find('.input-box').each(function() {
                    $(this).find('input,select,textarea').attr("readonly", false);
                });
                $(this).removeClass();
                $(this).val("Save");
                $(this).addClass("save")
            });
        });
    </script>          
<style>



.container2{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}

.container2 .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container2 .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container2 form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}

form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100%/2 - 20px);
}

.user-details .input-box .details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9b59b6;
}
form .button{
    height: 45px;
    margin: 45px 0;
}

form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color:#fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

form .button input:hover{
    background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}

@media(max-width:584px){
    .container2{
        max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
}
}
</style>
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
        <?php 
            $form= <<<EOF
            <div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" id="stuName" value='%s' readonly>
            </div>
            <div class="input-box">
            <span class="details">Class</span>
            <input type="text" id="Class" value='%s' readonly>
        </div>
        <div class="input-box">
            <span class="details">Student ID</span>
            <input type="text" id="stuID" value='%s' name="receiverPhone" readonly>
        </div>
        <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" id="phone" value='%s' readonly>
        </div>
        EOF;

            //$stuName= $_GET["stuName"]; 
        
        ?>
        <div class="container2">
            <div class="title">Student Personal Information</div>
            <form action="api/updateStatus/createDelivery.php" method="post">
                <div class="user-details">
                    <?php
                        printf($form,$_GET["stuName"],$_GET["class"],$_GET["studentID"],$_GET["phone"]);
                    ?>
                </div>
                <div class="button">
                <input type="button" value="Edit" class="edit">
                </div>
            </form>
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
