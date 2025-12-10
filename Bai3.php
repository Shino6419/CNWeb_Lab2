<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<body>
    <?php
    $chu = "";
    if (isset($_POST["so"])) {
        if (is_numeric($_POST["so"])) {
            switch ($_POST["so"]) {
                case 0:
                    $chu = "Không";
                    break;
                case 1:
                    $chu = "Một";
                    break;
                case 2:
                    $chu = "Hai";
                    break;
                case 3:
                    $chu = "Ba";
                    break;
                case 4:
                    $chu = "Bốn";
                    break;
                case 5:
                    $chu = "Năm";
                    break;
                case 6:
                    $chu = "Sáu";
                    break;
                case 7:
                    $chu = "Bảy";
                    break;
                case 8:
                    $chu = "Tám";
                    break;
                case 9:
                    $chu = "Chín";
                    break;
                default:
                    $chu = "Không hợp lệ";
                    break;
            }
        }
    }
    ?>
    <form action="Bai3.php" method="POST">
        <table style="width: 519px; border-collapse: collapse; border: 1px solid black;">
            <tr>
                <td colspan="3" style="border: 1px solid black;">Đọc số</td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Nhập số (0-9)</td>
                <td style="width: 69px; border: 1px solid black;" rowspan="2"><input type="submit" name="button"
                        id="button" value="Submit" /></td>
                <td style="border: 1px solid black;"> Bằng chữ</td>
            </tr>
            <tr>
                <td style="width: 177px; border: 1px solid black;">
                    <p>
                        <label for="textfield"></label>
                        <input type="text" name="so" id="textfield" />
                    </p>
                </td>
                <td style="width: 232px; border: 1px solid black;"><label for="textfield2"></label>
                    <input type="text" name="chu" id="textfield2" value="<?php echo $chu; ?> " />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>