<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Help Desk Piamonte</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/favicons/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include('navbar.php')?>

            <!-- Header-->
            <header class="py-5 mt-4">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-12">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Sistema de mesa de ayuda</div></div>
                                <div class="fs-3 fw-bold text-muted">Bienvenido a Colegio Piamonte</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">¿Cómo podemos ayudarte?</span></h1>
                                <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a>
                                </div> -->
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-center mb-3">
                                    <button id="btnModal" class="btn btn-dark btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" style="background-color: #0093E9;"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalForm">
                                    Generar Ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!-- MODAL -->
            <?php include('modal.php')?>
        </main>
        <?php include('footer.php')?>
        <!-- Bootstrap core JS-->
        <script src="./vendors/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <script src="./vendors/jQuery/jquery.min.js"></script>
        <!-- LoadingOverlay -->
        <script src="./vendors/loadingoverlay/loadingoverlay.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
