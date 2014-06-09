<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	
	mysql_select_db("learn_php") or die(mysql_error());
		
	mysql_close();
	
?>
    <form action="insert.php" method="post">
    	<input type="text" placeholder="Name" name="FirstName" />
        <input type="text" placeholder="Last Name" name="LastName" />
        <input type="number" placeholder="Amount" name="Amount" />

        <select name="category_name">
        <option value="">-- Select Category --</option>
        <?php
        $con = mysql_connect("localhost","root","") or die('Could not connect:'.mysql_error());
        mysql_select_db("learn_php", $con) or die('Could not select database.');
        
        $fetch_category = mysql_query("SELECT category_name,id FROM category");
        
        
        while($throw_category = mysql_fetch_assoc($fetch_category)) {
        echo '<option   value="'.$throw_category['id'].'">'.$throw_category['category_name'].'</option>';
        }
        echo "</select>";
        
        
        ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
