<html>
<head>
    <title>Question 2</title>
</head>
<?php
$radio140 = 'unchecked';
$radio200 = 'unchecked';
$bandwidthVal = 0;
$result = "0";
$fileSize = 0;

function CalculateTime(float $filesize, float $bandwidth): float
{
    return ($filesize * 1024)/$bandwidth/60;
}

if(isset($_POST['submit1'])) {
    if (isset($_POST['fileSize'])) {
        $fileSize += $_POST['fileSize'];
        if(is_null($fileSize) == 1){
            echo "File Size must be entered";
        }
        else{
            $fileSize = number_format($fileSize,2);
        }
        $selectedRadio = $_POST['bandwidth'];
        if ($selectedRadio == '140') {
            $radio140 = 'checked';
            $bandwidthVal += (float)$_POST['bandwidth'];
        } else if ($selectedRadio == '200') {
            $radio200 = 'checked';
            $bandwidthVal += (float)$_POST['bandwidth'];
        }

    }
    $result = number_format(CalculateTime($fileSize, $bandwidthVal), 2) . ' minutes to download';
}

?>
<body>
<form name="form1" method="post" action="MunLiPan2.php">
    Enter file size in MB <input type="text" name="fileSize" value="0">
    <input type="radio" name="bandwidth" value="140" <?php echo $radio140;?>> 140Kb/s
    <input type="radio" name="bandwidth" value="200" <?php echo $radio200;?>> 200Kb/s
    <button type="submit" name="submit1">File Size</button>
    It will take: <input type="text" name="result" value="<?php echo $result;?>">
</form>
</body>
</html>
