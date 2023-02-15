<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">Rental Heart</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Romance</a></li>
                <li><a class="dropdown-item" href="#">Fiksi</a></li>
                <li><a class="dropdown-item" href="#">Horor</a></li>
                </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="#">Login</a>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content"> 
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://i.pinimg.com/564x/c6/8d/dd/c68dddb46342a3f3141dc7dd3177811f.jpg" class="d-block w-100" style="max-height: 400px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/ed/da/3d/edda3dec3532055e93a7b60b5fca2ed3.jpg" class="d-block w-100" style="max-height: 400px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/f3/d6/a8/f3d6a87e9113d5b78fe90d108d9a89c3.jpg" class="d-block w-100"  style="max-height: 400px"alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      <div class="container my-5">
        <div class="row">
            <div class="col-lg-4">
                <h3>MANDA</h3>
                <a href="" type="button" class="btn btn-outline-dark btn-sm mt-2">AYO SEGERA DAFTAR SEBELUM KEHABISAN!</a>
            </div>
            <div class="col-lg-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Ratione aperiam at modi perspiciatis unde officiis 
                    quidem magnam eius illum nisi, sint a vel architecto ipsum rerum nulla magni ut voluptates?</p>
            </div>
      </div>

<br>
      {{-- Card Books --}}
    <div class="container mt-3">
        <div class="row text-center">
            <h2>Buku Terpopuler</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/27/f0/01/27f001c344a2b42e33cfe0f327a6ea76.jpg" class="card-img-top" style="max-height: 300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">If I Never Met You</h5>
                    <p class="card-text">When her partner of over a decade suddenly ends things, Laurie is left reeling—not only because they work at the same law firm and she has to see him every day.</p>
                    <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/24/98/e9/2498e9c3c9723eaf6d7d158e337e5c83.jpg" class="card-img-top" style="max-height: 300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Off Limits Rule</h5>
                    <p class="card-text">I’m too broke to afford to live on my own. it's okay, because we’ve always been close and I think I’m going to have fun living with him again.</p>
                    <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/c2/e2/5b/c2e25bfde5ad7f8464dd328b2d8a9fd5.jpg" class="card-img-top" style="max-height: 300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">You Say It First</h5>
                    <p class="card-text">thy entire life set up perfectly: she and her best friend, Emily, plan to head to Cornell together in the fall, and she works at a voter registration call center in her Philadelphia suburb.</p>
                    <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="container mt-3">
        <div class="row text-center">
            <h2>Contact Admin</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="massege" class="form-label">Massege</label>
                    <textarea type="" class="form-control" id="massege"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


{{-- Footer --}}
    <footer class="bg-secondary text-white text-center mt-5" style="height: 30px">
            <p>Create by <a class="text-white fw-bold" style="text-decoration: none"> Yara </a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>