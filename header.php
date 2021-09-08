<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocery shopping</title>
    <!--custom style.css-->
    <link rel="stylesheet" href="style.css" />

    <!--custom style.css-->

    <!--bootstrap cdn-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!--bootstrap cdn-->


  
    <!--fontawesome cdn-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--fontawesome cdn-->


    <!--flickity-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--flickity-->
<?php
require('functions.php');


?>

   
  </head>
  <body>
    <!--navbar-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light margin-5 navbar-fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">Grocerymart</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll m-auto"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about_us.html">About us</a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarScrollingDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Join us
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarScrollingDropdown"
                >
                  <li><a class="dropdown-item" href="./log-in.php">Sign in</a></li>

                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="./sign-up.php">Sign up</a></li>
                </ul>
              </li>

             
            </ul>

            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!--navbar-->

    <main>