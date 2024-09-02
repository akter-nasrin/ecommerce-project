
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/ecommerce_project/config.php");
?>
<style>
.about {
    padding: 1.4rem 0;
}

.about .heading h1 {
    font-size: 1.3rem;
    font-weight: 700;
    margin: 0;
    padding: 0;

}

.about .heading h1 span {
    color: #F24259;
}

.about .heading p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 20px 0 60px;
    padding: 0;
}

.about.h3 {
    font-size: 25px;
    font-weight: 700;
    margin: 0;
    padding: 0;
}
.choose {
margin-top: 4rem;
margin-bottom: 1.8rem ;
}


.about p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 20px 0 15px;
    padding: 0;
    
}
.sidestyle{
    margin-left: 5rem;
   
}
.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color: #F24259;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}

.team-boxed {
    color:#313437;
    background-color:white;
  }
  
  .team-boxed p {
    color:#7d8285;
  }
  
  .team-boxed h2 {
    font-weight:bold;
    margin-bottom:1.5rem;
   margin-top:4rem;
    color:inherit;
  }
  
 
    .team-boxed h2 {
      margin-bottom:25px;
      padding-top:25px;
      font-size:24px;
    }
  
  
  .team-boxed .intro {
    font-size:16px;
    max-width:500px;
    margin:0 auto;
  }
  
  .team-boxed .intro p {
    margin-bottom:0;
  }
  
  .team-boxed .people {
    padding:50px 0;
  }
  
  .team-boxed .item {
    text-align:center;
  }
  
  .team-boxed .item .box {
    text-align:center;
    padding:30px;
    background-color:#fff;
    margin-bottom:30px;
  }
  
  .team-boxed .item .name {
    font-weight:bold;
    margin-top:28px;
    margin-bottom:8px;
    color:inherit;
  }
  
  .team-boxed .item .title {
    text-transform:uppercase;
    font-weight:bold;
    color:#d0d0d0;
    letter-spacing:2px;
    font-size:13px;
  }
  
  .team-boxed .item .description {
    font-size:15px;
    margin-top:15px;
    margin-bottom:20px;
  }
  
  .team-boxed .item img {
    max-width:160px;
  }
  
  .team-boxed .social {
    font-size:18px;
    color:#F24259;
  }
  
  .team-boxed .social a {
    color:inherit;
    margin:0 10px;
    display:inline-block;
    opacity:0.7;
  }
  
  .team-boxed .social a:hover {
    opacity:1;
  }
  


  .testimonials {
    padding: auto;
  }
  .testimonials h3 {
    margin-bottom:1.8rem;
    margin-top:3rem;
    font-weight:bold;
  }
  .testimonials .card {
    border-bottom: 3px #007bff solid !important;
    transition: 0.5s;
    margin-top: 60px;
  }
  .testimonials .card i {
    background-color: #007bff;
    color: #ffffff;
    width: 75px;
    height: 75px;
    line-height: 75px;
    margin: -40px auto 0 auto;
  }
