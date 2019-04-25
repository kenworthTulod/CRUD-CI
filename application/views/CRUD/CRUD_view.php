
        <a class="btn btn-primary" href="<?php echo base_url('CRUD_control/CRUD_create') ?>"> Create New Entry</a>
        
        <br>
        <br>

        <table class="table">
        <thead class="thead-dark text-center">
            <tr>
            <th>#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>User ID</th>
            <th>Contact #</th>
            <th>Birtdate</th>
            <th>Message</th>
            <th>Created At</th>
            <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                if($results){
                    foreach ($results as $result) {
                    
            ?>

            <tr>
                <td><?php echo $result->id; ?></td>
                <td><?php echo $result->last_name; ?></td>
                <td><?php echo $result->first_name; ?></td>
                <td><?php echo $result->user_id; ?></td>
                <td><?php echo $result->contact_num; ?></td>
                <td><?php echo $result->birthdate; ?></td>
                <td><?php echo $result->message; ?></td>
                <td><?php echo $result->created_at; ?></td>
                <td>
                    <a href="<?php echo base_url('CRUD_control/CRUD_edit/'.$result->id); ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url('CRUD_control/CRUD_delete/'.$result->id); ?>" class="btn btn-danger" onclick="return confirm ('Do you want to delete this record?')">Delete</a>
                </td>
            </tr>
            
            <?php 
                    }
                }
            ?>

        </tbody>

        </table>
    