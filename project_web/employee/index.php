<?php
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '../Connections/connect.php';
    $id_student =$_POST['id_student'];
    if(is_numeric($id_student)){
        $_SESSION['id_student'] = $_POST['id_student'];
        sleep(1);
        $id_error = '';
    
        if(empty($id_student))
        {
            $id_error = 'Field is Required';
        }
        $sql = "SELECT * FROM student where national_num = $id_student";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $_SESSION['id'] =$row['id'];
    
            $_SESSION['id_date'] =$row['id_date'];
            $id_date = $row['id_date'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['national_num'] = $row['national_num'];
            $_SESSION['phone'] =$row['phone'];
            $_SESSION['university']=$row['university'];
            
        }
        } else {
            $id_error="Id is wrong";
        }
    
        if(isset($id_date) !== null){
        $int_value = (int) isset($id_date);
        $sql_2 = "SELECT * FROM dates where id_date =  $int_value";
        $result_2 = $conn->query($sql_2);
        if ($result_2->num_rows > 0) {
        // output data of each row
        while($row_2 = $result_2->fetch_assoc()) {
            $_SESSION['examination_date'] = $row_2['examination_date'];
            $_SESSION['num_student'] = $row_2['num_student'];
            }
    
            header("Location:form.php");
            exit;
        }
    }else{
    
        header("Location:form.php");
        exit;
    }
    if($id_error ==""){
        $_SESSION['examination_date']="لا يوجد";
        $_SESSION['num_student']="لا يوجد";
        header("Location:form.php");
        exit;
    }
    }
    $id_error="ُEnter only numbers";
  



}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <script src="js\validation.js" defer></script>
    <link rel="stylesheet" href="css/sheet.css" />
    <title>form</title>
</head>

<body dir="rtl">
    <header>
        <div class="container">
            <div class="logo">
                <img src="images/fci_logo3.png " alt=" " srcset="" />
            </div>
            <div class="content">التسجيل الطبي للطلاب المرشحين</div>
        </div>
    </header>
    <div class="registration">
        <form id="sample_form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <section class="id-section">
                <span id="message"></span>
                <label class="padding" for="id-input">الرقم التعريفي</label>
                <input type="text " id="id-input" name="id_student" required placeholder="ادخل الرقم التعريفي للطالب "
                    class="form-control form_data" />
                <span style="color:red;" id="id_error" class="text-danger">
                    <?php
                        if (isset($id_error)){
                            echo $id_error;
                        }
                    ?>
                </span>
            </section>
            <input type="submit" value="تسجيل" class="btn">

        </form>
</body>

</html>