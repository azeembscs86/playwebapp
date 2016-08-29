

<?php $attributes = array('role' => 'form'); ?>
 <?php echo form_open_multipart('Dramas/newaddDrama',$attributes);?>


<fieldset>
    <!--  Drama Title -->
    <div class="form-group">
        <?php

        $data = array(
            'class' => 'form-control',
            'placeholder' => 'Drama Title',
            'type' => 'text',
            'name' => 'drama_title'
        );
        ?>
        <?php echo form_input($data); ?>

    </div>

    <!--  Drama Content -->
    <div class="form-group">

        <?php

        $data = array(
            'class' => 'form-control',
            "name" => "drama_content",
            'placeholder' => 'Drama Content',
            "rows" => "5"
        );
        ?>

        <?php echo Form_textarea($data); ?>

    </div>

    <!--  Drama Image -->
    <div class="form-group">
        <label>Image</label>
        <?php

        $data = array(
            'type' => 'file',
            'name' => 'drama_image'
        );
        ?>

        <?php echo form_upload($data); ?>

    </div>

    <!--  Latest Drama Status -->
    <div class="form-group">
        <label>Latest Drama Status</label>

        <div>
            <label class="radio-inline">

        <?php

        $data = array(
            'id' => 'latest_status1',
            'value' => 'yes',
            'type' => 'radio',
            'name' => 'latest_status',
            'checked' => 'checked'

        );
        ?>
        <?php echo form_radio($data); ?>

            YES</label>


            <label class="radio-inline">

                <?php

                $data = array(
                    'id' => 'latest_status2',
                    'value' => 'no',
                    'type' => 'radio',
                    'name' => 'latest_status',


                );
                ?>
                <?php echo form_radio($data); ?>

            NO</label>

        </div>
    </div>

    <!--  Premium Drama Status -->
    <div class="form-group">
        <label>Premium Drama Status</label>

        <div>
            <label class="radio-inline">

                <?php

                $data = array(
                    'id' => 'premium_status1',
                    'value' => 'yes',
                    'type' => 'radio',
                    'name' => 'premium_status',
                    'checked' => 'checked'

                );
                ?>
                <?php echo form_radio($data); ?>

                YES</label>


            <label class="radio-inline">

                <?php

                $data = array(
                    'id' => 'premium_status2',
                    'value' => 'no',
                    'type' => 'radio',
                    'name' => 'premium_status',


                );
                ?>
                <?php echo form_radio($data); ?>

                NO</label>

        </div>
    </div>


    <!--  login Button -->
    <?php
    $data = array(
        'class' => 'btn btn-default',
        'type' => 'submit',
        'value' => 'Submit'
    );

    echo form_submit($data);
    
    ?>



</fieldset>


<?php echo form_close(); ?>