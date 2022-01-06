<?php
session_start();

include '../Connections/connect.php';
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $sql3 = "SELECT * FROM examinations where id_medical = $id ";
    $result_3 = $conn->query($sql3);
    if ($result_3->num_rows > 0) {
        while($row_2 = $result_3->fetch_assoc()) {
            $result_lowerside = $row_2['lowerside'];
            $result_upperside = $row_2['upperside'];
            $result_backbones = $row_2['backbones'];
            $result_isfit = $row_2['isfit'];
            $result_sugarrate = $row_2['sugarrate'];
            $result_hearrate = $row_2['hearrate'];
            $result_medical = $row_2['medical'];
            $result_virusC =$row_2['virusC'];
            $result_toxic = $row_2['toxic'];
            $result_summary = $row_2['summary'];
            }
        }
    }


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $lowerside =$_POST['lowerside'];
    $upperside =$_POST['upperside'];
    $backbones =$_POST['backbones'];
    $isfit =$_POST['isfit'];
    $sugarrate =$_POST['sugarrate'];
    $hearrate =$_POST['hearrate'];
    $medical =$_POST['medical'];
    $virusC =$_POST['virusC'];
    $toxic =$_POST['toxic'];
    $summary=$_POST['summary'];
    $id_medical=$_SESSION['id'];
    $sql_insert ="INSERT INTO examinations (id_medical, lowerside, upperside, backbones, isfit, sugarrate, hearrate, medical, virusC, toxic,summary) 
    VALUES ('$id_medical' ,'$lowerside' , '$upperside', '$backbones', '$isfit', '$sugarrate','$hearrate' , '$medical', '$virusC', '$toxic','$summary')";
    $sql_update = "UPDATE examinations SET lowerside = '$lowerside', upperside = '$upperside', backbones = '$backbones',
     isfit = '$isfit', sugarrate = '$sugarrate', hearrate = '$hearrate',
      medical = '$medical', virusC = '$virusC', toxic = '$toxic', summary='$summary' WHERE examinations.id_medical = '$id_medical';";
    try {
        $result = $conn->query($sql_insert);
        sleep(1);
        header("Location:index.php");
        exit;
    } catch (Exception $e) {
        $result = $conn->query($sql_update);
        sleep(1);
        header("Location:index.php");
        exit;
    }


}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/from.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <script src="script/script.js" defer></script>

</head>

