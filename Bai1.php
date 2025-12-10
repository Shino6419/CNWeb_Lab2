<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
</head>

<body>
    <?php
    $xuat_ten = "";
    if (isset($_POST["ten"])) {
        $ten = $_POST["ten"];
        $xuat_ten = "Chào bạn " . $ten;

    }
    ?>
    <form action="vidu.php" method="post">
        <table style="width: 271px; border-collapse: collapse; border: 1px solid black;">
            <tr>
                <td colspan="2" style="background-color: #336699;"><strong>In lời chào</strong></td>
            </tr>
            <tr>
                <td style="width: 91px; border: 1px solid black;">Họ tên bạn</td>
                <td style="width: 164px; border: 1px solid black;">
                    <input type="text" name="ten" id="chao3" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php echo $xuat_ten; ?></label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; vertical-align: middle; border: 1px solid black;"><input
                        type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>