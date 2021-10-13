         <?php

            $page = 'home';
            $page_title = "Download";

        ?>

        <?php include ('theme/header.php'); ?>
       
        <div class="doc-wrapper">   
            <div class="container">
                <div class="doc-body row">
                    
                    <?php include('theme/nav.php'); ?>

                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Download Vidoo</h2>  

                                <div id="down_step1"  class="section-block">
                                    <h3 class="block-title">Step 1: Visit to our official site</h3>
                                    <p>Copy and paste the following link to your web browser, then hit enter to search.                                        
                                    </p>
                                    <div class="code-block">
                                        <p><code><a href="https://ezvidoo.com" target="new"><?php echo htmlentities('https://ezvidoo.com'); ?></a></code></p>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                
                                <div id="down_step2"  class="section-block">
                                    <h3 class="block-title">Step 2: Choose your operating system</h3>
                                    <p>When the following web page appears, click the download button for Windows.
                                    </p>
                                    
                                    <img src="/assets/images/down_1.jpg" class="img-fluid" />
                                </div><!--//section-block-->
                                
                                <div id="down_step3"  class="section-block">
                                    <h3 class="block-title">Step 3: Wait until download</h3>
                                    <p>Download the Vidoo App installation file. The installation file may be downloaded automatically without hitting Save as, depending on your web browser’s settings. 
                                    </p>
                                    
                                    <img src="/assets/images/down_2.jpg" class="img-fluid" />
                                </div><!--//section-block-->

                                <a href="/wiki/installation" class="btn btn-green mt-5">
                                    NEXT STEP <i class="fas fa-chevron-right"></i>
                                </a>
                                
                            </section><!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->

                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
                
    </div><!--//page-wrapper-->

    <?php include('theme/footer.php'); ?>