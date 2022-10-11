<?php include('view/header.php'); ?>


<center><div  class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Contact</h1>
    <h6 class=" fw-bold"> <a class=" fw-bold" href="?"> Home / </a><a class=" fw-bold" href="#"> Contact</a> </h6>
</div></center>

<!-- main section -->
<section class="main">
    <div class="container w-50">
        <div class="row my-5">
            <div class="col-md-4">
                <p class="fs-3">Contact Information</p>
                <p class="text-muted"> Fill up the form and our team will get back to you soon!</p>
                <p> Phone: 010-6507-5844 </p>
                <p> Email: info@haksenguz.com </p>
                <p> Address: Seoul, South Korea </p>
            </div>
            <div class="col-md-8">
                <form action="model/actions/contact_process.php" method="post">
                    <div class="input-group mb-3">
                        
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        
                    </div>

                   
                    <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email address" name="email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Phone</span>
                        <input type="text" class="form-control" name="phone_number" >
                    
                    </div>
                    
                    <!-- right side -->
                    <div class="input-group mb-3">
                       <div class="row">
                            <div class="col-md-3">                      
                                <input class="form-check-input" type="radio" name="b_inquiry" class="gridRadios1" value="Business" checked>
                                <label class="form-check-label" for="gridRadios1">
                                Business 
                                </label>
                            </div>
                            <div class="col-md-3">                      
                                <input class="form-check-input" type="radio" name="co_op" class="gridRadio1" value="Cooperate" >
                                <label class="form-check-label" for="gridRadios1">
                                Cooperate
                                </label>
                            </div>
                            <div class="col-md-3">                      
                                <input class="form-check-input" type="radio" name="e_report" class="gridRadios1" value="Error Report" >
                                <label class="form-check-label" for="gridRadios1">
                                Error Report
                                </label>
                            </div>
                            <div class="col-md-3">                      
                                <input class="form-check-input" type="radio" name="others" class="gridRadios1" value="Other" >
                                <label class="form-check-label" for="gridRadios1">
                                Other
                                </label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control mt-3" placeholder="Leave a comment here" name="message" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Your message...</label>
                            </div>

                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary my-3">Send Message</button>
                            </div>
                        </div>
                        <!-- !right side -->
                        
                    </div>   
                </form>                
            </div>
        </div>
    </div>
</section>
<!-- !main section -->


<?php include('view/footer.php'); ?>