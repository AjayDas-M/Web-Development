<?php
  $c=new mysqli("localhost","root","","agni");
  if(isset($_POST['val'])){
    $u=$_POST['u'];
    $p=$_POST['p'];
    $q="select * from book where name='$u' and publisher='$p'";
    $r=$c->query($q);
    if($r->num_rows>0){
        echo'validation success';
    }
    else{
        echo'Enter valid username and password';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script type="text/javascript">
    function add(){
        var a=Number(document.getElementById("a").value);
        var b=Number(document.getElementById("b").value);
        var c=a+b;
        document.getElementById("c").value=c;
    }
    function sub(){
        var a=document.getElementById("a").value;
        var b=document.getElementById("b").value;
        var c=a-b;
        document.getElementById("c").value=c;
    }
    function mul(){
        var a=document.getElementById("a").value;
        var b=document.getElementById("b").value;
        var c=a*b;
        document.getElementById("c").value=c;
    }
    function div(){
        var a=document.getElementById("a").value;
        var b=document.getElementById("b").value;
        var c=a/b;
        document.getElementById("c").value=c;
    }
</script>
<body>
    <form method="POST">
    <input type="text" id="u" name="u">
    <input type="text" id="p" name="p">
    <input type="submit" id="val" name="val" value="validate"><br>
    </form>
    <input type="number" id="a" name="a">
    <input type="number" id="b" name="b">
    <input type="submit" id="add" name="add" value="add" onclick="add()">
    <input type="submit" id="sub" name="sub" value="sub" onclick="sub()" >
    <input type="submit" id="mul" name="mul" value="mul" onclick="mul()" >
    <input type="submit" id="div" name="div" value="div" onclick="div()" >
    <input type="text" id="c" name="c">

</body>
</html>