<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include 'backend/data.php'; ?>
  <head>
    <?php $dataHandler = new dataHandler; ?>
  </head>
  <body>
  	<div>
  		<h1>Test Application</h1>
  	</div>
  	<div>
  		<p>
  			Hello! This is my test application. Please use the tools below to insert or remove data.
  		</p>
  	</div>
    <div>
      <form method="post">
        <h3> Insert Data </h3>
        <p> Use this section to insert new data. Dates follow the pattern of Year-Month-Days Hour:Minutes:Seconds, Infections and Fatalities accept any number.</p>
        Date (YYYY-mm-dd hh:ii:ss): <input type="text" name="Date"> <br>
        Number of infections: <input type="number" name="Infections"> <br>
        Number of Fatalities: <input type="number" name="Fatalities"><br>
        <input type="submit" value="add" name="submit">
      </form>
    </div>
    <div>
        <form method="post">
        <h3> Remove Data </h3>
        <p> If you wish to delete any data from the table, enter the Entry number in the box below and hit submit</p>
        Entry number: <input type="number" name="Entry"> <br>
        <input type="submit" value="remove" name="submit">

      </form>
    </div>
      <?php 
        switch($_POST['submit']) {
          case 'add':
          $dataHandler->insertData($_POST['Date'], (int)$_POST['Infections'], (int)$_POST['Fatalities']);
          break;
          case 'remove':
          $dataHandler->removeData((int)$_POST['Entry']);
          break;
        }
      ?>
  	<div>
      <h3> Current Data </h3>
      <table border="1">
        <th>Entry</th>
        <th>Date</th> 
        <th>Infections</th>
        <th>Fatalities</th>
        <th>FatalityRatio</th>
    		<?php 
          $row = $dataHandler->collectData();

          foreach($row as $entry) {
            echo '<tr>' . 
              '<td>' . $entry['Entry'] . '</td>' .
              '<td>' . $entry['Date'] . '</td>' . 
              '<td>' . $entry['Infections'] . '</td>' . 
              '<td>' . $entry['Fatalities'] . '</td>' . 
              '<td>' . ROUND($entry['FatalityRatio'], 2) . '%' . '</td>' .
              '</tr>';
            }
        ?>

      </table>
  	</div>
  </body>
</html>