<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    // giai phuong trinh bac 1
    function giai_pt_bac_1($a, $b)
    {
        if ($a == 0) {
            if ($b == 0)
                $nghiem = "Phương trình có vô số nghiệm";
            else if ($b <> 0)
                $nghiem = "Phương trình vô nghiệm";
        } else {
            $x = round(-($b / $a), 2);
            $nghiem = "x=" . $x;
        }
        return $nghiem;
    }

    // giai phuong trinh bac 2
    function giai_pt_bac_2($a, $b, $c)
    {
        if ($a == 0)
            $nghiem = giai_pt_bac_1($b, $c);
        if ($a <> 0) {
            $delta = pow($b, 2) - 4 * $a * $c;
            if ($delta < 0)
                $nghiem = "Phương trình vô nghiệm";
            else if ($delta == 0) {
                $x = -($b / (2 * $a));
                $nghiem = "Phương trình có nghiệm kép x1=x2=" . round($x, 2);
            } else {
                $can = sqrt($delta);
                $x1 = (-$b + $can) / (2 * $a);
                $x2 = (-$b - $can) / (2 * $a);
                $nghiem = "Phương trình có 2 nghiệm phân biệt x1=" . round($x1, 2) . ",x2=" . round($x2, 2);
            }
        }
        return $nghiem;
    }
    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        $nghiem = giai_pt_bac_2($_POST["a"], $_POST["b"], $_POST["c"]);
    } else {
        $nghiem = "";
    }

    ?>
    <form action="Bai5.php" method="post">
        <table style="width: 806px; border-collapse: collapse; border: 1px solid black;">
            <tr>
                <td colspan="4" style="background-color: #336699; border: 1px solid black;"><strong>Giải phương trình
                        bậc 2</strong></td>
            </tr>
            <tr>
                <td style="width: 83px; border: 1px solid black;">Phương trình </td>
                <td style="width: 236px; border: 1px solid black;">
                    <input name="a" type="text" />
                    X^2 +
                </td>
                <td style="width: 218px; border: 1px solid black;"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" />
                    X+
                </td>
                <td style="width: 241px; border: 1px solid black;"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" />
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="4" style="border: 1px solid black;">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="" type="text" id="textfield2" value="<?php if (isset($nghiem))
                        echo $nghiem; ?>" />
            </tr>
            <tr>
                <td colspan="4" style="text-align: center; vertical-align: middle; border: 1px solid black;"><input
                        type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>