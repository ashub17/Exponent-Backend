<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Exponent Solution Limited</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ URL::asset('frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
  </head>

  <body>
    <header class="nav-down responsive-nav hidden-lg hidden-md">
      <button
        type="button"
        id="nav-toggle"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target="#main-nav"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div id="main-nav" class="collapse navbar-collapse">
        <nav>
          <ul class="nav navbar-nav">
            <li><a href="#top">Home</a></li>
            @foreach ($cats as $cat)
              <li><a href="#{{$cat->slug}}">{{$cat->title}}</a></li> 
            @endforeach
          </ul>
        </nav>
      </div>
    </header>

    <div class="sidebar-navigation hidde-sm hidden-xs">
      <div class="logo"><a href="#top">
        <img src="{{url('setups')}}/{{$setups->image}}"></a>
      </div>
      <nav>
        <ul>
          <li>
            <a href="#top">
              <span class="rect"></span>
              <span class="circle"></span>
              Home
            </a>
          </li>
          @foreach ($cats as $cat)
            <li>
              <a href="#{{$cat->slug}}">
                <span class="rect"></span>
                <span class="circle"></span>
                {{$cat->title}}
              </a>
            </li>
          @endforeach
        </ul>
      </nav>
      <ul class="social-icons">
        <li>
          <a href="{{$setups->facebook}}"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="{{$setups->youtube}}"><i class="fa fa-youtube"></i></a>
        </li>
        <li>
          <a href="{{$setups->linkedin}}"><i class="fa fa-linkedin"></i></a>
        </li>
        <li>
          <a href="mailto: {{$setups->email}}"><i class="fa fa-envelope"></i></a>
        </li>
      </ul>
    </div>

    <div class="slider">
      <div class="Modern-Slider content-section" id="top">
        @foreach ($homes as $key=>$home)
        <div class="item item-{{++$key}}">
          <div class="img-fill">
            <div class="image">
              <img src="{{url('homes')}}/{{$home->image}}">
            </div>
            <div class="info">
              <div>
                <h1>{{$home->title}}</h1>
                <p>{{$home->subtitle}}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="page-content">
      <section id="about-us" class="content-section">
        <div class="section-heading" data-aos="flip-left">
          <h1>About <em>Exponent</em></h1>
        </div>
        <div class="container-fluid padding">
          <div class="row padding">
            @foreach ($abouts as $about)
            <div class="col-md-4" data-aos="fade-up">
              <div class="aboutpart">
              <h4>{{$about->title}}</h4>
              <p>{{$about->description}}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

      <section id="our-services" class="content-section">
        <div class="section-heading" data-aos="flip-right">
          <h1>Our <em>Services</em></h1>
        </div>
        <div class="section-content">
          <div class="tabs-content">
            <div class="wrapper">
              <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                  <ul>
                    @foreach ($services as $service)
                    <li>
                      <div class="item" data-aos="flip-right">
                        <div class="col-md-5">
                        <img src="{{url('services')}}/{{$service->image}}"/>
                        </div>
                        <div class="col-md-7">
                          <div class="text-content">
                            <h4>{{$service->title}}</h4>
                            <p>{!!$service->description!!}</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      
      <section id="our-products" class="content-section">
        <div class="section-heading" data-aos="flip-left">
          <h1>Our <em>Products</em></h1>
        </div>
        <div class="section-content">
          <div class="row">
            @foreach ($products as $product)
            <div class="column" data-aos="flip-up">
              <div class="card" >
                <img
                  class="card-img-top"
                  src="{{url('products')}}/{{$product->image}}"
                />
                <h5 class="card-title"><strong>{{$product->title}}</strong></h5>
                <div class="card-body">
                  <a href="{{$product->link}}" target="__blank" class="btn btn-primary">View Demo</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

      <section id="our-clients" class="content-section">
        <div class="section-heading" data-aos="flip-right">
          <h1>Our <em>Clients</em></h1>
        </div>
        <div class="section-content" data-aos="zoom-in">
          <div class="row">
            <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
              <div class="carousel-inner">
                @foreach ($clients as $key=>$client)
                  @if ($key==0)
                  <div class="item active">
                    <div class="carousel-col">
                      <img src="{{url('clients')}}/{{$client->image}}" width="200 px" height="auto"/>
                      <h4>{{$client->title}}</h4>
                    </div>
                  </div>
                  @else
                  <div class="item">
                    <div class="carousel-col">
                      <img src="{{url('clients')}}/{{$client->image}}" width="200 px" height="auto"/>
                      <h4>{{$client->title}}</h4>
                    </div>
                  </div>
                  @endif
                @endforeach
              </div>
              <div class="left carousel-control">
                <a href="#carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
              </div>
              <div class="right carousel-control">
                <a href="#carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="our-partners" class="content-section">
        <div class="section-heading" data-aos="flip-left">
          <h1>Our <em>Partners</em></h1>
        </div>
        <div class="section-content" data-aos="zoom-in">
          <div class="row">
            <div id="carousel1" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
              <div class="carousel-inner">
                @foreach ($partners as $key=>$partner)
                  @if ($key==0)
                  <div class="item active">
                    <div class="carousel-col">
                      <img src="{{url('clients')}}/{{$partner->image}}" width="200 px" height="auto"/>
                      <h4>{{$partner->title}}</h4>
                    </div>
                  </div>
                  @else
                  <div class="item">
                    <div class="carousel-col">
                      <img src="{{url('clients')}}/{{$partner->image}}" width="200 px" height="auto"/>
                      <h4>{{$partner->title}}</h4>
                    </div>
                  </div>
                  @endif
                @endforeach
              </div>
                <div class="left carousel-control">
                  <a href="#carousel1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </div>
                <div class="right carousel-control">
                  <a href="#carousel1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
          </div>
        </div>
      </section>
      
      <section id="contact-us" class="content-section">
        <div id="contact-content">
          <div class="section-heading" data-aos="flip-right">
            <h1>Contact <em>Exponent</em></h1>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-6" data-aos="flip-right">
                <form id="contact" action="#" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required=""/>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject..."
                          required=""
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="phone"
                          type="text"
                          class="form-control"
                          id="phone"
                          placeholder="Your phone no..."
                          required=""
                        />
                      </fieldset>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Your message..."
                          required=""
                        ></textarea>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="btn">
                        Send Message Now
                      </button>
                    </fieldset>
                  </div>
                </form>
              </div>
              <div class="col-md-6" data-aos="flip-left">
                <div id="map">
                  <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.978737288391!2d90.39056681428855!3d23.783771484572924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ca48cd9d95%3A0x743de3cb8746d9d9!2sExponent%20Solution%20Limited!5e0!3m2!1sen!2sbd!4v1581854800113!5m2!1sen!2sbd"
                    width="100%"
                    height="450px"
                    frameborder="0"
                    style="border:0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="row contact-bottom" data-aos="fade-up">
              <div class="col-md-4">
                <img src="https://img.icons8.com/doodle/64/000000/mail-contact.png">
                <h4>Our Email</h4>
                <p>{{$setups->email}}</p>
              </div>
              <div class="col-md-4">
                <img src="https://img.icons8.com/cute-clipart/64/000000/ringing-phone.png">
                <h4>Call Us</h4>
                <p><b>Phone:</b> {{$setups->phone}}</br><b>Tel:</b> {{$setups->landline}}</p>
              </div>
              <div class="col-md-4">
                <img src="https://img.icons8.com/cute-clipart/64/000000/compass.png">
                <h4>Find Us</h4>
                <p>{{$setups->address}}</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="footer">
        <marquee behavior="scroll" direction="left"><p>Copyright &copy; Exponent Solutions Limited</p></marquee>
      </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'
        );
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('frontend/js/plugins.js')}}"></script>
    <script src="{{ URL::asset('frontend/js/main.js')}}"></script>
    <script>
      // Hide Header on on scroll down
      var didScroll;
      var lastScrollTop = 0;
      var delta = 5;
      var navbarHeight = $("header").outerHeight();

      $(window).scroll(function(event) {
        didScroll = true;
      });

      setInterval(function() {
        if (didScroll) {
          hasScrolled();
          didScroll = false;
        }
      }, 250);

      function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta) return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
          // Scroll Down
          $("header")
            .removeClass("nav-down")
            .addClass("nav-up");
        } else {
          // Scroll Up
          if (st + $(window).height() < $(document).height()) {
            $("header")
              .removeClass("nav-up")
              .addClass("nav-down");
          }
        }

        lastScrollTop = st;
      }

        $('.carousel[data-type="multi"] .item').each(function () {
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i = 0; i < 3; i++) {
            next = next.next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });
    </script>
    <script>
      AOS.init();
      window.addEventListener('load', AOS.refresh);
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  </body>
</html>
