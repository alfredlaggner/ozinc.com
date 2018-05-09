<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link rel="icon" href="../../../../favicon.ico">
    -->
    <title>Oz Distribution</title>

    <!-- Bootstrap core CSS -->
    <!--    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    -->
    <!-- Custom styles for this template -->
    <link href="/css/floating-labels.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<style>

    :root {
        --input-padding-x: .75rem;
        --input-padding-y: .75rem;
    }

    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 420px;
        padding: 15px;
        margin: auto;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group > input,
    .form-label-group > label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group > label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0; /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown) ~ label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }
</style>
<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4 img-fluid" src="images/OZDistribution.jpg" alt="">
        <h1 class="h3 mb-3 font-weight-normal">OZ Distribution</h1>


        <div class="btn btn-block btn-group-toggle btn-lg" data-toggle="buttons">
            <label class="btn btn-danger">
                <input type="checkbox" id="check"
                       value="remember-me">
                I confirm that I am over 21
            </label>
        </div>
        </label>
            <div class="mt-5 mb-4 text-center">

    <a href="/home" class="btn btn-success rounded btn-block disabled" aria-disabled="true" id="btncheck"
       type="submit">Let me in</a>
        </div>



    </div>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>

<script>
    $('#check').click(function () {
        if ($(this).is(':checked')) {
            document.getElementById('btncheck').classList.remove('disabled');
        } else {
            document.getElementById('btncheck').classList.add('disabled');
        }
    });
</script>
</body>








