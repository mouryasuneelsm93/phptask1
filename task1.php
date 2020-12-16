<?php

$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
                                            );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>task</title>
    <style>
    th{
        font-size:25px;
        text-transform:uppercase;
        color:white;
        border:1px solid red;
        padding:10px 10px;
        background-color:rgba(0,0,0,.8);
    }
    td{
        font-size:20px;
        border:1px solid red;
        padding:10px 10px;
    }
    table
    {
        border:1px solid red;
        
    }
    h1
    {
       text-align:center;
        text-transform:uppercase;
    }
    </style>
        
</head>
<body>
<section id="s1">
<h1>Section1
</h1>
<center>
<table class="table table-hover">

<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>
<?php  
 foreach($products as $cat=>$value)
 {
     
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
        echo "<tr><td>".$cat."</td>"."<td>".$sub_cat."</td>";
        foreach($value2 as $key=>$value3)
        {
            echo "<td>".$value3."</td>";    
        }  
    }
     }
 }


?>
</table>
</section>
<section id="s2">
<h1>Section2
</h1>

<table class="table table-hover">

<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>
<?php  
 foreach($products as $cat=>$value)
 {
     
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
            if($sub_cat=='Mobile')
            {
        echo "<tr><td>".$cat."</td>"."<td>".$sub_cat."</td>";
        foreach($value2 as $key=>$value3)
        {
            echo "<td>".$value3."</td>";    
        }  
    }
    }
     }
 }


?>
</table>
</section>
<section id="s3">
<h1>Section3</h1>
<table>

<?php

foreach($products as $cat=>$value)
 {
     
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
        foreach($value2 as $key=>$value3)
        {
            if($value3=='Samsung')
            {
        foreach($value2 as $key=>$value3)
        {
            if($key=='id')
            {
            echo "<tr><th>Product_id</th><td>".$value3."</td></tr>";    
            }
            else if($key=='name')
            {
                echo "<tr><th>Product_Name</th><td>".$value3."</td></tr>";    
                
            }
        } 
        echo "<tr><th>Subcategory:</th><td> ".$sub_cat."</td></tr>"."<tr><th>Category:</th><td>".$cat."</td></tr>";
        
           
    }


                 }
            
    }
     }
 }

?>
</table>
</section>
<br>
<section id="s4">
<h1>Section4</h1>
<table class="table table-hover">

<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>
<?php  

unset($products["Electronics"]["Television"][2]);
 foreach($products as $cat=>$value)
 {
   
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
           
        echo "<tr><td>".$cat."</td>"."<td>".$sub_cat."</td>";
        foreach($value2 as $key=>$value3)
        {
            
            echo "<td>".$value3."</td>";    
        }  
    }
     }
 }


?>
</table>
</section>
<section id="s5">
<h1>section5</h1>
<table class="table table-hover">

<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>
<?php  
$products["Electronics"]["Television"][1]['name']='BIG-555';
unset($products["Electronics"]["Television"][2]);
 foreach($products as $cat=>$value)
 {
   
     foreach($value as $sub_cat=>$value1)
     {   
        
        foreach($value1 as $key=>$value2)
        {
           
        echo "<tr><td>".$cat."</td>"."<td>".$sub_cat."</td>";
        foreach($value2 as $key=>$value3)
        {
            
            echo "<td>".$value3."</td>";    
        }  
    }
     }
 }


?>
</table>
</section>
</body>
</html>