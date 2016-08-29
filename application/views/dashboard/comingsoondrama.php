<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="box clearfix">
    <h3>Play TV Coming Soon Dramas List</h3>

    <table class="table table-hover" id="bootstrap-table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Drama Title</th>
            <th>Drama Image</th>
            <th>Drama Content</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>

        <?php
        $count = 1;
        foreach($get_comingsoon_drama as $result)
        {
            ?>
            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $result->drama_title; ?></td>
                <td><img src="<?php echo base_url(); ?>webservices/comingsoon/<?php echo $result->drama_image; ?>" alt="Image" style="width:150px;height:100px;"></td>
                <td><?php echo substr($result->drama_content, 0, 110); ?></td>
                <td><a href="">Edit</a></td>

            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>

