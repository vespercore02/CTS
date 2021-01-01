<?php 
    
    include_once "Function/Db.php";
    include_once "Function/Contact.php";

    if (isset($_POST['submit'])) {
        //print_r($_POST);

        if (empty($_POST['symptoms'])) {
            # code...
            echo "Please fill up symptoms";

            exit;
        }

        $ppl = new Contact();
        $ppl->pplInsert($_POST);
    }

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
        
            <div class="col-6">

                <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">Contact Tracing Form</h5>
                        <p class="card-text">Content</p>
                        <form action="form.php" method="post">
        
                            <div class="form-group">
                                <label for="fname" class="fw-bold">First Name</label>
                                <input id="fname" class="form-control" type="text" name="fname" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="mname" class="fw-bold">Middle Name</label>
                                <input id="mname" class="form-control" type="text" name="mname" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="lname" class="fw-bold">Last Name</label>
                                <input id="lname" class="form-control" type="text" name="lname" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="con_num" class="fw-bold">Contact #</label>
                                <input id="con_num" class="form-control" type="text" name="con_num" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="city" class="fw-bold">City</label>
                                <input id="city" class="form-control" type="text" name="city" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="barangay" class="fw-bold">Barangay</label>
                                <input id="barangay" class="form-control" type="text" name="barangay" required>
                            </div>

                            <div class="form-group">
                                <label for="symptoms" class="fw-bold">Symptoms</label>
                                
                                <div class="form-check">
                                    <input id="fever" class="form-check-input" type="checkbox" name="symptoms[]" value="fever">
                                    <label for="fever" class="form-check-label">Fever</label>
                                </div>
                                <div class="form-check">
                                    <input id="headache" class="form-check-input" type="checkbox" name="symptoms[]" value="headache">
                                    <label for="headache" class="form-check-label">Headache</label>
                                </div>
                                <div class="form-check">
                                    <input id="cough" class="form-check-input" type="checkbox" name="symptoms[]" value="cough">
                                    <label for="cough" class="form-check-label">Cough</label>
                                </div>
                                <div class="form-check">
                                    <input id="sorethroat" class="form-check-input" type="checkbox" name="symptoms[]" value="sore throat">
                                    <label for="sorethroat" class="form-check-label">Sore throat</label>
                                </div>
                                <div class="form-check">
                                    <input id="colds" class="form-check-input" type="checkbox" name="symptoms[]" value="colds">
                                    <label for="colds" class="form-check-label">Colds </label>
                                </div>
                                <div class="form-check">
                                    <input id="bodypain" class="form-check-input" type="checkbox" name="symptoms[]" value="body pain">
                                    <label for="bodypain" class="form-check-label">Body Pain</label>
                                </div>
                                <div class="form-check">
                                    <input id="diarrhea" class="form-check-input" type="checkbox" name="symptoms[]" value="diarrhea">
                                    <label for="diarrhea" class="form-check-label">Diarrhea</label>
                                </div>
                                
                                <div class="form-check">
                                    <input id="none" class="form-check-input" type="checkbox" name="symptoms[]" value="none" >
                                    <label for="none" class="form-check-label">None</label>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label for="travel" class="fw-bold">Travel</label>
                                <input id="travel" class="form-control" type="text" name="travel">
                            </div>
                            
                            <div class="form-group mb-3">
                                <h5>Data Privacy Act</h5>
                                <div class="form-check custom-checkbox">
                                    <input class="form-check-input" type="checkbox" value="Yes" name="dpa" id="understand" required>
                                    <label class="form-check-label font-weight-bold" for="understand">
                                        
                                        I understand that my personal information is protected by RA 10173, Data Privacy Act 2012 and that I am required by RA 11469, Bayanihan to Heal as One Act, to provide truthful information.
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-success" type="submit" name="submit">Submit</button>
                        </form>
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