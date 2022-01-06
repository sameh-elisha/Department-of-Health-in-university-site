<?php
    session_start();
    include '../Connections/connect.php';
    $sql = "SELECT * FROM dates";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dates[]=$row;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $national_id = $_POST['id_national'];
    $date_exam = $_POST['date_exam'];
    if(is_numeric($national_id)){
    $checkID= false;
    $sql = "SELECT * FROM student where national_num = $national_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $checkID =true;

        while($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['id'];
         }

    } 
    if($checkID){
        $sql2 = "UPDATE student set id_date= (SELECT id_date from dates where examination_date='$date_exam') where national_num = $national_id";
        $sql3 = "UPDATE dates set num_student= num_student+1 where examination_date='$date_exam' ";
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
        header("Location:print-form/index.php");
        exit;
    }else{
        $id_error="Id Is Wrong";
    }
    }else{
        $id_error="Enter only numbers";

    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sheet.css">
    <link rel="stylesheet" href="css/header.css">

    <title>form</title>
</head>

<body dir="rtl">
    <header>
        <div class=" container ">
            <div class="logo ">
                <img src="images/fci_logo3.png " alt=" " srcset=" ">
            </div>
            <nav>

                <button><a href="result.php">نتيجة الكشف الطبي</a></button>
            </nav>
            <div class="content ">
                التسجيل الطبي للطلاب المرشحين
            </div>
        </div>
    </header>
    <div class="registration ">
        <div class="container">
            <div class="registration-message hidden">
                <p class="message-text">
                    لايوجد طالب يحمل هذا الرقم التعريفي.التأكد واعادة المحاولة
                </p>
            </div>
            <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <section class="id-section">
                    <label class="padding" name="id_national" for="id-input">الرقم التعريفي</label>
                    <input type="text " name="id_national" id="id-input" required
                        placeholder="ادخل الرقم التعريفي للطالب ">
                </section>
                <section>
                    <select name="date_exam" required
                        style="padding: 10px; background:#edf2ff; border:none; margin:0 0 20px 0">
                        <?php
                        if(isset($dates)){
                            foreach($dates as $date){
                                $temp= $date["examination_date"];
                                echo "<option value='$temp'>$temp</option>";
                            }
                        }
                        ?>
                    </select>

                </section>
                <button id="insert-button" type="submit">ادخال</button>
            </form>
            <span style="color:red;" id="id_error" class="text-danger">
                <?php
                        if (isset($id_error)){
                            echo $id_error;
                        }
                    ?>
            </span>
        </div>
    </div>


</body>

</html>