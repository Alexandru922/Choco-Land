<?php
include('header.php');
?>

<section class="py-2 text-center container">
    <div class="row py-lg-4">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light py-2 ComicMS">LOGIN</h1>

      </div>
    </div>
  </section>
  <div style="width:500px" class="center mx-auto">
  <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remind me</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <button type="submit" class="btn btn-primary">Register</button>
    <div class="my-3"></div>
  </form>
</div>
  <?php
  include('footer.php');
  ?>
