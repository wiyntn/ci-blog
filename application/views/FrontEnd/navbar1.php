</head>

<body>

  <div class="super_container">

    <!-- Header -->




    <nav class="navbar navbar-expand-lg navbar-light bg-light font-weight-bold fixed-top">
      <a class="navbar-brand" href="<?php echo base_url('home') ?>">Htun IT Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/blog') ?>">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/learn') ?>">Learn</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/about') ?>">about</a>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/guide') ?>">Guide</a></li> -->
            <?php if ($this->session->userdata('id')) { ?>

              <div class="d-flex">
                <div class="dropdown mr-1">
                  <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                    Offset
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary">Reference</button>
                  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>

              <?php } ?>
              

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- Menu -->


    <div class="menu_social">
      <div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
      <ul class="d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <!-- <style type="text/css">
      .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;

        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .navbar a:hover,
      .dropdown:hover .dropbtn {
        background-color: red;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {
        background-color: #ddd;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
    </style> -->