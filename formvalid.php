<style>
    .error{
        color : red;
    }
</style>
<?php
$nameerr=$emailerr=$gendererr=$mobileerr=$checkerr="";
$name=$email=$gender=$mobile="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["t1"])) // Name Checking
    {
        $nameerr ="enter name";
    }
    else{
        $name = $_POST["t1"];
        $namepattern="/^[a-zA-Z ]*$/";
        if(!preg_match($namepattern,$name))
        {
            $nameerr ="Enter Alphabet only";
        }
    }

    if(empty($_POST["t2"])) // Email Checking
    {
        $emailerr ="Enter Email";
    }
    else
    {
        $email = $_POST["t2"];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailerr ="Enter Valid Email";
        }
    }

    if(empty($_POST["t3"])) // Gender Checking
    {
        $gendererr = "Select any gender";
    }
    else
    {
        $gender=$_POST["t3"];
    }

    if(empty($_POST["t4"])) // Mobile Checking
    {
        $mobileerr = "Enter Mobile Number";
    }
    else
    {
        $mobile = $_POST["t4"];
        $mpattern ="/^[0-9]*$/";
        if(!preg_match($mpattern,$mobile))
        {
            $mobileerr = "Enter only Number";
        }
        if(strlen($mobile) != 10)
        {
            $mobileerr = "Enter 10 digit Mobile Number";
        }
        
    }

    if(!isset($_POST["t5"]))
    {
         $checkerr = "Check condition";
    }
}

?>



<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
Name : <input type="text" name="t1"><span class="error">*<?php echo $nameerr; ?></span><br>
Email : <input type="text" name="t2"><span class="error">*<?php echo $emailerr; ?></span><br>
Mobile : <input type="text" name="t4"><span class="error">*<?php echo $mobileerr; ?></span><br>
Gender:<input type="radio" name="t3" value="Female">Female
       <input type="radio" name="t3" value="Male">Male<span class="error">*<?php echo $gendererr; ?></span><br>
       <input type="checkbox" name="t5" >Agree for Terms and condition<span class="error">*<?php echo $checkerr; ?></span><br>
<input type="submit" name="submit">
</form>

<?php
if($nameerr==""&&$emailerr==""&&$gendererr==""&&$mobileerr==""&&$checkerr=="")
{
    if(isset($_POST['submit']))
    {
        echo "Name:".$name."<br>";
        echo "Email:".$email."<br>";
        echo "Gender:".$gender."<br>";
        echo "Mobile:".$mobile."<br>";
    }
}
?>