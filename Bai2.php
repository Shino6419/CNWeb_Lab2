<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
</head>

<body>
    <?php
    if (isset($_POST["a"]) && isset($_POST["b"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        if ($a == 0) {
            if ($b == 0)
                $nghiem = "Phương trình có vô số nghiệm";
            if ($b <> 0)
                $nghiem = "Phương trình vô nghiệm";
        } else {
            $x = -($b / $a);
            $x = round($x, 2);
            $nghiem = "x= $x";
        }

    }
    ?>
    <form action="Bai2.php" method="post">
        <table style="width: 744px; border-collapse: collapse; border: 1px solid black;">
            <tr>
                <td colspan="3" style="background-color: #336699;"><strong>Giải phương trình bậc 1 </strong></td>
            </tr>
            <tr>
                <td style="width: 120px; border: 1px solid black;">Phương trình </td>
                <td style="width: 250px; border: 1px solid black;">
                    <input name="a" type="text" />
                    X +
                </td>
                <td style="width: 352px; border: 1px solid black;"><label for="textfield"></label>
                    <input name="b" type="text" id="textfield" />
                    = 0
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="kq" type="text" id="textfield2" value="<?php if (isset($nghiem))
                        echo $nghiem; ?>" />
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; vertical-align: middle; border: 1px solid black;"><input
                        type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>