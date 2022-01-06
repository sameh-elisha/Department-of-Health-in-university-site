<?php
session_start();
include '../Connections/connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id_student =$_POST['national_id'];
if(is_numeric($id_student)){
    sleep(1);
    $sql = "SELECT * FROM student where national_num = $id_student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id =$row['id'];
        $name =$row['name'];
    }
}
    if(isset($id)){
        $sql2 = "SELECT * FROM examinations where id_medical = $id";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
                $lowerside =$row['lowerside'];
                $upperside =$row['upperside'];
                $backbones =$row['backbones'];
                $isfit =$row['isfit'];
                $sugarrate =$row['sugarrate'];
                $hearrate =$row['hearrate'];
                $medical =$row['medical'];
                $virusC =$row['virusC'];
                $toxic =$row['toxic'];
                $summary=$row['summary'];
            }
    }else{
        $id_error="id not exist";
    }
    } 
    }else{
        $id_error="Enter only numbers";
    }
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/from.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="script/script.js" defer></script>


</head>

<body dir="rtl">
    <header>
        <div class=" container ">
            <div class="logo ">
                <img src="images/fci_logo3.png " alt=" " srcset=" ">
            </div>
            <nav>
                <button><a href="#printButton">طباعة الكشف الطبي</a> </button>
                <button><a href="result.php"><a href="index.php">تسجيل الكشف الطبي</a></button>


                <form class="id-header" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <section class="id-section">
                        <input type="text " name="national_id" id="id-input" required
                            placeholder="ادخل الرقم التعريفي للطالب ">
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
            </nav>

        </div>
    </header>
    <div class="form-continaer">
        <div class="title ">
            نتيجة الكشف الطبي </div>
        <form class="form">
            <div class="inputfield">
                <label>الاسم</label>
                <input type="text" class="input" name="name" readonly value="<?php if (isset($name)){
                    echo $name;
                }
                ?>">
            </div>
            <div class="inputfield">
                <label>الطرفان السفليان</label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($lowerside)){
                    echo $lowerside;
                }
                ?>">
            </div>
            <div class="inputfield">
                <label>الطرفان العلويان</label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($upperside)){
                    echo $upperside;
                }
                ?>">

            </div>
            <div class="inputfield">
                <label>العمود الفقري</label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($backbones)){
                    echo $backbones;
                }
                ?>">

            </div>
            <div class="inputfield">
                <label>لائق طبيا</label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($isfit)){
                    echo $isfit;
                }
                ?>">

            </div>
            <div class="inputfield">
                <label>سكر عشوائي</label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($sugarrate)){
                    echo $sugarrate;
                }
                ?>">
            </div>
            <div class="inputfield">
                <label>النبض </label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($hearrate)){
                    echo $hearrate;
                }
                ?>">

            </div>
            <div class="inputfield">
                <label>كشف باطني </label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($medical)){
                    echo $medical;
                }
                ?>">

            </div>
            <div class="inputfield">
                <label>فيرس C </label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($virusC)){
                    echo $virusC;
                }
                ?>">

            </div>
            <div class="inputfield">
                <label>تحليل السموم </label>
                <input type="text" class="input" name="sugarRate" readonly value="<?php
               if (isset($toxic)){
                    echo $toxic;
                }
                ?>">
            </div>

            <div class="inputfield">
                <label>ملاحظات</label>
                <textarea class="textarea" name="summary" value="" readonly
                    style=""><?php if (isset($summary)){echo $summary;}?></textarea>
            </div>
            <input type="button" id="printButton" class="print" value="طباعة" onClick="window.print()">

        </form>
    </div>
</body>

</html>