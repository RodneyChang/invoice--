<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的發票</title>
</head>
<body>
    <?php 
        include_once("base.php"); 
    ?>

    <table>
        <tr>
            <td>我的發票</td>
            <td></td>
        </tr>
        <?php
            if(!empty($_GET['period'])){
                $row = selectF1("myinvoice",$_GET['period']);
                foreach($row as $invoice){
                ?> 
                <tr>
                    <td><?=$invoice['ennum']?>-<?=$invoice['num']?></td>
                    <td><?=$invoice['expend']?></td>
                </tr>

                    <?php
                }
            }     
        ?>


    </table>



        <!-- <tr>
            <td>1,2月</td>
            <td></td>
        </tr>
        <tr>
            <td>3,4月</td>
            <td></td>
        </tr>
        <tr>
            <td>5,6月</td>
            <td></td>
        </tr>
        <tr>
            <td>7,8月</td>
            <td></td>
        </tr>
        <tr>
            <td>9,10月</td>
            <td></td>
        </tr>
        <tr>
            <td>11,12月</td>
            <td></td>
        </tr> -->
        <tr>
                <td>
                    <a href="index.html">回首頁</a>
                </td>
        </tr>
    </table>










   


</body>
</html>