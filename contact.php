<?php 
    define("Title","CONTACT US");
?> 
<?php include('includes/header.php') ?>

<section class="contact_us">
    <div class="inner_page_background img_wrapper d-flex align-items-end">
        <div class="m-5">
            <h1>CONTACT US</h1>
            <p><a href="index.php">Home</a> >> Contact Us</p>
        </div>
    </div>
    <div class="container contact_wrap">
        <div class="row">
            <div class="col-sm-12 col-md-6 section_title">
                <h3>Contact</h3>
                <div class="details">
                    <p><i class="fas fa-map-marker-alt"></i> Address: Kathmandu. Nepal</p>
                    <p><i class="fas fa-tty"></i> Telephone no.: +12432324</p>
                    <p><i class="fas fa-mobile"></i> Cellphone no.: +989785734</p>
                    <p><i class="fas fa-envelope"></i> Email: example@gmail.com</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="section_title"><h3>Quick Inquiry</h3></div>
                <div class="inquiry">
                    <form>
                        <div class="form-row">
                            <div class="form-group col col-sm-6">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="" placeholder="Enter your full name">
                            </div>
                            <div class="form-group col col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col col-sm-6">
                                <label for="email">Address</label>
                                <input type="email" class="form-control" id="" placeholder="Enter your full address">
                            </div>
                            <div class="form-group col col-sm-6">
                                <label for="fullname">Phone Number</label>
                                <input type="text" class="form-control" id="" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="message">Query</label>
                            <textarea class="form-control" id="" rows="3" placeholder="Enter your query"></textarea>
                        </div>
                        <div class="form-row  mt-4">
                            <button type="submit" class="btn">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="section_title"> <h2>Find Us here !</h2></div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.849734265319!2d85.3358073!3d27.703005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x848c8754a5a606d3!2sSeto%20Pool!5e0!3m2!1sen!2snp!4v1567918793318!5m2!1sen!2snp" width="1300" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>