<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die; // Restrict file direct access
}
?>

<form class="form-login" action="" method="post">
    <div class="card-body">
        <div class="form-group row mb-2">
            <label for="inputEmail3" class="col-12 col-form-label">Email</label>
            <div class="col-12">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputPassword3" class="col-12 col-form-label">Password</label>
            <div class="col-12">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary me-2">Sign in</button>
        <a href="" for="exampleCheck2">Forget Password?</a>
        
    </div>
    <!-- /.card-footer -->
</form>
