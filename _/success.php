<!-- K.G.D.R Perera IT15112538 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF Double Submit Cookies Pattern | Success</title>

    <?php include (realpath(__DIR__)."/addons/header.php") ?>

</head>

<body>
	
    <ul class="nav justify-content-center mt-3">
        <li class="nav-item">
            <a class="btn btn-info" href="./../index.php">Home</a>
        </li>
    </ul>
	<br><br>
    <div class="container">
        <div class="row">
			<div class="alert alert-success">
			  <strong> Success! </strong> The provided csrf token and the cookie stored token are same. So, this is meant to be a secured transaction of data to the
                    end-points.

        </div>
    </div>

</body>

</html>