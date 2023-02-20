<h1>Register an account</h1>

<form action="" method="post">
  <div class="row mb-3">
    <div class="col">
      <label for="fname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="fname" name="firstname">
    </div>
    <div class="col">
      <label for="lname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lastname">
    </div>
  </div>


  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We will never share your contact information with any third party companies.</div>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
    <div id="passwordHelp" class="form-text">8 Characters long with mixture of Uppercase, Lowercase and Numbers</div>
  </div>
  <div class="mb-3">
    <label for="confirmPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
