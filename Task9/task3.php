<style>
	table,td,th{
		border:1px solid black;
		}

</style>
<select name="car" onchange="myFunction(this.value)">
        <option value="" selected disabled hidden>Choose a car</option>
        <option value="Ferrari">Ferrari F12 Berlinetta (2016)</option>
        <option value="Lexus">Lexus IS300 (2018)</option>
        <option value="BMW">BMW M5 (2018)</option>
      </select>  
    </form>
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

<?php 
  $Ferrari = array("Maker"=>"Ferrari", "Model"=>"F12 Berlinetta","Year"=>"2016", "Engine"=>"Petrolium","Price"=>"243 000", "Tax"=>"Yes","Tech"=>"No", "Req"=>"No");
  $Lexus = array("Maker"=>"Lexus", "Model"=>"IS 300","Year"=>"2018", "Engine"=>"Petrolium","Price"=>"43 000", "Tax"=>"Yes","Tech"=>"Yes", "Req"=>"No");
  $BMW = array("Maker"=>"BMW", "Model"=>"M6 Gran Coupe","Year"=>"2016", "Engine"=>"Diesel","Price"=>"103 000", "Tax"=>"No","Tech"=>"Yes", "Req"=>"No");
  

 ?>
 <script>
   function myFunction(val){
      if(val=="Ferrari"){
      document.getElementsByName('cars')[0].value="<?php echo $Ferrari['Maker']?>"
      document.getElementsByName('years')[0].value="<?php echo $Ferrari['Year']?>"
      document.getElementsByName('model')[0].value="<?php echo $Ferrari['Model']?>"
      document.getElementsByName('fuel')[0].checked = true;
      document.getElementsByName('price')[0].value="<?php echo $Ferrari['Price']?>"
      document.getElementsByName('tax')[0].checked = true;
      document.getElementsByName("tech")[0].checked = true;
      document.getElementsByName('req')[0].checked = true;
    }else if(val=="Lexus"){
      document.getElementsByName('cars')[0].value="<?php echo $Lexus['Maker']?>"
      document.getElementsByName('years')[0].value="<?php echo $Lexus['Year']?>"
      document.getElementsByName('model')[0].value="<?php echo $Lexus['Model']?>"
      document.getElementsByName('fuel')[0].checked = true;
      document.getElementsByName('price')[0].value="<?php echo $Lexus['Price']?>"
      document.getElementsByName('tax')[0].checked = true;
      document.getElementsByName("tech")[0].checked = true;
      document.getElementsByName('req')[0].checked = false;
    }else{
      document.getElementsByName('cars')[0].value="<?php echo $BMW['Maker']?>"
      document.getElementsByName('years')[0].value="<?php echo $BMW['Year']?>"
      document.getElementsByName('model')[0].value="<?php echo $BMW['Model']?>"
      document.getElementsByName('fuel')[1].checked = true;
      document.getElementsByName('price')[0].value="<?php echo $BMW['Price']?>"
      document.getElementsByName('tax')[0].checked = false;
      document.getElementsByName("tech")[0].checked = true;
      document.getElementsByName('req')[0].checked = false;
    }
   }
 </script>