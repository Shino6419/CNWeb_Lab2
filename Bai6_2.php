<!DOCTYPE html>
<html>

<head>
    <title>Bài 6.2 - Phát sinh mảng và tính toán</title>
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
    $mang_so = array();

    // Phần 2: Tạo mảng ngẫu nhiên - Tìm max, min
    if (isset($_POST['btn_phat_sinh'])) {
        $n = $_POST["so_phan_tu"];
        $mang_so = array();
        for ($i = 0; $i < $n; $i++) {
            $mang_so[$i] = mt_rand(0, 20);
        }
    }

    // Các hàm xuất mảng
    function xuat_mang($mang_so)
    {
        if (count($mang_so) > 0) {
            echo implode(" ", $mang_so);
        }
    }

    // Hàm tìm min
    function tim_min($mang_so)
    {
        if (isset($mang_so[0])) {
            $min = $mang_so[0];
            $n = count($mang_so);
            for ($i = 1; $i < $n; $i++) {
                if ($mang_so[$i] < $min)
                    $min = $mang_so[$i];
            }
            echo $min;
        }
    }

    // Hàm tìm max
    function tim_max($mang_so)
    {
        if (isset($mang_so[0])) {
            $max = $mang_so[0];
            $n = count($mang_so);
            for ($i = 1; $i < $n; $i++) {
                if ($mang_so[$i] > $max) {
                    $max = $mang_so[$i];
                }
            }
            echo $max;
        }
    }

    // Hàm tính tổng
    function tinh_tong($mang_so)
    {
        $tong_so = 0;
        $n = count($mang_so);
        for ($i = 0; $i < $n; $i++)
            $tong_so += $mang_so[$i];
        echo $tong_so;
    }
    ?>

    <form method="POST" action="Bai6_2.php">
        <table style="border: 1px solid #cccccc; border-collapse: collapse;">
            <thead>
                <tr>
                    <th colspan="2" style="border: 1px solid #cccccc;">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Nhập số phần tử:</td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="so_phan_tu" value="<?php if (isset($_POST['so_phan_tu']))
                        echo $_POST['so_phan_tu']; ?>"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc;"></td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="submit" name="btn_phat_sinh"
                            value="Phát sinh và tính toán"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Mảng: </td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="mang_so"
                            disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">GTLN ( MAX ) trong mảng: </td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="gtln"
                            disabled="disabled" value="<?php tim_max($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">GTNN ( MIN ) trong mảng: </td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="ttnn"
                            disabled="disabled" value="<?php tim_min($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #cccccc; padding: 10px;">Tổng mảng: </td>
                    <td style="border: 1px solid #cccccc; padding: 10px;"><input type="text" name="tong"
                            disabled="disabled" value="<?php tinh_tong($mang_so); ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>

</body>

</html>