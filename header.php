<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="refresh" content="#">.
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css"
        integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/27147ce712.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    <header class="sticky-top">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <img class="navbar-brand mt-1" src="img/image0 1.png" id="logo_custom" width="100" alt="logo" />
                        <strong class="pageName">XI . IV</strong>
                    </div>
                    <div class="col-md-3 mt-1"></div>
                    <div class="col-md-2">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="mt-3 d-block d-sm-none">GWSC</span> -->
                        </button>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- <div class="col-md-3 mt-2">
          <form
            class="d-flex flex-row-reverse"
            role="search"
            action="search.php"
            method="post"
          >
            <button class="btn btn-outline-success" name="save" type="submit">
              Search
            </button>
            <input
              class="form-control me-2"
              name="search"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
          </form>
        </div> -->
                    <!-- <div class="col-md-2 mt-3">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="bi bi-person-circle"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div> -->
                </div>
            </div>

            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgba(0, 0, 0, 0.2)">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?= ($activePage=='index') ? 'active':''; ?>" aria-current="page"
                                    href="index.php">Home</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link <?= ($activePage=='album') ? 'active':''; ?>"
                                    href="album.php">Album</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link <?= ($activePage=='monthsary') ? 'active':''; ?>"
                                    href="monthsary.php">Monthsary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($activePage=='presents') ? 'active':''; ?>"
                                    href="presents.php">Presents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($activePage=='tips') ? 'active':''; ?>" href="tips.php">For
                                    You</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link <?= ($activePage=='aboutus') ? 'active':''; ?>"
                                    href="aboutus.php">About
                                    Us</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    </header>