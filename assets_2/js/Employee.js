
$(document).ready(function() 
{	$('#example').dataTable( {
        "aaData": [
		<?php $p=0;
foreach($Employee_Selected  as $row)

    { $sam = $row['EmployeeID'];
     $p++;
   ?> 
      ["<?php echo "<button class='btn btn-defualt'>".$p."</button>";   ?>",
      "  <?php echo $row['EmployeeID'];   ?>",
      "  <?php echo $row['FirstName'];   ?>",
      "  <?php echo $row['LastName'];   ?>",
      "  <?php echo $row['Title'];   ?>",
      "  <?php echo $row['TitleOfCourtesy']; ?>",
      "  <?php echo $row['BirthDate']; ?>",
      "  <?php echo $row['HireDate']; ?>",
      "  <?php echo $row['Address']; ?>",
      "  <?php echo $row['City']; ?>",
      "  <?php echo "<img class='img' src='".$row['PhotoPath']."'>"; ?>",
      "  <?php echo $row['HomePhone']; ?>",
      "<?php  echo "<a href='delete.php?Delete=$sam^Employee'><button onclick='return delete_confirm()' class='btn btn-danger'><i class='now-ui-icons ui-1_simple-remove'></i></button><a>".'|&nbsp&nbsp&nbsp;'."<a href='Edit.php?Edit=$sam^Employee'><button data-toggle='modal' data-target='#Edit=$sam'  class='btn btn-warning'><i class='now-ui-icons design-2_ruler-pencil'></i></button></a>"; ?>"],
		<?php
	} ?>
			],
        "columns": [
      { "title": "<b style='color:black;width:10;font-style:Monotype-corsiva'>ID</b>" },    
      { "title": "<b style='color:black;'>EmpID</b>" },
      { "title": "<b style='color:black;'>FirstName</b>" },
      { "title": "<b style='color:black;'>LastName</b>" },
      { "title": "<b style='color:black;'>Title</b>" },
      { "title": "<b style='color:black;'>TOC</b>" },
      { "title": "<b style='color:black;'>BirthDate</b>" },
      { "title": "<b style='color:black;'>HireDate</b>" },
      { "title": "<b style='color:black;'>Address</b>" },
      { "title": "<b style='color:black;'>City</b>" },
      { "title": "<b style='color:black;'>Photo</b>" },
      { "title": "<b style='color:black;'>Phone#</b>" },
   
  { "title": "<b style='color:black;'>Action</b>" }
			
        ]
    });   
});
</script>
        
<script type="text/javascript">
	 $('#example').addClass('table-responsive');
	 $('#example').addClass('table table-bordered table-striped');
	  $('#example').addClass('table table-bordered table-hover'); 
	  $('#example').addClass('table table-bordered table-condensed');