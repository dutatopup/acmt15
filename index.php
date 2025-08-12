<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oh myN00B</title>
    <link rel="stylesheet" href="assets/style.css?v=1.8">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <meta name="robots" content="noindex">
</head>

<body>
    <div class="container">
        <h1>ACMT Mod</h1>
        <p>ACMT v2.1.5 modification with force full-screen mode.</p>

        <h2 style="color: rgb(207, 17, 17);">Disclaimers</h2>
        <p>This modification is for research and testing purposes only on <strong>Android 15</strong> and above. <br>
            Using this modification for commercial purposes or copyright infringement is prohibited. <br>
            Be sure to comply with applicable terms of service and copyright. <br>
            The use of this modification is entirely the responsibility of the user. <br> <br>
            <strong>Attention:</strong> This modification does not guarantee compatibility with all Android 15 and above devices. <br>
        </p>

        <h2>Application Information</h2>
        <p>Here is the original ACMT application information:</p>

        <pre><code>CMT v2.1.5 dan CMT-BU v2.1.5
Update 24-03-2025
Android 6 ~ 13</code></pre>

        <h2>Modification</h2>
        <p>Here is the modified code used to create force full-screen mode:</p>

        <code>AndroidManifest.xml</code>
        <pre><code>&lt;application
    android:resizeableActivity="true"&gt;
&lt;/application&gt;
&lt;supports-screens android:anyDensity="true" android:largeScreens="true" android:normalScreens="true" android:resizeable="true" android:smallScreens="true" android:xlargeScreens="true"/&gt;
</code></pre>

        <div class="note">
            <p><strong>Attention:</strong>
                This modification does not change the original functionality of the app, it only adds a feature to force full-screen
 mode by modifying the <code>AndroidManifest.xml</code> file.
                <br><br>
                This modification changes the signature of the application when it re-builds or recompiles, so it may be necessary to
 uninstall the original application before installing this modification.
                <br><br>
                Use this app if the <code>fullscreen mode per apps</code> feature does not work on
 Android 15 and above devices.
            </p>
<strong>Do not use the dark mode in the system's default theme</strong>, as the icon on the statusbar becomes invisible like normal mode. If you still want to use dark mode and the icon on the statusbar becomes dark, it is not a big problem. Use as you wish
        </div>

        <h1></h1>
        <div style="text-align: center;">
            <div class="progress-container">
                <div class="progress-bar"></div>
            </div>
            Download the modification file / self hosted <br />
            <a href="https://billman.eu.org/acmt/apk/cmt.apk" target="_blank">ACMT Normal</a> |
            <a href="https://billman.eu.org/acmt/apk/cmt-bu.apk" target="_blank">ACMT Baca Ulang</a>
            <br>
                Download the original file / original hosted <br />
                <b>Android 6-13</b> <br />
                <a href="http://portalapp.iconpln.co.id:8000/ipams/file_apk/cmt.apk" target="_blank">ACMT Normal</a> |
                <a href="http://portalapp.iconpln.co.id:8000/ipams/file_apk/cmt-bu.apk" target="_blank">ACMT Baca Ulang</a> <br />
                <b>Android 14</b> <br />
                <a href="http://portalapp.iconpln.co.id:8000/ipams/file_apk/cmt-android14.apk" target="_blank">ACMT Normal</a> |
                <a href="http://portalapp.iconpln.co.id:8000/ipams/file_apk/cmt-bu-android14.apk" target="_blank">ACMT Baca Ulang</a>
                
        </div>
    </div>
</body>

</html>