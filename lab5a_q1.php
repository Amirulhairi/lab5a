<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php  
        $name = "AMIRUL AFFIZALHAIRI BIN CHE ADNAN";
        $matricnum = "AI2200888";
        $course = "BACHELOR OF COMPUTER SCIENCE (WEB TECHNOLOGY) WITH HONOURS";
        $yearofstudy = "Year 3";
        $address = "Lot 3253 Kampung Baru Bechah Laut 17500 Tanah Merah Kelantan"; 
    ?>

    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
        <tr> 
            <td>Matric number</td> 
            <td><?php echo "$matricnum"; ?></td>  
        </tr> 
        <tr> 
            <td>Course</td> 
            <td><?php echo "$course"; ?></td>  
        </tr> 
        <tr> 
            <td>Year of study</td> 
            <td><?php echo "$yearofstudy"; ?></td>  
        </tr> 
        <tr> 
            <td>Address</td> 
            <td><?php echo "$address"; ?></td>  
        </tr> 
</table> 
</body> 
</html>