<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="assets/css/style.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- menu-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark py-3 fixed-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#form" class="nav-link">form</a>
                    </li>
                    <li class="nav-item">
                        <a href="#map" class="nav-link">map</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-dark text-light pt-5 text-center py-lg-5">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <h2> <span class="text-warning">Welcome</span> to this Page</h2>
                    <p class="lead text-lead m-4">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <p>
                        <a href="#" class="btn btn-primary btn-lg">Call Action</a>
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 mx-auto d-none d-sm-block">
                    <img calss="img-fluid w-50" src="https://static.vecteezy.com/system/resources/thumbnails/011/153/368/small/3d-website-developer-working-on-laptop-illustration-png.png" alt="">
                </div>
                
            </div>
        </div>
    </section>
    <!-- Sign Up-->
    <section class="bg-primary text-light pt-3">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <h4 class="md-3 mb-md-0"> Sign Up For Newsletter</h4>
                <div class="input-group mb-3 news-input">
                    <input type="text" class="form-control" placeholder="email@gmail.com" aria-label="email@gmail.com" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="button" id="button-addon2">Sign Up</button>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
     <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md rounded-3">
                    <div class="card bg-dark text-light">
                        <div class="h1 mb-3">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Service 1
                        </h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, modi?
                        </p>
                        <p >
                            <a href="#" class="btn btn-primary">View More</a>
                        </p>
                    </div>
                </div>

                <div class="col-md rounded-3">
                    <div class="card bg-secondary text-light">
                        <div class="h1 mb-3">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Service 2
                        </h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, modi?
                        </p>
                        <p >
                            <a href="#" class="btn btn-primary">View More</a>
                        </p>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="h1 mb-3">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3 class="card-title mb-3">
                            Service 3
                        </h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, modi?
                        </p>
                        <p >
                            <a href="#" class="btn btn-primary">View More</a>
                        </p>
                    </div>
                </div>
              
            </div>
        </div>
    </section>

     <!-- message section-->
    <section class="p-5 bg-light" id="message">
        <div class="row align-items-center justify-content-between">
            <div class="col-md text-center">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/011/153/368/small/3d-website-developer-working-on-laptop-illustration-png.png" alt="" class="img-fluid">
            </div>
            <div class="col-md">
                <h2>About Us </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit voluptatum praesentium tempora ab similique quae maiores dolores, hic corporis error itaque. Quidem perspiciatis autem explicabo doloremque soluta facilis velit corrupti! Voluptatibus assumenda ipsum iusto corporis voluptate sapiente consequuntur culpa, harum, totam aspernatur pariatur fuga aut cum ex nesciunt itaque nam?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores maxime ratione eos quae. Cum quam, dolor voluptatibus suscipit saepe similique quidem fugiat rem placeat aperiam? Nesciunt nulla animi, quos eius enim quae ullam unde eveniet temporibus culpa provident quis similique corrupti excepturi nisi molestias itaque laboriosam, reprehenderit dignissimos, sunt laborum.
                </p>
                <a href="#" class="btn btn-secondary mt-3"> <i class="bi bi-chevron-right"></i>Read More</a>
            </div>
        </div>
    </section>
 
    <!-- message section-->
    <section class="p-5 bg-dark text-light" id="message">
    <div class="row align-items-center justify-content-between">
        <div class="col-md">
            <h2>Short Portfolio </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit voluptatum praesentium tempora ab similique quae maiores dolores, hic corporis error itaque. Quidem perspiciatis autem explicabo doloremque soluta facilis velit corrupti! Voluptatibus assumenda ipsum iusto corporis voluptate sapiente consequuntur culpa, harum, totam aspernatur pariatur fuga aut cum ex nesciunt itaque nam?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores maxime ratione eos quae. Cum quam, dolor voluptatibus suscipit saepe similique quidem fugiat rem placeat aperiam? Nesciunt nulla animi, quos eius enim quae ullam unde eveniet temporibus culpa provident quis similique corrupti excepturi nisi molestias itaque laboriosam, reprehenderit dignissimos, sunt laborum.
            </p>
            <a href="#" class="btn btn-primary mt-3"> <i class="bi bi-chevron-right"></i>  Read More</a>
        </div>
        <div class="col-md text-center">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/011/153/368/small/3d-website-developer-working-on-laptop-illustration-png.png" alt="" class="img-fluid">
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="p-5" id="team">
    <h3 class="mb-4 text-center">Frequent Asked Question</h3>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Accordion Item #4
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
        </div>
      </div>
</section>

<section class="p-5 bg-light" id="team">
    <container>
        <h2 class="text-center">Our Team</h2>
        <p class="text-center text-lead mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="" class="img-fluid rounded-circle mb-3 profile-image">
                        <h3 class="card-titel mb-3"> Full Name</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, repellat?
                        </p>
                        <a href="" class=""><i class="bi bi-facebook text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-twitter text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-linkedin text-dark"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt=""class="img-fluid rounded-circle mb-3 profile-image">
                        <h3 class="card-titel mb-3"> Full Name</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, repellat?
                        </p>
                        <a href="" class=""><i class="bi bi-facebook text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-twitter text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-linkedin text-dark"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="" class="img-fluid rounded-circle mb-3 profile-image">
                        <h3 class="card-titel mb-3"> Full Name</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, repellat?
                        </p>
                        <a href="" class=""><i class="bi bi-facebook text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-twitter text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-linkedin text-dark"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="profile-image" class="img-fluid rounded-circle mb-3 profile-image" >
                        <h3 class="card-title mb-3">Full Name</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, repellat?
                        </p>
                        <a href="" class=""><i class="bi bi-facebook text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-twitter text-dark"></i></a>
                        <a href="" class=""><i class="bi bi-linkedin text-dark"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </container>
</section>
<!-- contact-->
<section class="p-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-md">
                <h2 class="text-center mb-4">Conact Us</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Contact :</span> MR Xyz
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Mobile :</span> 0923245667
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">emaile :</span> contact@gm.com
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Address :</span> Lorem ipsum dolor sit amet.
                    </li>
                </ul>
            </div>

            
            <div class="col-md">
                <h2 class="text-center mb-4">Contact Form</h2>
                <?php if (isset($_GET['status'])): ?>
                    <div class="container mt-3">
                        <?php if ($_GET['status'] == 'success'): ?>
                            <div class="alert alert-success">
                                The record was added successfully!
                            </div>
                        <?php elseif ($_GET['status'] == 'error'): ?>
                            <div class="alert alert-danger">
                                There was an error adding the record. Please try again.
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <form action="save.php" method="post">
                    <div class="row">                  
                        <div class="col-md-6 col-lg-6 col-sm-12 mb-3">
                            <label for="" class="form-lable"></label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your full name">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 mb-3">
                            <label for="" class="form-lable"></label>
                            <input type="text" class="form-control" name = "email" id="email" placeholder="Enter your full name">
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12mb-3">
                            <label for="" class="form-lable"></label>
                            <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" name="save" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="p-3 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copy &copy; 2024 statment</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-3"><i class="bi bi-arrow-up-circle h1"></i></a>
    </div>
</footer>
</body>
</html>