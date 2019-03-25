<?php
foreach($data['employee_data'] as $value){
?>
<div class="container">
    <div class="row">
    <h3><b>Employee Information</b></h3>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <a href="index.php"><i class="glyphicon glyphicon-arrow-left" style="font-size:20px; color: red;"></i></a>
    <form action="#" method="POST">
            <div class="form-group">
                <h5><b class="col-md-4">Employee Name: </b><?php echo $value['firstname'].' '.$value['lastname']; ?></h5>
            </div>

            <div class="form-group">
                <h5><b class="col-md-4">Age: </b><?php echo $value['age']; ?></h5>
            </div>

            <div class="form-group">
                <h5><b class="col-md-4">Position: </b><?php echo $value['title']; ?></h5>
            </div>


            <div class="form-group">
                <h5><b class="col-md-4">Working Duration: </b><?php echo $value['yearofservice']; ?> years</h5>
            </div>
            <div class="form-group">
                <h5><b class="col-md-4">Salary: </b><?php echo $value['salary']; ?> $</h5>
            </div>
            <div class="form-group">
                <h5><b class="col-md-4">Perks: </b><?php echo $value['perks']; ?> $</h5>
            </div>
            <div class="form-group">
                <h5><b class="col-md-4">Email: </b><?php echo $value['email']; ?></h5>
            </div>
            <div class="form-group">
                <h5><b class="col-md-4">Department ID: </b><?php echo $value['departmentid']; ?></h5>
            </div>
        </form>
        <div class="col-md-3"></div>
    </div>
</div>
<?php } ?>