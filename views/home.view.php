<!DOCTYPE html>
<html lang="en">

<head>
  <title>Socio</title>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
</head>

<style>
  body {
    background-color: #eeeeee;
  }

  .h7 {
    font-size: 0.8rem;
  }

  .gedf-wrapper {
    margin-top: 0.97rem;
  }

  @media (min-width: 992px) {
    .gedf-main {
      padding-left: 4rem;
      padding-right: 4rem;
    }

    .gedf-card {
      margin-bottom: 2.77rem;
    }
  }

  /**Reset Bootstrap*/
  .dropdown-toggle::after {
    content: none;
    display: none;
  }
</style>

<body>

  <nav class="navbar navbar-light bg-white">
    <a href="#"
      class="navbar-brand">Bootsbook</a>
  </nav>


  <div class="container-fluid gedf-wrapper">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="h5"><?= $user-> first_name ?></div>
            <div class="h7 text-muted">Fullname : <?= $user->first_name . " " . $user->last_name ?></div>
            <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java,
              Node.js,
              etc.
            </div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="h6 text-muted">Followers</div>
              <div class="h5">10.23B</div>
            </li>
            <li class="list-group-item">
              <div class="h6 text-muted">Following</div>
              <div class="h5">0</div>
            </li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 gedf-main">

        <!--- \\\\\\\Post-->
        <div class="card gedf-card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs"
              id="myTab"
              role="tablist">
              <li class="nav-item">
                <a class="nav-link active"
                  id="posts-tab"
                  data-toggle="tab"
                  href="#posts"
                  role="tab"
                  aria-controls="posts"
                  aria-selected="true">Make
                  a publication</a>
              </li>
              <!-- <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li> -->
            </ul>
          </div>
          <form method="POST" 
          enctype="multipart/form-data">
          <div class="card-body">
            <div class="tab-content"
              id="myTabContent">
              <div class="tab-pane fade show active"
                id="posts"
                role="tabpanel"
                aria-labelledby="posts-tab">
                <div class="form-group">
                  <input type="file"
                  name="image"
                  placeholder="Upload an image"
                  accept="image/jpeg,image/png" />
                  </div>
                <div class="form-group">
                  <label class="sr-only"
                    for="message">post</label>
                  <textarea name="post" class="form-control"
                    id="message"
                    rows="3"
                    placeholder="What are you thinking?"></textarea>
                </div>

              </div>
              <div class="tab-pane fade"
                id="images"
                role="tabpanel"
                aria-labelledby="images-tab">
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file"
                      class="custom-file-input"
                      id="customFile">
                    <label class="custom-file-label"
                      for="customFile">Upload image</label>
                  </div>
                </div>
                <div class="py-4"></div>
              </div>
            </div>
            <div class="btn-toolbar justify-content-between">
              <div class="btn-group">
                <button type="submit"
                  class="btn btn-primary">share</button>
              </div>
              <div class="btn-group">
                <button id="btnGroupDrop1"
                  type="button"
                  class="btn btn-link dropdown-toggle"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">
                  <i class="fa fa-globe"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item"
                    href="#"><i class="fa fa-globe"></i> Public</a>
                  <a class="dropdown-item"
                    href="#"><i class="fa fa-users"></i> Friends</a>
                  <a class="dropdown-item"
                    href="#"><i class="fa fa-user"></i> Just me</a>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
        <!-- Post /////-->
        
        <?php
        foreach ($posts as $post){
          $imageTag = $post->image !=null ?"<img class='img-fluid' src='$post->image' />" : "";
          echo '<div class="card gedf-card">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                  <img class="rounded-circle"
                    width="45"
                    src="https://picsum.photos/50/50"
                    alt="">
                </div>
                <div class="ml-2">
                  <div class="h5 m-0">' . $post->first_name . '</div>
                  <div class="h7 text-muted">'. $post->first_name . " " . $post->last_name . '</div>
                </div>
              </div>
              <div>
                <div class="dropdown">
                  <button class="btn btn-link dropdown-toggle"
                    type="button"
                    id="gedf-drop1"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fa fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="gedf-drop1">
                    <div class="h6 dropdown-header">Configuration</div>
                    <a class="dropdown-item"
                      href="#">Save</a>
                    <a class="dropdown-item"
                      href="#">Hide</a>
                    <a class="dropdown-item"
                      href="#">Report</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="card-body">
            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
            <a class="card-link"
              href="#">
              <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
            </a>
              ' . $imageTag . '
            <p class="card-text">
              ' . $post->text .'
            </p>
          </div>
          <div class="card-footer">
            <a href="#"
              class="card-link"><i class="fa fa-gittip"></i> Like</a>
            <a href="#"
              class="card-link"><i class="fa fa-comment"></i> Comment</a>
            <a href="#"
              class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
          </div>
        </div>';
        }
        ?>
        <!--- \\\\\\\Post-->
        
        
        <!-- Post /////-->

    </div>
  </div>
  <script></script>
</body>

</html>