         <?php

            $page = 'installation';
            $page_title = "Installation";

        ?>

        <?php include ('theme/header.php'); ?>
       
        <div class="doc-wrapper">   
            <div class="container">
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Installation</h2>

                                <div id="inst_step1"  class="section-block">
                                    <h3 class="block-title">Step 1: Run installer</h3>
                                    <p>Click Next to proceed with the installation. Otherwise, click Cancel.                                          
                                    </p>
                                    
                                    <img src="/assets/images/inst_1.jpg" class="img-fluid" />
                                </div><!--//section-block-->
                                
                                <div id="inst_step2"  class="section-block">
                                    <h3 class="block-title">Step 2: Select features you want to be installed</h3>
                                    <h5> Step 2.1 </h5>
                                    <p>In this window, you may check and configure the following options before starting the installation process.                                         
                                    </p>
                                    <img src="/assets/images/inst_2.jpg" class="img-fluid pb-4" />

                                    <h5> Step 2.2 </h5>
                                    <p>Click the drop-down button beside the Vidoo App (1.0.0) to change how this feature will be installed.
                                    </p>
                                    <img src="/assets/images/inst_3.jpg" class="img-fluid pb-4" />

                                    <h5> Step 2.3 </h5>
                                    <p>Click the drop-down button beside the Main Application to change how this feature will be installed 
                                    </p>
                                    <img src="/assets/images/inst_4.jpg" class="img-fluid" />

                                </div><!--//section-block-->
                                
                                <div id="inst_step3"  class="section-block">
                                    <h3 class="block-title">Step 3: Change installation path</h3>
                                    
                                    <h5> Step 3.1 </h5>
                                    <p>Click Browse… to select a destination folder on your local machine where you want the vidoo App to be installed. The following screen will pop-up after clicking the Browse button. 
                                    </p>
                                    <img src="/assets/images/inst_5.jpg" class="img-fluid pb-4" />

                                    <h5> Step 3.2 </h5>
                                    <p>Click the drop-down button to select a folder location. 
                                    </p>
                                    <img src="/assets/images/inst_6.jpg" class="img-fluid pb-4" />

                                    <h5> Step 3.3 </h5>
                                    <p>Alternatively, you may click on the Up one level button to change the destination to a top-level folder. 
                                    </p>
                                    <img src="/assets/images/inst_7.jpg" class="img-fluid pb-4" />

                                    <h5> Step 3.4 Create a new folder </h5>
                                    <p>If you would like to create a new destination folder, click the Create a new folder button. 
                                    </p>
                                    <img src="/assets/images/inst_8.jpg" class="img-fluid pb-4" />

                                    <p>By default, vidoo App will be installed to the following location:</p>
                                    
                                    <div class="code-block">
                                        <p><code><?php echo htmlentities('C:/Program Files/vidoo App/'); ?></code></p>
                                    </div><!--//code-block-->
                                    <p>Once you have selected a destination folder, click OK to save the settings.</p>


                                </div><!--//section-block-->

                                
                                <div id="inst_step4"  class="section-block">
                                    <h3 class="block-title">Step 4: Disk Usage</h3>
                                    
                                    <p>From the Custom Setup window, you may click the Disk Usage button to get an overview of your total hard disk capacity, the available disk space, the required space for the installation, and how much disk space will remain after the vidoo App installation. 
                                    </p>
                                    <img src="/assets/images/disk_1.jpg" class="img-fluid pb-4" />

                                    <p>Example of the Disk Space Requirements 
                                    </p>
                                    <img src="/assets/images/disk_2.jpg" class="img-fluid" />

                                </div><!--//section-block-->

                                <div id="inst_step5"  class="section-block">
                                    <h3 class="block-title">Step 5: (Optional) Reset all settings</h3>                                    
                                    <p>Click the Reset button if you would like to revert the settings to its default configuration.
                                    </p>
                                    <img src="/assets/images/disk_3.jpg" class="img-fluid" />

                                </div><!--//section-block-->

                                <div id="inst_step6"  class="section-block">
                                    <h3 class="block-title">Step 6: Completion of installation</h3>                                    
                                    <p>After you have configured the installation settings, or if no changes to the settings have been made, click Next to proceed to the next window. 
                                    </p>
                                    <img src="/assets/images/fin_1.jpg" class="img-fluid pb-4" />

                                    <p>Click Install to begin the Vidoo App installation process.  
                                    </p>
                                    <img src="/assets/images/fin_2.jpg" class="img-fluid pb-4" />

                                    <p>Wait until the installation process is complete and finish on complete  
                                    </p>
                                    <img src="/assets/images/fin_3.jpg" class="img-fluid pb-4" />

                                    <p>A Vidoo App desktop shortcut icon will be created after a successful installation. 
                                    </p>
                                    <img src="/assets/images/fin_4.jpg" class="img-fluid" />

                                </div><!--//section-block-->

                                <a href="wiki/virtual-box-installation" class="btn btn-green mt-5">
                                    NEXT STEP <i class="fas fa-chevron-right"></i>
                                </a>
                                
                            </section><!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->

                    <?php include('theme/nav.php'); ?>

                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
                
    </div><!--//page-wrapper-->

    <?php include('theme/footer.php'); ?>