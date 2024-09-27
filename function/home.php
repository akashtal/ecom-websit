<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <div class="CSSgal">
  <!-- Don't wrap targets in parent -->
  <s id="s1"></s> 
  <s id="s2"></s>
  <s id="s3"></s>

  <div class="slider">
    <div>
      <img src="assets/img/s1.jpg" alt="Slide 1">
    </div>
    <div>
      <img src="assets/img/s2.jpg" alt="Slide 2">
    </div>
    <div>
      <img src="assets/img/s3.png" alt="Slide 3">
    </div>
  </div>
  
  <div class="prevNext">
    <div><a href="#s4"></a><a href="#s2"></a></div>
    <div><a href="#s1"></a><a href="#s3"></a></div>
    <div><a href="#s2"></a><a href="#s4"></a></div>
  </div>
   </div>
 </div>
      </div>
      <div class="section2">
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="assets/img/new/1.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img2"><img src="assets/img/new/2.png" alt=""></div>
            </div>
          <div class="items">
            <div class="img img3"><img src="assets/img/new/3.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/4.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/5.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/6.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/7.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/8.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/9.png" alt=""></div>
          </div>
          <div class="items">
            <div class="img img1"><img src="assets/img/new/10.png" alt=""></div>
          </div>                
   </div>


<script>
  $(document).ready(function(){
    $(".wish-icon i").click(function(){
      $(this).toggleClass("fa-heart fa-heart-o");
    });
  }); 
</script>
</head>
<body>

  <div class="row">
    <div class="col-md-12">
      <h2>Featured <b>Products</b></h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>   
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/ipad.jpg" class="img-responsive" alt="">                  
                </div>
                <div class="thumb-content">
                  <h4>Apple iPad</h4>                 
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/headphone.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Sony Headphone</h4>                 
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>    
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/macbook-air.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Macbook Air</h4>                  
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                    </ul>
                  </div>
                  <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>                
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/nikon.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Nikon DSLR</h4>                 
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/play-station.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Sony Play Station</h4>
                  <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/macbook-pro.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Macbook Pro</h4>
                  <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/speaker.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Bose Speaker</h4>
                  <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/galaxy.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Samsung Galaxy S8</h4>
                  <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>            
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/iphone.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Apple iPhone</h4>
                  <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/canon.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Canon DSLR</h4>
                  <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/pixel.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Google Pixel</h4>
                  <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>  
            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                  <img src="/examples/images/products/watch.jpg" class="img-responsive" alt="">
                </div>
                <div class="thumb-content">
                  <h4>Apple Watch</h4>
                  <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    </div>
  </div>


    <!-- Bootstrap JS and other scripts go here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ecew3iqZxpT0VPOFM7/8YjOMb2XLZxCeux6SN2yFpk9xS72jkEtQQ0eD9P4EXqDR" crossorigin="anonymous"></script>


