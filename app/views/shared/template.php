<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <link rel="icon" href="<?= $PUBLIC ?>/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= $PUBLIC ?>/css/bracket.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <title>PHPIZI</title>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex vh-100">
        <?php require 'sidebar.php'; ?>


        <div class="flex-grow-1 container-content overflow-auto mx-4">
            <!-- Header -->
            <?php require 'navbar.php'; ?>
            <!-- Content -->
            <?php RENDER() ?>

            <div class="footer text-center fixed-bottom p-2">
                <span>© 2023 Easyflow</span>
            </div>
        </div>
    </div>

</body>

</html>