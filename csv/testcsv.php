<?php
	$row = 1;
	if (($handle = fopen("test.csv", "r")) !== FALSE)
	{
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
		{
		    $num = count($data);
		    //echo "<p> $num fields in line $row: <br /></p>\n";
		    $row++;
		    ?>
		     <form action="action.php" method='post' >
		    <?php
		    $emailArray = array();
		    for ($c=0; $c < $num; $c++)
		    {
			$emailArray[] = $data[$c]; 	    	
		        //echo $data[$c] . "<br />\n";
		        ?>
		     
		       
		        <input type="text" name="email" value="<?php echo $data[$c];?>" ><br />
		        
		        
		        <?php
		    }

		}
		?>
		    <input type="submit" name="submit" value="submit" >
		        </form>
		    <?php
		fclose($handle);
	}
?>