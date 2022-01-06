<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/from.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700;900&display=swap" rel="stylesheet">


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


    <div class="form-continaer">
        <button class="cancelButton"><a href="index.php">الغاء</a></button>

        <div class="title">
            استمارة التسجيل </div>
        <form class="form">
            <div class="inputfield">
                <label>الاسم</label>
                <input type="text" class="input" name="name">
            </div>
            <div class="inputfield">
                <label>الرقم القومي</label>
                <input type="text" class="input" name="nationalId">
            </div>
            <div class="inputfield">
                <label>الكلية</label>
                <input type="text" class="input" name="college">
            </div>
            <div class="inputfield">
                <label>العام الدراسي</label>
                <input type="date" class="input" class="schoolyear">
            </div>
            <div class="inputfield">
                <label>النوع</label>
                <div class="custom_select">
                    <select name="gender">
                        <option value="">اختر</option>
                        <option value="male">ذكر</option>
                        <option value="female">انثي</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>البريد الالكتروني</label>
                <input type="email" class="input" name="email">
            </div>
            <div class="inputfield">
                <label>رقم الهاتف</label>
                <input type="text" class="input" name="phone">
            </div>
            <div class="inputfield">
                <label>العنوان</label>
                <textarea class="textarea" name="address"></textarea>
            </div>
            <div class="title">
                تسجيل الفحص
            </div>
            <div class="inputfield">
                <label>الطرفان السفليان</label>
                <div class="custom_select">
                    <select name="lowerSide">
                        <option value="سليم"><b>لاسليم</option>
                        <option value="غير سليم"><b>لاغير سليم</option>
                        <option value="others">أخري</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>الطرفان العلويان</label>
                <div class="custom_select">
                    <select name="upperside">
                        <option value="سليم"><b>لاسليم</option>
                        <option value="غير سليم"><b>لاغير سليم</option>
                        <option value="others">أخري</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>العمود الفقري</label>
                <div class="custom_select">
                    <select name="backbones">
                        <option value="سليم">
                            <div>سليم</div>
                        </option>
                        <option value="غير سليم">
                            <div>غير سليم</div>
                        </option>
                        <option value="أخري">
                            <div>أخري</div>
                        </option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>لائق طبيا</label>
                <div class="custom_select">
                    <select name="isfit">
                        <option value="نعم"><b>نعم</option>
                        <option value="لا"><b>لا</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>سكر عشوائي</label>
                <input type="text" class="input" name="sugarRate">
            </div>
            <div class="inputfield">
                <label>النبض </label>
                <div class="custom_select">
                    <select name="hearRate">
                        <option value="سليم"><b>منتظم</option>
                        <option value="غير سليم"><b>غير منتظم</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>كشف باطني </label>
                <div class="custom_select">
                    <select name="medical">
                        <option value="سليم"><b>سليم</option>
                        <option value="غير سليم"><b>غير سليم</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>فيرس C </label>
                <div class="custom_select">
                    <select name="virusC">
                        <option value="سالب"><b>سلبي</option>
                        <option value="موجب"><b>موجب</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>فيرس C </label>
                <div class="custom_select">
                    <select name="virusC">
                        <option value="سالب"><b>سلبي</option>
                        <option value="موجب"><b>موجب</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>تحليل السموم </label>
                <div class="custom_select">
                    <select name="toxic">
                        <option value="سالب"><b>سلبي</option>
                        <option value="موجب"><b>موجب</option>
                    </select>
                </div>
            </div>


            <div class="inputfield">
                <input type="submit" value="Register" class="btn">
            </div>
        </form>
    </div>
</body>

</html>