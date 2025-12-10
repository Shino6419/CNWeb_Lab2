<!DOCTYPE html>
<html>

<head>
    <title>Bài 6.3 - Đếm số lần xuất hiện và tạo mảng duy nhất</title>
    <meta charset="utf-8">
    <style>
        * {
            font-family: Tahoma;
        }

        table {
            width: 400px;
            margin: 100px auto;
        }

        table th {
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <?php
    $mang_duy_nhat = array();
    $so_lan = array();
    $chuoi = "";

    // Phần 3: Đếm số lần xuất hiện và tạo mảng duy nhất
    if (isset($_POST['btn_thuc_hien'])) {
        $mang_so = explode(",", $_POST['nhap_mang_3']);
        $mang_duy_nhat = array_unique($mang_so);
        $so_lan = array_count_values($mang_so);

        $chuoi = "";
        foreach ($so_lan as $key => $value) {
            $chuoi = $chuoi . trim($key) . ":" . $value . " ";
        }
    }

    // Hàm xuất mảng duy nhất
    function xuat_mang_duy_nhat($mang_so)
    {
        if (isset($mang_so[0])) {
            echo implode(", ", $mang_so);
        }
    }
    ?>

    <form method="POST" action="Bai6_3.php">
        <table style="border: 1px solid #cccccc; border-collapse: collapse;">
            <thead>
                <tr>
                    <th colspan="2" style="border: 1px solid #cccccc;">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Mảng (cách nhau bằng dấu phẩy):</td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="nhap_mang_3" value="<?php if (isset($_POST['nhap_mang_3']))
                        echo $_POST['nhap_mang_3']; ?>" placeholder="Ví dụ: 1,2,1,3,2,1"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Số lần xuất hiện:</td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="so_lan_xuat_hien"
                            value="<?php echo $chuoi; ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Mảng duy nhất:</td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="mang_duy_nhat"
                            value="<?php xuat_mang_duy_nhat($mang_duy_nhat); ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid #cccccc; padding: 10px;"><input type="submit"
                            name="btn_thuc_hien" value="Thực hiện"></td>
                </tr>
            </tbody>
        </table>
    </form>

</body>

</html>