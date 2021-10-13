<!DOCTYPE html>
<!-- This is how HTML comments look like -->
<html>
<!-- the title will appear on the page-->
<link rel="stylesheet" href="style.css" />
<link rel="icon" type="image/png" href="/assets/images/favicon.ico"/>

<head>
  <title>Vidoo</title>
  <link rel="preload" href="/assets/fonts/EzloSans-Regular.woff" as="font" type="font/woff" crossorigin />
  <link rel="preload" href="/assets/fonts/EzloSans-medium.woff" as="font" type="font/woff" crossorigin />
  <link rel="preload" href="/assets/fonts/EzloSans-bold.woff" as="font" type="font/woff" crossorigin />
  <link rel="preload" href="/assets/fonts/EzloSans-SemiBold.woff" as="font" type="font/woff" crossorigin />
</head>

<body>
  <div class="banner">
    <div class="bannerDiv">

      <div class="bannerText">
        <h3>Vidoo</h3>
        <h1>
          Make any <br />
          camera smart <br />
          with Vidoo
        </h1>
        <div class="new-column">
          <div>
            <p>Download Beta v VERSION_HERE</p>

            <button style="background-color: #1c1e21; border-radius: 6px;" 
            onclick="window.open('https://storage.googleapis.com/vidoo-storage-public/vidoo_VERSION_HERE.msi')">
              <img src="/assets/images/Button_windows.png" alt="" />
            </button>
          </div>
          <div>
            <p class="text-right" ><a  style="color: white;" href='https://storage.googleapis.com/vidoo-storage-public/release_notes/vidoo_VERSION_HERE_release_notes.html'>Release Notes</a></p>
            <button style="background-color: #1c1e21; border-radius: 6px;"
            onclick="window.open('https://storage.googleapis.com/vidoo-storage-public/vidoo-app_amd64_VERSION_HERE.deb')"
            >
              <img src="/assets/images/Button_ubuntu.svg" alt="" />
            </button>
          </div>
        </div>
      </div>

      <div>
        <img src="/assets/images/laptop.png" />
      </div>
    </div>
    <div >
      <img class="bloc2Image" src="/assets/images/block_2@2x.png" />
    </div>
    
  </div>

  <img src="/assets/images/block_3@2x.png" />
  <img src="/assets/images/block_4@2x.png" />
  <img src="/assets/images/Footer@2x.png" />
</body>

</html>
