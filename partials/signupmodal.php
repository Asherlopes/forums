<!-- Button trigger modal --
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
  Launch demo modal
</button>-->

<!-- Modal -->

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModal" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModal">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action = "partials/signup.php" method= "post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="users_password" name="user_password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" id="user_cpassword" name="user_cpassword">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>