</style>
<section class="about" id="about">
            <div class="container">
                <div class="heading text-center">
                    <h1>About
                        <span class="color ">Us</span></h1>
                    <p>Welcome QuickDine !<br>  We are a passionate team dedicated to providing the best food experience for our customers. Our chefs use only the freshest ingredients, and we pride ourselves on our diverse menu that caters to all tastes.</p>
                Whether you're dining in with us, taking out, or ordering online for delivery, we are committed to providing you with delicious food and excellent service.
               
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="img\product\banner sumi.png" alt="about" class="img-fluid" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="choose">Why Choose Us?</h3>
                        <p> 
                  Our efficient delivery network ensures that your food arrives hot and fresh, just the way you like it.
                We prioritize your satisfaction, providing responsive customer support and a hassle-free ordering process.
                   Your transactions are protected with our secure payment gateway, giving you peace of mind every time you order.
                 Enjoy exclusive discounts and promotions, making your favorite meals even more affordable.
                We look forward to serving you!
            </div>.</p>
                       
                    </div>
                </div>
            </div>
         
            <div class="row mt-4 mx-5">
          
              <div class="col-lg-3">
                  <div class="about_content_box_all mt-3">
                      <div class="about_detail text-center">
                          <div class="about_icon">
                            <i class="fa-solid fa-truck-fast"></i>
                          </div>
                          <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Fast & Free Shipping</h5>
                          <p class="edu_desc mt-3 mb-0 text-muted">Get your orders delivered quickly and at no extra cost. We believe in getting your purchases to you as soon as possible, without hidden fees.</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3">
                  <div class="about_content_box_all mt-3">
                      <div class="about_detail text-center">
                          <div class="about_icon">
                            <i class="fa-solid fa-headset"></i>
                          </div>
                          <h5 class="text-dark text-capitalize mt-3 font-weight-bold">24/7 Support</h5>
                          <p class="edu_desc mb-0 mt-3 text-muted">We're here for you, anytime, anywhere. Our friendly customer support team is available 24 hours a day, 7 days a week to answer your questions and help with any issues.</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3">
                  <div class="about_content_box_all mt-3">
                      <div class="about_detail text-center">
                          <div class="about_icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                          </div>
                          <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Easy to shopping</h5>
                          <p class="edu_desc mb-0 mt-3 text-muted">Our website is designed with you in mind. Find what you need quickly and easily with intuitive navigation, clear product descriptions, and helpful search filters. No more frustration, just effortless shopping.</p>
                      </div>
                  </div>
              </div>
              
          </div>
          <div class="team-boxed">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Meet Our Team
     </h2>
    
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="img/team-member1.jpg">
                            <h3 class="name">Sania Akter</h3>
                            <p class="title">Server Engineer</p>
                            
                            <div class="social">
                              <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                              </a>
                              <i class="fa-brands fa-twitter"></i>
                              </a>
                              <a href="#"><i class="fa-brands fa-instagram"></i>
                              </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="img/team-member2.jpg">
                            <h3 class="name"> Shahed Ahamed</h3>
                            <p class="title">Developer - Backend</p>
                            
                            
                              <div class="social">
                                <a href="#">
                                  <i class="fa-brands fa-facebook"></i>
                                </a>
                                <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#"><i class="fa-brands fa-instagram"></i>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><img class="rounded-circle" src="img/team-member3 .jpg">
                            <h3 class="name">Sumaya Akter</h3>
                            <p class="title">Frontend -Developer</p>
                            
                            <div class="social">
                              <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                              </a>
                              <i class="fa-brands fa-twitter"></i>
                              </a>
                              <a href="#"><i class="fa-brands fa-instagram"></i>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="testimonials text-center">

          <div class="container">
            <h3>Testimonials</h3>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="card border-light bg-light text-center">
                  <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                  <div class="card-body blockquote">
                    <p class="card-text">""Developing the online food ordering system has been a transformative journey. Our commitment to delivering fresh and delicious meals with the utmost convenience has resonated with our customers. The positive feedback we receive daily is a testament to our team's dedication to quality and service. It's incredibly fulfilling to see our platform become an integral part of our customers' lives."."</p>
                    <footer class="blockquote-footer"><cite title="Source Title">CEO, Nasrin Akter, QuickDine</cite></footer>
                  </div>
                </div>
              </div>
      
              <div class="col-md-6 col-lg-4">
                <div class="card border-light bg-light text-center">
                  <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                  <div class="card-body blockquote">
                    <p class="card-text">"Creating an online food ordering system that truly reflects our passion for great food and excellent service has been a rewarding experience. The positive feedback we’ve received from our customers validates our efforts to make ordering food online not just convenient but also enjoyable. We’re proud to be part of this exciting journey and to serve our community with love and dedication."</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Co-Founder, Zara Zamman, QuickDine.</cite></footer>
                  </div>
                </div>
              </div>
      
              <div class="col-md-6 col-lg-4">
                <div class="card border-light bg-light text-center">
                  <i class="fa fa-quote-left fa-3x card-img-top rounded-circle" aria-hidden="true"></i>
                  <div class="card-body blockquote">
                    <p class="card-text">"Building this online food ordering system has been a journey of passion and innovation. We’ve focused on delivering a seamless experience that matches the quality of the food we serve. The trust and satisfaction of our customers drive us to continually enhance our platform, ensuring that every order is a delightful experience from start to finish."</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Founder, Nasrin Akter, QuickDine.</cite></footer>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
      
        </div>
        </section>