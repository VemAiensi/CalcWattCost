  <?php
   require "header.php";
  ?>
  <link rel="stylesheet" href="test.css">
    <main>
      
    <span class="form1">
   
      <div>
      <h3>Calc-Watt-Cost</h3> 
      <form  method="post" action="../phptest/testserver.php" >
             
          <input type="radio" name="units" value="watts" id="watts">Watts
          <input type="radio" name="units" value="amp" id="amp">Ampere
          <input type="radio" name="units" value="volt" id="volt">Volt
          <br />
          <input type="number" id="pow" name="pow" placeholder=" Type Here" required/>
          <br /><br />
          <label for="hours">Hours:</label><br />
          <input type="number" id="hours" name="hours" placeholder="Enter Hours here" required/>
          <br /><br />
          <label for="price">Price:</label><br />
          <input type="number" id="price" name="Price" placeholder="Enter Price Here" required/>
          <br />
          <button type="submit">Submit</button>
          <button type="reset" value="Reset">Reset</button>
      </form>
      </div> 
    </span>

    </main>



  
