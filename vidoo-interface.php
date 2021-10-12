         <?php

            $page = 'vidoo-interface';
            $page_title = "Vidoo app interface";

        ?>

        <?php include ('theme/header.php'); ?>
       
        <div class="doc-wrapper">   
            <div class="container">
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Vidoo app interface</h2>
                                <p class="pt-3">The application consists of the following features: </p>
                                <h3>Vidoo app features</h3>
                                <p> 
                                    <a class="scrollto" href="#vidoo-interface1">Activities</a> | 
                                    <a class="scrollto" href="#vidoo-interface2">Live Video</a> | 
                                    <a class="scrollto" href="#vidoo-interface3">Cameras</a> | 
                                    <a class="scrollto" href="#vidoo-interface4">Clips</a> | 
                                    <a class="scrollto" href="#vidoo-interface5">History</a>
                                </p>
                                <div id="vidoo-interface1"  class="section-block">
                                    
                                    <h4> Activities </h4>
                                    <p>After a successful login, the vidoo App main interface will be displayed. 
                                    This option displays all the motion activities for each camera (i.e., camera 1, camera 2, camera 3…) at a specified time.</p>
                                    <img src="assets/images/inf-1.jpg" class="img-fluid pb-4" />

                                    <p>To select a specific camera that you would like to display, click the camera selection drop-down button, then click Search after selecting. </p>
                                    <img src="assets/images/inf-2.jpg" class="img-fluid pb-4" />

                                    <p>If you would like to view a related clip or history, click the Related Clip or Related History button on a specific camera. </p>
                                    <img src="assets/images/inf-3.jpg" class="img-fluid pb-4" />

                                    <p>Example of a Related History clip playing </p>
                                    <img src="assets/images/inf-4.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vidoo-interface2"  class="section-block">
                                    
                                    <h4> Live Video </h4>
                                    <p>This option allows you to stream a live video of a selected camera.</p>
                                    <img src="assets/images/inf-5.jpg" class="img-fluid pb-4" />

                                    <p>Example of a live streaming video of ‘camera 2’</p>
                                    <img src="assets/images/inf-6.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vidoo-interface3"  class="section-block">
                                    
                                    <h4> Cameras </h4>
                                    <p>This option displays the camera information and enables you to configure the camera settings. </p>
                                    <img src="assets/images/inf-7.jpg" class="img-fluid pb-4" />

                                    <h5>Add Camera</h5>
                                    <p>This button will allow you to add a new camera and you can configure the following fields.</p>
                                    <img src="assets/images/inf-8.jpg" class="img-fluid pb-4" />
                                    <ol>
                                        <li class="level1"><div class="li"> <strong>Camera Name</strong> - the camera name that will be displayed</div>
                                        </li>
                                        <li class="level1"><div class="li"> <strong>Username</strong> - the username for the new camera</div>
                                        </li>
                                        <li class="level1"><div class="li"> <strong>Password</strong> – the password for the new camera</div>
                                        </li>
                                        <li class="level1"><div class="li"> <strong>RTSP <abbr title="Uniform Resource Locator">URL</abbr> (Real Time Streaming Protocol)</strong> – the server that connects between the new camera and its video stream</div>
                                        </li>
                                        <li class="level1"><div class="li"> <strong>Storage</strong> – this feature allows you to select the duration of time for which the recorded video clip should be maintained or retained in the vidoo App. The storage is set to <strong>3 Day Retention</strong> by default. You may select from <strong>1 Day Retention</strong> to <strong>Infinite Retention</strong>.</div>
                                        </li>
                                        <li class="level1"><div class="li"> <strong>Motion Sensitivity</strong> – this determines how drastic a change in the camera's field of view must be to trigger a clip. For example, a slow moving car across the screen may trigger a video clip if the sensitivity is set to high, whereas a lower sensitivity may not trigger a recording for the same amount of motion. The <strong>Motion Sensitivity</strong> is set to <strong>10</strong> by default. This can be adjusted from <strong>10</strong> (the lowest) to <strong>90</strong> (the highest).</div>
                                        </li>
                                        <li class="level1"><div class="li"> <strong>Motion Detection</strong> – this option utilizes the sensor to detect nearby motion. This setting is enabled by default. <br>
                                        </div>
                                        </li>
                                    </ol>
                                    <p>Once done with the configuration, click the Add New Camera button to apply the settings and save the new camera. </p>

                                    <h5>Find Camera</h5>
                                    <p>This option will display the other available camera(s) integrated within the application. </p>
                                    <img src="assets/images/inf-9.jpg" class="img-fluid pb-4" />

                                    <h5>Setting activity zones </h5>
                                    <p>This option will allow you to create new activity zone(s). Click the Activity Zones link to proceed. </p>
                                    <img src="assets/images/inf-10.jpg" class="img-fluid pb-4" />

                                    <p>Activity zone focuses the motion detection on a specific area within the camera's field of view. Click Create New Zone to create an activity zone.</p>
                                    <img src="assets/images/inf-11.jpg" class="img-fluid pb-4" />

                                    <p>Drag the edge(s) of the light-green shape to select. Enter a Zone Name, then click Add new zone to save the created activity zone.</p>
                                    <img src="assets/images/inf-12.jpg" class="img-fluid pb-4" />

                                    <h5>Edit a camera</h5>
                                    <p>This option allows you to configure the camera settings. Configure the following fields, then click Save to apply the settings.</p>
                                    <img src="assets/images/inf-13.jpg" class="img-fluid pb-4" />

                                    <h5>Delete a camera</h5>
                                    <p>This option allows you to delete an existing camera. When the following pop-up window appears, click Yes to confirm.</p>
                                    <img src="assets/images/inf-14.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vidoo-interface4"  class="section-block">
                                    
                                    <h4> Clips </h4>
                                    <p>This feature contains the recorded clip(s) for each camera. </p>
                                    <img src="assets/images/inf-15.jpg" class="img-fluid pb-4" />

                                    <p>To select a camera that you would like to display, click the camera selection drop-down button, then click Search after selecting.</p>
                                    <img src="assets/images/inf-16.jpg" class="img-fluid pb-4" />

                                    <p>You may use the filter options (i.e., Month, Week, Day, Hour, and Minute) to search for a specific clip.</p> 
                                    <p>If there is no recorded clip available for the filtered month, week, day, hour, or minute, then the No items message will be displayed. </p>
                                    <img src="assets/images/inf-17.jpg" class="img-fluid pb-4" />

                                    <p>Example of a recorded clip playing</p> 
                                    <img src="assets/images/inf-18.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vidoo-interface5"  class="section-block">
                                    
                                    <h4> History </h4>
                                    <p>This feature shows the past recorded clip(s) retained in the vidoo App.</p>
                                    <img src="assets/images/inf-19.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vidoo-interface6"  class="section-block">
                                    
                                    <h4> People </h4>
                                    <p>You can add faces of persons you know. Vidoo will notify you how was there. Face log will be also created.</p>
                                    <img src="assets/images/inf-20.jpg" class="img-fluid pb-4" />

                                </div><!--//section-block-->
                                
                                <div id="vidoo-interface7"  class="section-block">
                                    
                                    <h4> Face logs </h4>
                                    <p>This option will show people how visited at your home. It will find then from People tab you have added them.</p>
                                    <img src="assets/images/inf-21.jpg" class="img-fluid pb-4" />

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