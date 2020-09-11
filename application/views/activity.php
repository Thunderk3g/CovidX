<?php $this->load->view("templates/header");?>
<div class="container">
    <div class="heading">
        <h4 class="total-count text-center">Activity Log</h4>
    </div>
    <div class="activity-table container">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">User</th>
            <th scope="col">Activity Type</th>
            <th scope="col">Activity Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($activity_log as $log) {?>
            <tr>
            <th scope="row"><?= $log->username ?></th>
            <td><?= $log->activity_type ?></td>
            <td><?= $log->time_of_activity ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>
<?php $this->load->view("templates/footer");?>