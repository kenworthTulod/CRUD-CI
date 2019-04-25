    
    
    <h2>CRUD Edit</h2>
    <br>

    <a href="<?php echo base_url('CRUD_control'); ?>" class="btn btn-primary">Back</a>
    <br>
    <br>
    <br>

    <form action="<?php echo base_url('CRUD_control/update')?>/<?php echo $row->id?>" method="post" >
                <!--<input type="hidden" name="txt_hidden" value="<?php echo $result->id; ?>">-->
                
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $row->last_name; ?>" required>
                </div>
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" value="<?php echo $row->first_name; ?>" required>
                    <!--<small id="first_nameHelp" class="form-text text-muted">Please put your name</small>-->
                </div>
                <div class="form-group">
                    <label>User ID</label>
                    <input type="number" class="form-control" name="userid" placeholder="Enter User ID" value="<?php echo $row->user_id; ?>" required>
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="number" maxlength="10" class="form-control" name="contactnum" placeholder="Enter Contact Number" value="<?php echo $row->contact_num; ?>">
                </div>
                <div class="form-group">
                    <label>Birthdate</label>
                    <input type="date" class="form-control" name="birth" value="<?php echo $row->birthdate; ?>">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="mess" rows="5" value="<?php echo $row->message; ?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" value="save">Update</button>

    </form>