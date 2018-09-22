<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `rescandi`  WHERE CONCAT(`firstname`,`lastname`,`addr`,`cont`,`mail`,`gend`,`qua`,`exper`,`skilla`,`skillb`,`skillc`,`skilld`,`ach`,`cert`,`company`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `rescandi`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "se");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            # {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#c td, #custom th {
    border: 1px solid #ddd;
    padding: 8px;
}

#c tr:nth-child(even){background-color: #f2f2f2;}

#c tr:hover {background-color: #ddd;}

#c th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
        </style>
    </head>
    <body bgcolor="snow">
        
        <form action="filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Enter Your Company name here..."><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table id="c">
                <tr>
                  
                    <th>Firstname</th>
                    <th>Lastname</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Mail ID</th>
                  <th>Gender</th>
                  <th>Qualification</th>
                  <th>Experiance</th>
                  <th>Skill A</th>
                  <th>Skill B</th>
                  <th>Skill C</th>
                  <th>Skill D</th>
                  <th>Achievements</th>
                  <th>Certifications</th>
                  <th>Company</th>
                  
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>

                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
             <td><?php echo $row['addr'];?></td>
			 <td><?php echo $row['cont'];?></td>
			 <td><?php echo $row['mail'];?></td>
			 <td><?php echo $row['gend'];?></td>
			 <td><?php echo $row['qua'];?></td>
			 <td><?php echo $row['exper'];?></td>
			 <td><?php echo $row['skilla'];?></td>
			 <td><?php echo $row['skillb'];?></td>
			 <td><?php echo $row['skillc'];?></td>
			 <td><?php echo $row['skilld'];?></td>
			 <td><?php echo $row['ach'];?></td>
			 <td><?php echo $row['cert'];?></td>
			 <td><?php echo $row['company'];?></td>

			 
			 
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
