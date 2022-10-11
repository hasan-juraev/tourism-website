<?php include('header.php');?>


<center><div class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Entertainment</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="#"> Entertainment </a> </h6>
</div></center>

<!-- section main -->
<section class="main">
    <div class="container w-75">
       
        <div class="row my-5">
            <!-- sort by region --> 
            <form action="">          
            <div class="row mb-5">
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>

                <!-- city -->
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
                <!-- search -->
                <div class="col-md-4">                    
                    <button type="submit" class="btn btn-primary mb-3">Search</button>                
                </div>
            </div>
            <!-- !row -->
            </form>

            <!-- row -->        
            <div class="row">                
                <a href="#"><div class="card" style="width: 23rem;">
                    <img src="assets/translate.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-3 ">Amazing Trip to Busan</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text"><span class="text-danger review_star">*4.5</span><span class="text-muted comments_number">(595)</span></p>
                        <p class="fw-bold">W50000</p>
                    </div>
                </a></div>

            </div>
            <!-- !row -->

            </div>

                
         
        </div>
        <!-- !row -->
     
    </div>
</section>

<?php include('footer.php');?>