<body dir="rtl">
    <header>
        <div class="containerh">
            <div class="logo">
                <img src="images/fci_logo3.png " alt=" " srcset="" />
            </div>
            <div class="content">التسجيل الطبي للطلاب المرشحين</div>
        </div>
    </header>
    <div class="form-continaer">
        <div class="title">استمارة التسجيل</div>
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

            <div class="inputfield">
                <label>الاسم</label>
                <input type="text" class="input" name="name" disabled="disabled"
                    value="<?php echo $_SESSION['name']; ?>" />
            </div>
            <div class="inputfield">
                <label>الرقم القومي</label>
                <input type="text" class="input" name="nationalId" disabled="disabled"
                    value="<?php echo $_SESSION['national_num']; ?>" />
            </div>
            <div class="inputfield">
                <label>الكلية</label>
                <input type="text" class="input" name="college" disabled="disabled"
                    value="<?php echo $_SESSION['university']; ?>" />
            </div>
            <div class="inputfield">
                <label>رقم الهاتف</label>
                <input type="text" class="input" name="phone" disabled="disabled"
                    value="<?php echo $_SESSION['phone']; ?>" />
            </div>
            <div class="inputfield">
                <label>تاريخ الكشف</label>
                <input type="text" class="input" name="phone" disabled="disabled"
                    value="<?php echo $_SESSION['examination_date']; ?>" />
            </div>
            <div class="inputfield">
                <label>رقم الكشف</label>
                <input type="text" class="input" name="num_date" disabled="disabled"
                    value="<?php echo $_SESSION['num_student']; ?>" />
            </div>
            <div class="title">تسجيل الفحص</div>


            <div class="inputfield">
                <label>الطرفان السفليان</label>
                <div class="custom_select">
                    <select name="lowerside">
                        <option value="<?php
               if (isset($result_lowerside)){
                    echo $result_lowerside;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_lowerside)){
                    echo $result_lowerside;
                }
                ?></option>

                        <option value="سليم"><b>سليم</option>
                        <option value="غير سليم"><b>غير سليم</option>
                        <option value="اخري"><b>أخري</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>الطرفان العلويان</label>
                <div class="custom_select">
                    <select name="upperside">
                        <option value="<?php
               if (isset($result_upperside)){
                    echo $result_upperside;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_upperside)){
                    echo $result_upperside;
                }
                ?></option>
                        <option value="سليم"><b>سليم</option>
                        <option value="غير سليم"><b>غير سليم</option>
                        <option value="اخري"><b>أخري</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>العمود الفقري</label>
                <div class="custom_select">
                    <select name="backbones">
                        <option value="<?php
               if (isset($result_backbones)){
                    echo $result_backbones;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_backbones)){
                    echo $result_backbones;
                }
                ?></option>
                        <option value="سليم"><b>سليم</option>
                        <option value="غير سليم"><b>غير سليم</option>
                        <option value="اخري"><b>أخري</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>لائق طبيا</label>
                <div class="custom_select">
                    <select name="isfit">
                        <option value="<?php
               if (isset($result_isfit)){
                    echo $result_isfit;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_isfit)){
                    echo $result_isfit;
                }
                ?></option>
                        <option value="نعم"><b>نعم</option>
                        <option value="لا"><b>لا</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>سكر عشوائي</label>
                <input type="text" class="input" name="sugarrate" value="<?php
               if (isset($result_sugarrate)){
                    echo $result_sugarrate;
                }
                ?>" />
            </div>
            <div class="inputfield">
                <label>النبض </label>
                <div class="custom_select">
                    <select name="hearrate">
                        <option value="<?php
               if (isset($result_hearrate)){
                    echo $result_hearrate;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_hearrate)){
                    echo $result_hearrate;
                }
                ?></option>
                        <option value="منتظم"><b>منتظم</option>
                        <option value="غير منتظم"><b>غير منتظم</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>كشف باطني </label>
                <div class="custom_select">
                    <select name="medical">
                        <option value="<?php
               if (isset($result_medical)){
                    echo $result_medical;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_medical)){
                    echo $result_medical;
                }
                ?></option>
                        <option value="سليم"><b>سليم</option>
                        <option value="غير سليم"><b>غير سليم</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>فيرس C </label>
                <div class="custom_select">
                    <select name="virusC">
                        <option value="<?php
                if (isset($result_virusC)){
                     echo $result_virusC;
                 }
                 ?>" selected="selected" hidden><?php
                if (isset($result_virusC)){
                     echo $result_virusC;
                 }
                 ?></option>
                        <option value="سلبي"><b>سلبي</option>
                        <option value="موجب"><b>موجب</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>تحليل السموم </label>
                <div class="custom_select">
                    <select name="toxic">
                        <option value="<?php
               if (isset($result_toxic)){
                    echo $result_toxic;
                }
                ?>" selected="selected" hidden><?php
               if (isset($result_toxic)){
                    echo $result_toxic;
                }
                ?></option>
                        <option value="سلبي"><b>سلبي</option>
                        <option value="موجب"><b>موجب</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>ملخص الحالة</label>
                <textarea class="textarea" name="summary"><?php
               if (isset($result_summary)){
                    echo $result_summary;
                }
                ?></textarea>
            </div>
            <div class="inputfield">
                <input type="submit" value="تحديث المعلومات" class="btn">
            </div>
        </form>
    </div>
</body>

</html>