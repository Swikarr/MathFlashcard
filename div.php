<?php include "header.php";
        require "random.php";
?>
    
<h1> DIVISION </h1>
<h1>
    <?php 
    echo $num1 . "/". $num2;
    ?>
</h1>
<br> <br><br>

<?php 
if(isset($_POST['answer'])):
$correct_answer = $_POST["num1"]/$_POST["num2"];

if ($correct_answer == $_POST["answer"]){
    echo "Correct!  ".$_POST["num1"] . " / " . $_POST["num2"] . " = " . $correct_answer; }
    else {
    echo "Wrong  ".$_POST["num1"] . " / " . $_POST["num2"] . " =  " . $correct_answer." NOT  ".$_POST["answer"];
}
?>
<?php endif;?>
<form method="post" action ="">
<input name="num1" type="hidden" value="<?php echo $num1; ?>">
<input name="num2" type="hidden" value="<?php echo $num2; ?>">
    Answer: <input name="answer">
    <button> Submit</button>
    <button> New Card </button> 
</form>
<?php include "footer.php"; ?>
</center>
</body>
</html>