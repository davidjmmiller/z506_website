<h2>Contact form</h2>
<form class="form-horizontal" method="post" action="/contact/form" id="frm-contact">
    <?php
    $field = 'firstname';
    $label = 'First Name';
    ?>
    <div class="form-group <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>has-error<?php endif;?>">
        <label for="<?php echo $field;?>" class="control-label col-sm-2"><?php echo $label;?></label>
        <div class="col-sm-10">
            <input type="text" value="<?php echo post($field);?>" class="form-control" id="<?php echo $field;?>" name="<?php echo $field;?>"
                   placeholder="<?php echo $label;?>"  aria-describedby="helpBlock_<?php echo $field;?>">
            <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>
                <span id="helpBlock_<?php echo $field;?>" class="help-block"><?php echo $errors[$field][0];?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $field = 'lastname';
    $label = 'Last Name';
    ?>
    <div class="form-group <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>has-error<?php endif;?>">
        <label for="<?php echo $field;?>" class="control-label col-sm-2"><?php echo $label;?></label>
        <div class="col-sm-10">
            <input type="text" value="<?php echo post($field);?>" class="form-control" id="<?php echo $field;?>" name="<?php echo $field;?>"
                   placeholder="<?php echo $label;?>"  aria-describedby="helpBlock_<?php echo $field;?>">
            <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>
                <span id="helpBlock_<?php echo $field;?>" class="help-block"><?php echo $errors[$field][0];?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $field = 'email';
    $label = 'Email Address';
    ?>
    <div class="form-group <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>has-error<?php endif;?>">
        <label for="<?php echo $field;?>" class="control-label col-sm-2"><?php echo $label;?></label>
        <div class="col-sm-10">
            <input type="email" value="<?php echo post($field);?>" class="form-control" id="<?php echo $field;?>" name="<?php echo $field;?>"
                   placeholder="<?php echo $label;?>"  aria-describedby="helpBlock_<?php echo $field;?>">
            <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>
                <span id="helpBlock_<?php echo $field;?>" class="help-block"><?php echo $errors[$field][0];?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $field = 'comment';
    $label = 'Your comment';
    ?>
    <div class="form-group <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>has-error<?php endif;?>">
        <label for="<?php echo $field;?>" class="control-label col-sm-2"><?php echo $label;?></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="<?php echo $field;?>" name="<?php echo $field;?>"
                      placeholder="<?php echo $label;?>"  aria-describedby="helpBlock_<?php echo $field;?>"><?php echo post($field);?></textarea>
            <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>
                <span id="helpBlock_<?php echo $field;?>" class="help-block"><?php echo $errors[$field][0];?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $field = 'captcha';
    $label = 'Captcha';
    ?>
    <div class="form-group <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>has-error<?php endif;?>">
        <label for="<?php echo $field;?>" class="control-label col-sm-2"><?php echo $label;?></label>
        <div class="col-sm-2">
            <img class="center-block" src="/captcha/image?id=form_contact" alt="<?php echo $label;?>">
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" aria-describedby="helpBlock_<?php echo $field;?>" id="<?php echo $field;?>" name="<?php echo $field;?>" placeholder="Please type only the numbers displayed" maxlength="4">
            <?php if (isset($errors[$field]) && count($errors[$field]) > 0):?>
                <span id="helpBlock_<?php echo $field;?>" class="help-block"><?php echo $errors[$field][0];?></span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" class="form-control btn btn-default" value="Submit">
        </div>
    </div>
</form>
