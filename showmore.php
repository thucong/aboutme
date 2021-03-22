<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/public/inc/header.php'?>
    
    <!-- Journal List Section Begin -->
    <section class="journal-list bg-section" id="first-section">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-news-paper pe-2x pe-va"></i></div>
        </div>
        <h1>Tin cong nghe</h1>
        <h2>Lorem ipsum dolor Sit Amet</h2>
      </div>
      
      <div class="container-medium clearfix">
        <div class="top-search col-md-12 wow animated fadeIn">
          <div class="search-wrap">
            <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
            <span class="search-icon" id="basic-addon1"><i class="pe-7s-search"></i></span>
          </div>
        </div>

        <div id="masonry-container">
          <article class="col-md-6 masonry wow animated fadeIn" data-wow-delay="0s">
            <div class="journal-content">
              <div class="media">
                <img src="templates/public/images/news1.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a>  <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                
              </div>
            </div>
          </article>

          <article class="col-md-6 masonry wow animated fadeIn" data-wow-delay="0.2s">
            <div class="journal-content">
              <div class="media">
                <img src="templates/public/images/news2.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 August, 2014</div>
              </div>
            </div>
          </article>

          <article class="col-md-6 masonry wow animated fadeIn" data-wow-delay="0s">
            <div class="journal-content">
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-pen"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 August, 2014</div>
              </div>
            </div>
          </article>

          <article class="col-md-6 masonry wow animated fadeIn" data-wow-delay="0.2s">
            <div class="journal-content">
              <div class="media">
                <img src="templates/public/images/news3.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 August, 2014</div>
              </div>
            </div>
          </article>

          <article class="col-md-6 masonry wow animated fadeIn" data-wow-delay="0.4s">
            <div class="journal-content">
              <div class="media">
                <img src="templates/public/images/news4.jpg" alt="news content">
              </div>
              <div class="detail">
                <div class="category-wrap"><div class="category"><i class="pe-7s-photo"></i></div></div>
                <div class="title"><a href="journal-single.html"><h3>Lorem Ipsum dolor sit amet</h3></a></div>
                <div class="info">
                  <i class="pe-7s-user"></i><a href="#">Administrator</a> <i class="pe-7s-ticket"></i> <a href="#">Freebies</a> <i class="pe-7s-comment"></i> <a href="#">3 Comments</a>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="post-date">12 August, 2014</div>
              </div>
            </div>
          </article>

        </div><!--/#masonry-container -->
      </div><!--/.container-medium -->

      <!-- Pagination Section Begin -->
      <div class="pagination-wrap wow animated fadeIn">
        <div class="container">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">Prev</span>
              </a>
            </li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">Next</span>
              </a>
            </li>
          </ul><!--/.pagination -->
        </div><!--/.container -->
      </div><!--/.pagination-wrap -->
      <!-- Pagination Section End -->

    </section><!--/.journal-list-->
    <!-- Journal List Section End -->
    
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/public/inc/footer.php'?>