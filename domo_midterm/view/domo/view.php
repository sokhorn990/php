<!-- add -->

<a href="index.php?action=add_form" class="btn btn-info mb-5">Add New</a>

<!-- add -->
<table class="table table-bordered">
<thead >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
        <th>Mark</th>
        <th>Sex</th>
    </tr>
</thead>
<?php
    if(isset($data['student'])){
        foreach($data['student'] as $info){
            ?>
            <tbody>
            <tr>
                <td><?php echo $info['id']; ?></td>
                <td><?php echo $info['name']; ?></td>
                <td><?php echo $info['class']; ?></td>
                <td><?php echo $info['mark']; ?></td>
                <td><?php echo $info['sex']; ?></td>
            </tr>
            </tbody>
            <?php
        }
    }
?>
</table>