<style>
	table,td,th{
		border:1px solid black;
		
	}

</style>
<form method="post" action="task21.php">
<table style="width:100%">
  <tr>
    <td>Maker</td>
    <td><select name="cars">
    		<option value="Toyota">Toyota</option>
    		<option value="Lexus">Lexus</option>
    		<option value="BMW">BMW</option>
    		<option value="R&R">R&R</option>
    		<option value="Lamborghini">Lamborghini</option>
    		<option value="Ferrari">Ferrari</option>
    		<option value="Jaguar">Jaguar</option>
  		</select>
	</th> 
  </tr>
  <tr>
    <td>Year</td>
    <td><select name="years">
    		<option value="2012">2012</option>
    		<option value="2013">2013</option>
    		<option value="2014">2014</option>
    		<option value="2015">2015</option>
    		<option value="2016">2016</option>
    		<option value="2017">2017</option>
    		<option value="2018">2018</option>
  		</select></td> 
  </tr>
  <tr>
    <td>Model</td>
    <td> <input type="text" name="model"></td> 
  </tr>
   <tr>
    <td>Engine</td>
    <th> <input type="radio" name="fuel" value="Petrolium">	
		 Petrolium
    	 <input type="radio" name="fuel" value="Gas">Gas
    	 <input type="radio" name="fuel" value="Diesel">Diesel

	</th> 
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price"></td> 
  </tr>
  <tr>
    <td>Additional</td>
    <td> <input type="checkbox" name="tax" value="Yes">Tax payed<br>
		 <input type="checkbox" name="tech" value="Yes">Technical check passed<br>
		 <input type="checkbox" name="req" value="No">Doesn't require investment<br>


    </td> 
  </tr>
</table>
 <input type="submit" value="Submit the form"/>
</form>