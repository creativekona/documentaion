         <?php

            $page = 'v-b-installation';
            $page_title = "virtual box installation";

        ?>

        <?php include ('theme/header.php'); ?>
       
        <div class="doc-wrapper">   
            <div class="container">
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">virtual Box Installation</h2>
                                
                                <div class="callout-block callout-success">
                                    <div class="icon-holder">
                                        <svg class="svg-inline--fa fa-thumbs-up fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbs-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg><!-- <i class="fas fa-thumbs-up"></i> Font Awesome fontawesome.com -->
                                    </div><!--//icon-holder-->
                                    <div class="content">
                                        <h4 class="callout-title">Useful Tip:</h4>
                                        <p>Vidoo App will choose the appropriate VirtualBox version depending on which version of Windows your machine is running (i.e., Windows 7/8/10, Windows Server, etc.). Thus, it is strongly recommended to download and use the exact VirtualBox version suggested by the vidoo App software. 
                                        </p>
                                    </div><!--//content-->
                                </div>

                                <div id="vb_inst_step1"  class="section-block">
                                    <h3 class="block-title">Step 1: Run Vidoo App</h3>

                                    <h5> Step 1.1 </h5>
                                    <p>Right-click the vidoo App desktop shortcut icon, then click Run as administrator.
                                    </p>                                    
                                    <img src="assets/images/vb-1.jpg" class="img-fluid pb-4" />
                                    
                                    <h5> Step 1.2 </h5>
                                    <p>As the vidoo App contains software packages in Linux, dependency packages must be installed on your Windows machine in order for the App to function properly. Upon opening the application, the vidoo App will automatically detect if the dependencies are installed on your machine.
                                    </p>                                    
                                    <img src="assets/images/vb-2.jpg" class="img-fluid pb-4" />
                                    
                                </div><!--//section-block-->
                                    
                                <div id="vb_inst_step2"  class="section-block">
                                    <h3 class="block-title">Step 2: Download virtual Box</h3>

                                    <h5> Step 2.1 </h5>
                                    <p>In case the dependencies are not installed, vidoo App will require you to download and install the Oracle VM VirtualBox application to run the vidoo App software on your Windows machine. Click the Download button to download the VirtualBox application. 
                                    </p>                                    
                                    <img src="assets/images/vb-3.jpg" class="img-fluid pb-4" />
                                    
                                    <h5> Step 2.2 </h5>
                                    <p>Clicking the learn more > > > link will redirect you to the VirtualBox.org web page.
                                    </p>                                    
                                    <img src="assets/images/vb-4.jpg" class="img-fluid pb-4" />
                                    
                                    <h5> Step 2.3 </h5>
                                    <p>When the following pop-up window appears, click Save to download the VirtualBox installation file.
                                    </p>                                    
                                    <img src="assets/images/vb-5.jpg" class="img-fluid pb-4" />
                                    
                                </div><!--//section-block-->
                                
                                <div id="vb_inst_step3"  class="section-block">
                                    <h3 class="block-title">Step 3: Begin virtual box installation</h3>

                                    <h5> Step 3.1 </h5>
                                    <p>When the following pop-up window appears, click Save to download the VirtualBox installation file. </p> 
                                    <p> Right-click the installation file, then click Run as administrator. 
                                    </p>
                                    <img src="assets/images/vb-6.jpg" class="img-fluid pb-4" />

                                    <h5> Step 3.2 </h5>
                                    <p>Click Next to proceed with the installation. Otherwise, click Cancel.
                                    </p>
                                    <img src="assets/images/vb-7.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vb_inst_step4"  class="section-block">
                                    <h3 class="block-title">Step 4: Preparation and configuration</h3>
                                    
                                    <h5> Step 4.1 </h5>
                                    <p>Similar to Step 9 on the 1 <a href="./installation.php#inst_step2" target="new">Vidoo App installation</a> section, you may also check and configure the following installation settings before starting the installation process. Click Next once done.  
                                    </p>
                                    <img src="assets/images/vb-8.jpg" class="img-fluid pb-4" />

                                    <h5> Step 4.2 </h5>
                                    <p>Check or uncheck on the following options which you would like to enable or disable. Click Next to continue.
                                    </p>
                                    <img src="assets/images/vb-9.jpg" class="img-fluid" />


                                </div><!--//section-block-->
                                
                                <div id="vb_inst_step5"  class="section-block">
                                    <h3 class="block-title">Step 5: Just ingnore this warning</h3>
                                    
                                    <p>Click Yes if you agree to the following Warning and to proceed to the next window.
                                    </p>
                                    <img src="assets/images/vb-10.jpg" class="img-fluid" />

                                </div><!--//section-block-->
                                
                                <div id="vb_inst_step6"  class="section-block">
                                    <h3 class="block-title">Step 6: Compleationg of installation</h3>  

                                    <p>Click Install to begin the VirtualBox installation process. 
                                    </p>
                                    <img src="assets/images/vb-11.jpg" class="img-fluid pb-4" />

                                    <p>Wait until the installation process is complete.
                                    </p>
                                    <img src="assets/images/vb-12.jpg" class="img-fluid pb-4" />

                                    <p>Once the installation process is complete, click Finish to close the Setup Wizard. If the following option remained checked, the VirtualBox application will automatically open once you exit the Setup Wizard. Uncheck this option if you would like to manually open the VirtualBox application later on. 
                                    </p>
                                    <img src="assets/images/vb-13.jpg" class="img-fluid pb-4" />

                                    <p>A VirtualBox desktop shortcut icon will be created after a successful installation. 
                                    </p>
                                    <img src="assets/images/vb-14.jpg" class="img-fluid" />

                                </div><!--//section-block-->

                                <a href="#" class="btn btn-green mt-5">
                                    Go to next step >>
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