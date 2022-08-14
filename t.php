
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <style type="text/css">
     .b{
        margin-top: 40px;
     }
     
    </style>    
  </head>
  <body>
    <form action="" method="post" class="b">
     <div>
        <label for="no1"><b> Enter Number: </b></label>
        <input
          type="number"
          placeholder="value number"
          name="no1"
          id="no1"
          required
        />

        <button type="submit" class="total" name="submit" value="SUM">Submit</button>
        <p value="<?php echo $no1; ?>" name="submit"></p>
       </div>
     </form>
     <?php
 
  
if(isset($_POST['submit']))
{
   $no1=$_POST['no1'];
  if($no1<0){
    echo "enter a postive value";
  }
}
?>
     <form action="" method="post" class="b">
       <div>
        <label for="n"><b> Enter Number: </b></label>
        <input
          type="number"
          placeholder="value number"
          name="n"
          id="n"
          required
        />

        <button type="submit"  name="sub" value="SUM">Submit</button>
        <p value="<?php echo $n; ?>" name="submit"></p>
       </div>
    </form>
<?php
 
  if(isset($_POST['sub']))
{
   $n=$_POST['n'];
  if($n%2==0){
   echo ($n+2).",".($n+4).",".($n+6);
  }
  }

?>
<form action="" method="post" class="b">
       <div>
        <label for="n1"><b> Enter Number: </b></label>
        <input
          type="number"
          placeholder="value number"
          name="n1"
          id="n1"
          required
        />

        <button type="submit"  name="s" value="SUM">Submit</button>
        <p value="<?php echo $n1; ?>" name="submit"></p>
       </div>
    </form>
<?php
 
  if(isset($_POST['s']))
{
   $n1=$_POST['n1'];
  if($n1%2!==0){
    echo ($n1+2).",".($n1+4).",".($n1+6);
  }
  }

?>

  </body>
</html>
