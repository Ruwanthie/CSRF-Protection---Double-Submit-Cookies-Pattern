<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF Double Submit Cookies Pattern | Error</title>

    <?php include (realpath(__DIR__)."/addons/header.php") ?>
    
</head>

<body>

    <ul class="nav justify-content-center mt-3">
        <li class="nav-item">
             <a class="btn btn-info" href="./../index.php">Home</a>
        </li>
    </ul>

	<br><br>
    <div class="container ">
        <div class="row">
			<div class="alert alert-danger ">
			  <strong> Error! </strong> The provided csrf token and the cookie stored token are not same. So, the transaction between the end-points is interrupted.
			</div>

        </div>
    </div>

</body>

</html>