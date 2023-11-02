<html>

<head>
    <title> BILL </title>
</head>

<body>
    <center>
        <h1>BILL DETAILS</h1>
        <form name="bill" method="post">
            <table>
                <tr>
                    <td> SI NO <input type="text" placeholder="SI Number" name="si"></td>
                    <td> ITEM NAME <input type="text" placeholder="Product name=" nitem"></td>
                    <td> QUANTITY <input type="text" placeholder="Quantity" name="qty"></td>
                    <td> ITEM PRICE <input type="text" placeholder="PRICE" name="pitem"></td>
                </tr>
                <tr>
                    <td> SI NO <input type="text" placeholder="SI Number" name="si"></td>
                    <td> ITEM NAME <input type="text" placeholder="Product name=" nitem"></td>
                    <td> QUANTITY <input type="text" placeholder="Quantity" name="qty"></td>
                    <td> ITEM PRICE <input type="text" placeholder="PRICE" name="pitem"></td>
                </tr>
                <tr>
                    <td> SI NO <input type="text" placeholder="SI Number" name="si"></td>
                    <td> ITEM NAME <input type="text" placeholder="Product name=" nitem"></td>
                    <td> QUANTITY <input type="text" placeholder="Quantity" name="qty"></td>
                    <td> ITEM PRICE <input type="text" placeholder="PRICE" name="pitem"></td>
                </tr>
                <tr align="center">
                    <td><input type="submit" value="Continue" name="btn"></td>
                    <td><input type="reset" value="Clear"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>SI NO</td>
                    <td>ITEM</td>
                    <td>UNIT PRICE</td>
                    <td>QUANTITY</td>
                    <td>TOTAL</td>
                </tr>
                <tr>
                    <td> <?php $sno ?> </td>
                    <td> <?php $pro ?> </td>
                    <td> <?php $pri ?> </td>
                    <td> <?php $qty ?> </td>
                    <td> <?php $pitem*$qty ?> </td>



                </tr>
            </table>

        </form>
    </center>
</body>

</html>

<?php
if(isset($_POST['btn']))
{
    $sno=$_POST['si'];
    $pro=$_POST['nitem'];
    $qty=$_POST['qty'];
    $pri=$_POST['pitem'];

}

?>