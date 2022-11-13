
<?php
$title = 'index';

 require_once "includes/header.php"; 
 require_once "db/conn.php";
 $results = $crud->getspecialties();
 ?>

    
<!--
    - First Name
    - Last Name
    - Date of Birth  (Use DatePicker)
    - Specialty (Database Admin, Software Developer, Website Administrator, Other)
    - Email Adress
    - Contact Number
-->
    <h1 class="text-center">Registration For IT Conference</h1>

    <form method="post" action="success.php">
    
    <div class="mb-3">
            <label for="firstname"> First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter Name" name="firstname">
            
        </div>


        <div class="mb-3">
            <label for="lastname"> Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
        </div>

        <div class="mb-3">
            <label for="dob"> Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
            <br>
            <div class="mb-3">
            <label for="specialty"> Area Of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['specialty_id']?>"><?php echo $r['name']; ?></option>
                <?php }?>    
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">we'll never share your email with anyone else.</div>
        </div>
        <br>
        <div class="mb-3">
            <label for="phone" class="form-label">contact number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <small id="emailHelp" class="form-text">We'll never share your
            phone contact with anyone else.</small>
        </div>
        <br>
        <div class="mb-3">
            <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar" >
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

        </div>
        
        <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        </form>
        <br>
        <br>
        <br>
        <br>
    <?php require_once 'includes/footer.php'; ?>