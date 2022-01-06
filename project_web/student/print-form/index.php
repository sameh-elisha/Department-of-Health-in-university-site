<?php
    session_start();
    include '../../Connections/connect.php';
    $id= $_SESSION['id'];
    if(isset($id)){
        $sql = "SELECT * FROM student where id=$id ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id_date = $row['id_date'];
            $name = $row['name'];
            $national_num = $row['national_num'];
            $phone =$row['phone'];
            $university =$row['university'];
        }
    }
        $sql = "SELECT * FROM dates where id_date = $id_date";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $examination_date = $row['examination_date'];
                $num_students = $row['num_student'];
            }
        }
    
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-aweaome/4.7.0/css/fontawesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 50%;
        cursor: pointer;

    }
    </style>
</head>

<body>
    <div class="row">
        <div>
            <img src="images/شعارة_وزارة الصحه.png" alt="" class="icons">

        </div>
        <div>
            <h1>
                الإدارة العامة للشؤون والخدمات الطبية
            </h1>
            <h2>نموذج اللياقة البدنية والكشف الطبي والفحص على الطلاب المستجدين في بنها</h2>
        </div>
        <div>
            <img src="images/شعار_جامعة_بنها.png" alt="" class="icons">
        </div>
    </div>

    <div>
        <h3 disabled="disabled" class="student-info"> بيانات الطالب</h3>
    </div>

    <div>
        <table disabled="disabled" class="table-design">
            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design" value="<?php
                    if(isset($national_num)) {
                        echo $national_num;
                    }
                    ?>">
                </td>
                <th>
                    : الرقم القومي
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design" value="<?php
                    if(isset($name)) {
                        echo $name;
                    }
                    ?>">
                </td>
                <th>
                    : الإسم بالكامل
                </th>
            </tr>
            <tr>
                <td>
                    <input type="text" value="التليفون" disabled="disabled" class="input-design" value="<?php
                    if(isset($phone)) {
                        echo $phone;
                    }
                    ?>">
                </td>
                <th>
                    : وسائل الاتصال
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design" value="<?php
                    if(isset($university)) {
                        echo $university;
                    }
                    ?>">
                </td>
                <th>
                    : الكلية
                </th>
            </tr>
            <tr>
                <td>
                    <select id="years" disabled="disabled" class="input-design">
                        <option value="2021-2022">2021-2022</option>
                    </select>
                </td>
                <th>
                    : العام الدراسي
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design" value="<?php
                    if(isset($examination_date)) {
                        echo $examination_date;
                    }
                    ?>">
                </td>
                <th>
                    : تاريخ الكشف
                </th>
            </tr>

            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design" value="<?php
                    if(isset($num_students)) {
                        echo $num_students;
                    }
                    ?>">
                </td>
                <th>
                    : رقم الكشف
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design" value="">
                </td>
                <th>
                    : تاريخ الميلاد
                </th>
            </tr>

        </table>


    </div>

    <div>
        <h3 disabled="disabled" class="student-info"> الفحص العام</h3>
    </div>

    <table disabled="disabled" class="table-design check-t">
        <tr>
            <td>
                <input type="text" disabled="disabled" class="input-design rmd">
            </td>
            <th>
                فصيلة الدم
            </th>
            <td>
                <input type="text" disabled="disabled" class="input-design rmd">
            </td>
            <th>
                الوزن
            </th>
            <td>
                <input type="text" disabled="disabled" class="input-design rmd">
            </td>
            <th>
                الطول
            </th>
        </tr>
    </table>

    <div>
        <h3 disabled="disabled" class="student-info"> تشخيص الرمد</h3>
    </div>

    <div>
        <table disabled="disabled" class="table-design rmd-t">
            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    يسرى
                </td>
                <th disabled="disabled" class="trick">يسرى</th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    يمنى
                </td>
                <th>
                    : قوة التشخيص بدون بنظارة
                </th>
            </tr>

            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    يسرى
                </td>
                <th disabled="disabled" class="trick">يسرى</th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    يمنى
                </td>
                <th>
                    : قوة التشخيص بنظارة
                </th>
            </tr>

            <tr>
                <td>
                    لا يميز <input disabled="disabled" type="checkbox" value="cricket" name="game"
                        onclick="myFun(this)" />
                </td>
                <th disabled="disabled" class="trick">
                    : يميز
                </th>
                <td>
                    يميز <input disabled="disabled" type="checkbox" value="cricket" name="game" onclick="myFun(this)" />
                </td>
                <th>
                    : تمييز الألوان
                </th>
            </tr>

            <tr>
                <td>
                    لا يوجد <input disabled="disabled" type="checkbox" value="cricke" name="heaven"
                        onclick="heaven(this)" />
                </td>
                <th disabled="disabled" class="trick">
                    : يميز
                </th>
                <td>
                    يوجد <input disabled="disabled" type="checkbox" value="cricke" name="heaven"
                        onclick="heaven(this)" />
                </td>
                <th>
                    : الحول
                </th>
            </tr>

            <tr>
                <td>
                    <select id="results" disabled="disabled" class="input-design">
                        <option value="good">جيد</option>
                        <option value="not very bad">مقبول</option>
                        <option value="bad">سئ</option>
                    </select>
                </td>
                <th disabled="disabled" class="special">
                    نتيجة العرض
                </th>
                <td>
                    مطلوب <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير مطلوب <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    عرض إستشاري رمد
                </th>
            </tr>

            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : ختم الطبيب
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    التاريخ
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : التوقيع
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    اسم الطبيب
                </th>
            </tr>
        </table>


    </div>

    <div>
        <h3 disabled="disabled" class="student-info"> التشخيص الباطني</h3>
    </div>

    <div>
        <table disabled="disabled" class="table-design rmd-t">
            <tr>
                <td>
                    منتظم <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير منتظم <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th disabled="disabled" class="trick">يسرى</th>
                <td>
                    دقيقة/
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    : النبض
                </th>
            </tr>

            <tr>
                <td>
                    سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>القلب</th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    : ضغط الدم
                </th>
            </tr>

            <tr>
                <td>
                    قلب <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    باطني <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    عرض استشاري
                </th>
                <td>
                    سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    : كشف باطني
                </th>
            </tr>

            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : ختم الطبيب
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    التاريخ
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : التوقيع
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    اسم الطبيب
                </th>
            </tr>
        </table>
    </div>

    <div>
        <h3 disabled="disabled" class="student-info"> العظام والجهاز الحركي</h3>
    </div>

    <div>
        <table disabled="disabled" class="table-design rmd-t">
            <tr>
                <td>
                    سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    أخرى <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    : الطرفان العلويان
                </th>
                <td>
                    سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    أخرى <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    : الطرفان السفليان
                </th>
            </tr>

            <tr>
                <td>
                    مطلوب <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير مطلوب <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    عرض استشاري
                </th>
                <td>
                    سليم <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    تشوهات <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    : العمود الفقري
                </th>
            </tr>

            <tr>
                <td>
                    <select id="results" disabled="disabled" class="input-design">
                        <option value="good">جيد</option>
                        <option value="not very bad">مقبول</option>
                        <option value="bad">سئ</option>
                    </select>
                </td>
                <th>
                    نتيجة العرض
                </th>
                <td>
                    جيدة <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير جيدة <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    بدرجة إعاقة <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    : الحالة العامة
                </th>
            </tr>

            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : ختم الطبيب
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    التاريخ
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : التوقيع
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    اسم الطبيب
                </th>
            </tr>
        </table>
    </div>

    <div>
        <h3 disabled="disabled" class="student-info"> الفحوص الأساسية</h3>
    </div>

    <div>
        <table disabled="disabled" class="table-design rmd-t">
            <tr>
                <td>
                    إيجابي <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    سلبي <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    تحليل سموم
                </th>
                <td>
                    طبيعي <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    غير طبيعي <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    : سكر عشوائي
                </th>
            </tr>

            <tr>
                <td disabled="disabled" class="trick">

                </td>
                <th disabled="disabled" class="trick">

                </th>

                <td>
                    جيدة <input disabled="disabled" type="checkbox" value="cricke" name="needed" onclick="needed(this)"
                        disabled="disabled" class="paddooo" />
                    بدرجة إعاقة <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th disabled="disabled" class="guky">
                    مسح فيرس سي
                </th>
            </tr>
        </table>
    </div>


    <div>
        <h3 disabled="disabled" class="student-info"> الفحوص الإضافية</h3>
    </div>

    <div>
        <table disabled="disabled" class="table-design rmd-t modified">
            <tr>
                <td>
                    صورة دم <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    وظائف كلى <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    وظائف كبد <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    أخرى <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    :الفحوصات
                </th>
                <td>
                    رسم قلب <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    رسم مخ <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    مقياس سمع <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" disabled="disabled" class="paddooo" />
                    أشعة إيكو على القلب <input disabled="disabled" type="checkbox" value="cricke" name="needed"
                        onclick="needed(this)" />
                </td>
                <th>
                    :الفحوصات
                </th>
            </tr>

            <tr>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : ختم الطبيب
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    التاريخ
                </th>
                <td>
                    <input type="text" disabled="disabled" class="input-design rmd">
                    : التوقيع
                    <input type="text" disabled="disabled" class="input-design rmd">
                </td>
                <th>
                    اسم الطبيب
                </th>
            </tr>
        </table>
    </div>


    <script>
    function myFun(checkbox) {
        var checkboxes = document.getElementsByName('game')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
    </script>

    <script>
    function heaven(checkbox) {
        var checkboxes = document.getElementsByName('heaven')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
    </script>

    <script>
    function needed(checkbox) {
        var checkboxes = document.getElementsByName('needed')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
    </script>

    <input type="button" value="Print" onClick="window.print()">
</body>

</html>