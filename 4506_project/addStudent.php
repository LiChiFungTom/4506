<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            
            margin-left: auto;
            margin-right: auto;
        }
        table th{
            width: auto;
        }
        * {
        margin:0; 
        padding:0;
        }
        body{
            background-size:280%;
            background-position:-400px 0px;
            
        }
        div.main{
            width: 400px;
            margin: 100px auto 0px auto;
        }
        h2{
            text-align: center;
            padding: 20px;
            font-family: sans-serif;
        }
        div.report{
            background-color:rgba(0,0,0,0.5);
            width:100%;
            font-size: 18px;
            border-radius: 10px;
            border:1px soid rgba(255,255,255,0.3);
            box-shadow:2px 2px 15px rgba(0,0,0,0.3);
            color:#fff;
        }
        form{
            margin: 40px;
        }
        label{
            font-family:sans-serif;
            font-size:18px;
            font-style:italic;
        }
        input[type=text]{
            width:300px;
            border:1px solid #ddd;
            border-radius:3px;
            outline:0;
            padding:7px;
            background-color: #fff;
            box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
        }
        div #student{
            background-color: white;
            border-radius: 15px;
            color: black;
        }
        table #addStudent{
            margin-left: auto;
            margin-right: auto;
        }
        table #addStudent th{
            width: auto;
        }

        #submit{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 23px;
            
        }
        #submit:hover{
            background-color: white;
            color: black;
        }

        #clear{
            background-color: #008CBA; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 23px;
      
            
        }
        #clear:hover{
            background-color: red;
            color: white;
        }
        

    </style>
    <script type="text/javascript" src="jslib/jquery-1.11.1.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
           var no=0;
           $("#addStudent").hide();
            $("input[type='checkbox']").click(function(){
                no+=1;
                $("#addStudent").show();
                var row = $(this).closest('tr');
                var studentNo=row.find("td:eq(2)").html();
                var studentName=row.find("td:eq(3)").html();
                $('#addStudent tr:last').after("<tr><td>"+no+"</td><td>"+studentNo+"</td><td>"+studentName+"</td></tr>");
                $(this).closest('tr').hide();
            });
            $("#clear").click(function(){
                location.reload();
            });
            
            $("#submit").click(function(){
                var Class=$("#Class").val();
                var text = $('textarea').val();
                alert("Successful!");
                window.location.href = "createClass.php?no=" + no + "&class=" + Class + "&des=" + text;
            });
        });
    </script>
</head>
<body>
    <?php
        $class=$_GET["class"];
        $teaName=$_GET["teaName"];

    ?>
    
    <div class="main">
        <div class="report">
            <h2>Add Student</h2>
            <form>
            <label>Class</label>
            <br>
            <input type="text" name="classs" value=<?php echo $class ?> id="Class" readonly>
            <br><br>
            <label>Teacher’s Name</label>
            <br>
            <input type="text" name="teaName" value=<?php echo $teaName ?> readonly>
            <br><br>
            <label>Description</label>
            <br>
            <textarea rows="4" cols="40" name="comment" form="usrform">Class Description....</textarea>
            <br><br>
            <label>Class Student</label>
            <br>
            <div id="student">
                <table id="addStudent">
                    <th>No</th>
                    <th>Student Number</th>
                    <th>Student Name</th>
                </table>
            </div>
            <br><br>
            <input type="button" value="confirm" id="submit">
            <input type="button" value="clear sutdent" id="clear" style="float: right;">
            
            </div>
        </div>
        <div class="main">
            <div class="report">
                <table id="allStudent">
                    <th>     
                    </th>
                    <th>No</th>
                    <th>Student Number</th>
                    <th>Student Name</th>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>2000000</td>
                        <td>Ho Man Chung</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td>1</td>
                        <td>2000100</td>
                        <td>Li Chi Fung</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td>1</td>
                        <td>2000000</td>
                        <td>Ho Man Chung</td>
                    </tr>
                </table>
            </div>
        </div>
</body>
</html>