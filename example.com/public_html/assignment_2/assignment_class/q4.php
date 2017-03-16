<!-- 
****                                                       
 *   *                                                     
 *   *                                                     
 ****                                                       
 *   *                                                     
 *   *                                                    
 **** 
 -->
 <?php
for ($i=0; $i < 7; $i++) { 

	for ($j=0; $j < 4; $j++) { 
		if(($i==1||$i==5||$i==4||$i==2)&&($j==1||$j==2))
			echo "&nbsp;&nbsp;&nbsp";
		else
			echo "*";
	}	echo "<br>";

}
 ?>