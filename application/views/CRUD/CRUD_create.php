    
    
    <h2>CRUD Create</h2>
    <br>

    <a href="<?php echo base_url('CRUD_control'); ?>" class="btn btn-primary">Back</a>
    <br>
    <br>
    <br>

    <form action="<?php echo base_url('CRUD_control/submit')?>" method="post" >
                
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" required>
                </div>
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" required>
                    <!--<small id="first_nameHelp" class="form-text text-muted">Please put your name</small>-->
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <input type="number" class="form-control" name="userid" placeholder="Enter User ID" required>
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="number" maxlength="10" class="form-control" name="contactnum" placeholder="Enter Contact Number">
                </div>
                <div class="form-group">
                    <label>Birthdate</label>
                    <input type="date" class="form-control" name="birth">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="mess" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" value="save">Save</button>

    </form>