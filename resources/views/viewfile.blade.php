<!DOCTYPE html>
<html>

<head>
    <title>Stream Video </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Stream Video </h4>
                    </div>
                    <div class="card-body">

                        <video id="my-video" class="video-js" controls preload="auto" width="311" height="260" poster="" data-setup="<?php echo asset("storage/myVideoFile/5f85f43547d58.jpg") ?>">
                            <source src="<?php echo asset("storage/myVideoFile/5f85f85956015.mp4") ?>" type="video/mp4" />


                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>

</html>