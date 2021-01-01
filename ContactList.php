<?php 
    
    include_once "Function/Db.php";
    include_once "Function/Contact.php";

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Tracing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body>
    
    <?php 
    
    include_once "Layouts/nav.php"
    
    ?>

    <div class="container">
        <div class="row justify-content-md-center">
        
            <div class="col-8">

                <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Contact List</h5>
                        <p class="card-text">Content</p>
                        
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Symptoms</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                
                                    $contact_list = new Contact();
                                    $ppl_list = $contact_list->pplShow();

                                    foreach ($ppl_list as $ppl) {
                                        # code...
                                        ?>
                                        <tr>

                                            <td>
                                                <?php echo $ppl['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $ppl['fname']." ".$ppl['lname']; ?>
                                            </td>
                                            <td>
                                                <?php echo $ppl['barangay'].", ".$ppl['city']; ?>
                                            </td>
                                            <td>
                                                <?php echo $ppl['symptoms']; ?>
                                            </td>
                                        
                                        </tr>
                                        <?php 
                                    }
                                
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
                
            
            </div>
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>