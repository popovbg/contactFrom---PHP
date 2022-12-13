<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Simple PHP Contact Form</title>
</head>
<style>
    .main {
        width: 70%;
        margin-top: 20px;
    }

    .msg.success {
        color: green;
    }

    .msg.error {
        color: red;
    }

    @media screen and (max-width: 600px) {
        .main {
            width: 100%;
        }
    }
</style>

<body>
    <div class="container main">
        <?php if ($msg != '') : ?>
            <div class="<?php echo $msgClass; ?>" role="alert"><?php echo $msg; ?></div>
        <?php endif; ?>
        <div class="mb-3">
            <h4>Get in touch!</h4>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="userName" class="form-label">Name</label>
                <input type="text" class="form-control" id="userName" name="userName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="userEmail" name="userEmail">
            </div>
            <div class="mb-3">
                <label for="userMsg" class="form-label">Your message:</label>
                <textarea class="form-control" id="userMessage" name="userMessage"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>