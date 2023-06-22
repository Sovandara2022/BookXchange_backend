@extends('login.master')

@section('dyncontent')


<title>Register Page</title>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                <div class="card-body">
                                    <form method="post" action="adminRegister">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                    <label for="inputFirstName">Name</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name ="email" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="confirmPassword" class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                            
                                            <!-- <input type="text" id="verification_number" name="verification_number" style="width: 60%; margin: auto; padding: 10px; margin-top: 10px;" placeholder="Verification Number" required> -->
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <!-- <button class="btn btn-primary btn-block" onclick=this.SubmitEvent>Create Account</button> -->
                                            <input type="submit" name="submit" value="submit" />
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
       
        </div>
    </div>
   
</body>

