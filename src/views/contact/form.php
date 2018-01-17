<h2>Contact form</h2>
<form class="form-horizontal" method="post" action="/contact/form" id="frm-contact">
    <div class="form-group">
        <label for="firstname" class="control-label col-sm-2">First Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="control-label col-sm-2">Last Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="control-label col-sm-2">Email address</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="comment" class="control-label col-sm-2">Comment</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="comment" name="comment" placeholder="Comment"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="captcha" class="control-label col-sm-2">Captcha</label>
        <div class="col-sm-2">
            <img class="center-block" src="/captcha/image?id=form_contact" alt="Captcha">
        </div>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="text" name="email" placeholder="Please type only the numbers displayed" maxlength="4">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" class="form-control btn btn-default" value="Submit">
        </div>
    </div>
</form>
