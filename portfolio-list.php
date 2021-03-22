<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/public/inc/header.php'?>
    
    <!-- Portfolio List Section Begin -->
    <section class="portfolio-list portfolio" id="portfolio">
      <div class="title section-title bg-section text-center bottom-shape wow animated fadeIn">
        <div class="title-icon-container">
          <div class="title-icon"><i class="pe-7s-rocket pe-2x pe-va"></i></div>
        </div>
        <h1>My Portfolio</h1>
        <h2>Lorem ipsum dolor Sit Amet</h2>
      </div>

      <div class="container">
        <div class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
        </div>

        <div class="portfoliofilter wow animated fadeIn">
          <a href="javascript:void(0)" data-filter="*" class="current">
            <div class="def-btn filterbutton">All Categories</div>
          </a>
          <a href="javascript:void(0)" data-filter=".webdevelopment">
            <div class="def-btn filterbutton">Web Development</div>
          </a>
          <a href="javascript:void(0)" data-filter=".webdesign">
            <div class="def-btn filterbutton">Web Design</div>
          </a>
        </div>
      </div>
      
      <div class="container">
        <div class="portfoliocontent">

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a href="portfolio-single.html">
              <div class="content">
                <div class="overlay">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Beauty Typography</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">1 Jan 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="templates/public/images/work1.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a href="portfolio-single.html">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Sweet Cake</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">17 Feb 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="templates/public/images/work2.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a href="portfolio-single.html">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Nice Photography</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">15 Mar 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="templates/public/images/work3.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a href="portfolio-single.html">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Bike Photo</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">22 Dec 2014</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="templates/public/images/work4.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdesign">
            <a href="portfolio-single.html">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Good Camera</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">27 Dec 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="templates/public/images/work5.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->

          <div class="item col-md-4 col-sm-6 col-xs-12 webdevelopment">
            <a href="portfolio-single.html">
              <div class="content">
                <div class="overlay valign-container">
                  <div class="valign-container">
                    <div class="text valign-content">
                      <span class="project-name">Nice Shirt Design</span>
                      <div class="separator-container">
                        <div class="separator"><div class="shape"></div></div>
                      </div>
                      <span class="project-date">2 Mar 2015</span>
                    </div>
                  </div>
                </div>
                <div class="image">
                  <img src="templates/public/images/work6.jpg" alt="Portfolio image">
                </div>
              </div><!--/.content -->
            </a>
          </div><!--/.item -->
        </div><!--/.portfoliocontent -->
      </div><!--/.container -->

      <!-- Pagination Section Begin -->
      <div class="pagination-wrap">
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

    </section><!--/.portfolio -->
    <!-- Portfolio List Section End -->
    
   <?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/public/inc/footer.php'?>