<!DOCTYPE html>
<html>

<head>
    <title>Bài 6.1 - Nhập và tính tổng dãy số</title>
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
    $ket_qua = 0;
    $mang_so = array();

    // Phần 1: Nhập và tính toán trên dãy số
    if (isset($_POST['btn_goi'])) {
        $mang_so = explode(",", $_POST['nhap_mang']);
        $n = count($mang_so);
        $ket_qua = 0;
        for ($i = 0; $i < $n; $i++) {
            $ket_qua += trim($mang_so[$i]);
        }
    }
    ?>

    <form method="POST" action="Bai6_1.php">
        <table style="border: 1px solid #cccccc; border-collapse: collapse;">
            <thead>
                <tr>
                    <th colspan="2" style="border: 1px solid #cccccc;">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Nhập dãy số (cách nhau bằng dấu phẩy):</td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="nhap_mang" value="<?php if (isset($_POST['nhap_mang']))
                        echo $_POST['nhap_mang']; ?>" placeholder="Ví dụ: 1,2,3,4,5"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc;"></td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="submit" name="btn_goi"
                            value="Tổng dãy số"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Tổng dãy số:</td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="ket_qua"
                            disabled="disabled" value="<?php echo $ket_qua ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>

</body>

</html>