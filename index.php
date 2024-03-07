<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Iraku Harry">
    <meta name="keywords" content="HTML, CSS, JavaScript, AJAX, PHP, Apache Server, Bootstrap, jQuery">
    <meta name="description" content="A web search application that uses AJAX to load autocomplete suggestions...">
    <title>Find It</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <link rel="manifest" href="./images/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <!-- main container -->
    <div class="container mx-auto p-4 text-center bg-dark text-light">
        <div class="search mx-auto">
            <h1 class="h1 mb-3 text-lime py-3 rounded-3">findIt Search</h1>
            <form>
                <div class="input-group p-4">
                    <input type="text" class="form-control" id="searchEntry" placeholder="Search about AJAX" required>
                    <button type="submit" class="btn btn-dark border"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <ul id="suggestions" class="list-group">
            </ul>
        </div>
    </div>
    <!-- footer -->
    <footer class="mb-0">
        <div class="container-fluid bg-dark px-5 py-3 text-lime">
            <div class="row">
                <div class="col-2">
                    <img src="./images/hiraku.jpg" width="64" height="64" class="rounded-circle" class alt="profile photo of this developer">
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-4 text-center">
                            <a href="https://github.com/iraqooh/findit" class="text-decoration-none text-lime fw-bold">About</a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="https://github.com/iraqooh/findit" class="text-decoration-none text-lime fw-bold">Source Code</a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="https://github.com/iraqooh?tab=repositories" class="text-decoration-none text-lime fw-bold">Similar Projects</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="h6 mt-3">&copy; <a href="https://github.com/iraqooh/" class="text-decoration-none text-lime">Iraku Harry</a>, Makerere University</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./script.js"></script>
</body>
</html>