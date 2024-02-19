<!doctype html>
<html lang="en">
<?php include "header.php";?>
<body>
   <div class="container">
        <div class="row">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 mt-5 py-5">
                <div class="d-flex flex-column justify-content-center text-center align-items-center">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="gray" class="bi bi-box-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"/>
                        </svg>
                        <h3 class="fw-bolder text-secondary">Order Ease</h3>
                    </div>
                    <div>
                            <form>
                                <input id="username" class="mt-2 p-2 w-100 rounded border" type="text" placeholder="Username" required>
                                <input id="password" type="password" class="mt-2 p-2 w-100 rounded border" type="text" placeholder="Password" required>
                                <button type="submit" id="btn-login" onclick="login()" class="mt-2 p-2 w-100 rounded border border-primary btn btn-primary">Login</button>
                                <button disabled type="submit" id="spinner" style="display: none;" class="mt-2 w-100 rounded border border-primary btn btn-primary" ><div style="width: 24px; height: 24px" class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div></button>
                            </form>
                    </div>
                    
                    <div class="d-flex flex-row justify-content-between w-100 mt-2 border rounded py-3  px-2" style="font-size: 12px;">
                    <a href="" class="text-secondary" style="text-decoration: none;">Signin as POS</a>
                    <a href="" class="text-secondary" style="text-decoration: none;">Signin as Customer</a>
                    <a href="" class="text-secondary" style="text-decoration: none;">Forgot password</a>
                    </div>

                    <div id="error" style="display: none;" class="alert alert-danger mt-2 w-100" role="alert">
                        Please check username and password!
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4"></div>
        </div>
   </div>
  

<?php include "footer.php";?>
</body>
</html>