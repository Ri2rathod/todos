<?=$this->extend("layout/app")?>
<?=$this->section("body")?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-sm-8 shadow bg-light col- mx-auto mt-0 mt-sm-1 mt-md-2 py-4">
                <form method="post" action="./signup" class="g-4" onsubmit="return form_submit()">
                    <div class="py-4">
                        <h2 class="display-5  text-center">Sign Up</h2>
                        <hr class="w-50 mx-auto">
                    </div>
                    <div class="form-floating col-12 py-2">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Full Name" onblur="full_name(this.value)">
                        <label class="" for="username">Full Name</label>
                    </div>
                    <div class="form-floating col-12 py-2">
                        <input type="email" class="form-control" name="useremail" id="useremail" placeholder="Email" onblur="email_val(this.value)">
                        <label class="" for="useremail">Email</label>
                    </div>
                    <div class="form-floating col-12 py-2 has-validation">
                        <input type="password" class="form-control"  id="userpassword" placeholder="Password">
                        <label class="" for="userpassword">Password</label>
                        <div class="invalid-tooltip ">
                            <p>passsword length is grater than 6</p>
                        </div>
                    </div>
                    <div class="form-floating col-12 py-2">
                        <input type="password" class="form-control" name="password" id="userconfirmpassword" placeholder="Confirm Password" onblur="confirm_psw_val(this.value)">
                        <label class="" for="userconfirmpassword">Confirm Password</label>
                    </div>
                    <div class="from-group d-grid">
                        <button type="submit" class="btn btn-primary" id="submit_btn">Sign Up</button>
                    </div>
                </form>
                <div class="row">
                    <hr class="mt-4 w-25 mx-auto">
                    <a href="./" class="link text-center text-decoration-none">Already have Account?</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/validation.js')?>">
    </script>
  <?=$this->endSection()?>