<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
    <style>
        .heart {
            width: 80px;
            height: 80px;
            background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;
            background-position: 0 0;
            cursor: pointer;
            transition: background-position 1s steps(28);
            transition-duration: 0s;
        }

        .heart.is-active {
            transition-duration: 1s;
            background-position: -2800px 0;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <div>
            <img src="http://www.azspagirls.com/files/2010/09/orange.jpg" class="card-img-top" alt="...">
            <div style="position: absolute;top: 8px;right: 0px;">

                <div class="stage">
                    <div class="heart"></div>
                </div>

            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(function () {
            $(".heart").on("click", function () {
                $(this).toggleClass("is-active");
            });
        });
    </script>

</body>

</html>