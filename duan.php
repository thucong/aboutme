<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/public/inc/header.php'?>
    
    <!-- Portfolio Single Section Begin -->
    <section class="portfolio-single" id="portfolio">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
        </div>
        <h1>My Portfolio</h1>
        <h2>Lorem ipsum dolor Sit Amet</h2>
        <span class="portfolio-category">Branding / Identity / Graphic Design</span>
      </div>

      <div class="container-medium clearfix">
        <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide wow animated fadeIn" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="templates/public/images/banner3.jpg" alt="Portfolio image">
              </div>
              <div class="item">
                <img src="templates/public/images/banner4.jpg" alt="Portfolio image">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <div class="control-button left"><i class="fa fa-angle-left"></i></div>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <div class="control-button right"><i class="fa fa-angle-right"></i></div>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>


        <div class="col-md-6 description">
          <h3 class="textbold wow animated fadeIn">Description</h3>
          <p class=" wow animated fadeIn">Praesent faucibus nisi eu ipsum sollicitudin gravida. Proin nec aliquet eros. Phasellus vel tempor enim, non finibus leo. Nam finibus lobortis lectus non mattis. Integer a orci nec ante pharetra rhoncus. Maecenas quam est, laoreet sit amet consequat non, porta eget erat. Etiam vel metus non tortor congue pellentesque at id augue.<br/><br/>
          
          Integer a orci nec ante pharetra rhoncus. Maecenas quam est, laoreet sit amet consequat non, porta eget erat. Etiam vel metus non tortor congue pellentesque at id augue.</p>

          <a class="def-btn wow animated fadeIn" href="#">Visit Site</a>
        </div>
        <div class="col-md-6 client-testimonial">
          <div class="client-bio wow animated fadeIn">
            <div class="client-photo"><img src="templates/public/images/client.jpg" alt="Clients Photo"></div>
            <div class="name-position">
              <h4 class="name">Veronica Lee</h4>
              <p class="position">Co-Founder</p>
            </div>
            <div class="client-brand">
              <img src="templates/public/images/logo-dark.png" alt="Clients Brand">
            </div>
          </div>
          <div class="client-comment wow animated fadeIn">
            <h4 class="main-comment">Great Job, I am very satisfied</h4>
            <p class="text-comment">
              <span class="quote-bg"><i class="fa fa-quote-right"></i></span>
              Praesent faucibus nisi eu ipsum sollicitudin gravida. Proin nec aliquet eros. Phasellus vel tempor enim, non finibus leo. Nam finibus lobortis lectus non mattis. Integer a orci nec ante pharetra rhoncus. Maecenas quam est, laoreet sit amet consequat non, porta eget erat. Etiam vel metus non tortor congue pellentesque at id augue.</p>
          </div>
        </div>
      </div>

      <div class="related-project wow animated fadeIn">
        <div class="col-md-6 prev-project text-right" style="background: url(templates/public/images/prev-project.jpg) center; backround-size: cover;">
          <div class="overlay"></div>
          <div class="content">
            <a href="#" class="def-btn"><i class="fa fa-chevron-left"></i> Previous Project</a>
          </div>
        </div>
        <div class="col-md-6 next-project lighter" style="background: url(templates/public/images/next-project.jpg) center; backround-size: cover;">
          <div class="overlay"></div>
          <div class="content">
            <a href="#" class="def-btn">Next Project <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </section><!--/.portfolio-single -->
    <!-- Portfolio Single Section End -->
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/public/inc/footer.php'?>