<?php
include_once($_SERVER['DOCUMENT_ROOT']."/ecommerce_project/config.php");
use App\Products1;
$_products1 = new Products1();
$products1 = $_products1->getActiveProducts1();


?>
<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h3 class="mb-2">Categories</h3>
        <div class="accordion" id="myAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" id="bedroom" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               Breakfast
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
              <div class="accordion-body">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Launch
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
              <div class="accordion-body">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Dinner
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
              <div class="accordion-body">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  

                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-9">
        <section class="products">
          <div class="container">
            <h2 class="text-uppercase"><a href=""></a> </h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                  foreach($products1 as $product):
                ?>
              <div class="col">
                  <div class="card h-100">
                  <a href="product1-details.php?id=<?=$product['id'];?>" title="<?=$product['title'];?>">
                                <img src="<?=$webroot;?>uploads/<?=$product['picture'];?>" class="card-img-top" alt="Best Seller Image">
                            </a>
                    <div class="card-body text-center">
                     <h5 class="card-title"><a href="product1-details.php"><?=$product['title'];?></a></h5>
                      <p class="rating">
                       
                      </p>
                      <p class="price">&#2547;<?= $product['mrp']; ?></p> 
                      <p class="">
                        <button type="button" class="btn btn-danger">Add to cart</button>
                      </p>
                    </div>
                  </div>
                </div>
              <?php
                endforeach;
                ?>
              <!--<div class="col">
                <div class="card h-100">
                  <a href="#" title="CiplaPlast Multipurpose Chair"><img src="img/product1-266x280.jpg" class="card-img-top" alt="Best Seller Image"></a>
                  <div class="card-body text-center">
                    <h5 class="card-title"><a href="#">CiplaPlast Multipurpose Chair</a></h5>
                    <p class="rating">
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </p>
                    <p class="price">&dollar;20.00</p>
                    <p class="">
                      <button type="button" class="btn btn-danger">Add to cart</button>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <a href="#" title="CiplaPlast Multipurpose Chair"><img src="img/product1-266x280.jpg" class="card-img-top" alt="Best Seller Image"></a>
                  <div class="card-body text-center">
                    <h5 class="card-title"><a href="#">CiplaPlast Multipurpose Chair</a></h5>
                    <p class="rating">
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </p>
                    <p class="price">&dollar;20.00</p>
                    <p class="">
                      <button type="button" class="btn btn-danger">Add to cart</button>
                    </p>
                  </div>
                </div>
              </div>-->
            </div>
          </div>

        </section>
      </div>
    </div>
  </div>

</section>