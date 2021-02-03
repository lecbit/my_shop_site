<div class="reg">
<form action="blocks/registr_func.php" method="POST" class="text-center border border-light p-5">
    <p class="h4 mb-4">Sign up</p>

    <!-- E-mail -->
    <input name="login" type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="login">

    <!-- Password -->
    <input name="password" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block waves-effect waves-light" type="submit">Sign in</button>
</form>
</div>