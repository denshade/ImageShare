<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2>REDCap public image inventory</h2>
        <p class="lead">Please use the underlying page to store your images.</p>
    </div>
    <div class="card">
        <div class="card-body">
        <h1>
            Add a file
        </h1>
        <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
            Select an image to upload:
            <div class="input-group">
                <input class="" type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <BR/>
            <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">
        </form>
        </div>
    </div>
    <BR/>
    <div class="card">
        <div class="card-body">

        <H1>Available images</H1>
        <table class="table">
            <thead><tr><td>Image</td><td>URL</td></tr></thead>
            <tbody><?php
            $dir = new DirectoryIterator(dirname(__FILE__)."/images");
            $urlPrefix = 'http://'.$_SERVER['HTTP_HOST'];
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    $filename = $fileinfo->getFilename();
                    $url = $urlPrefix."/showimage.php?file=$filename";
                    echo "<tr><td><img  style='width:100%;max-width:100px; max-height:100px;' src='$url'/></td>
                        <td>".$url."</td></tr>";
                }
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: lieven
 * Date: 18/01/2019
 * Time: 20:44
 */