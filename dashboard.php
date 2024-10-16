<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simple Dashboard</title>

  <link rel="stylesheet" href="./styles/bootstrap.css">
  <link rel="stylesheet" href="./styles/bootstrap-icons.css">
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <button class="navbar-toggler d-md-none collapsed m-2 b-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">simple administration</a>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <?php
        // <a class="nav-link px-3" href="#">logout</a>
        if ($_SESSION["email"] != "")
        {
          echo "uzivatel: " . $_SESSION["email"] . " <a class=\"nav-link px-3\" href = \"prihlas.php\">odhlaseni</a>";
        }
        else
        {
          echo " <a class=\"nav-link px-3\" href = \"prihlas.php\">prihlaseni</a>";
        }
        ?>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column" id="navList">

            <li class="nav-item">
                <a href="/d10d" class="nav-link <?= $_GET['page'] == 'dashboard' ? 'active' : '' ?>">
                <!-- <a href="?page=dashboard" class="nav-link <?= $_GET['page'] == 'dashboard' ? 'active' : '' ?>"> -->
                <!-- <span class="icon"> -->
                  <i class="bi bi-easel"></i>
                <!-- </span> -->
                Dashboard
              </a>
            </li>

            <li class="nav-item">
                <a href="/items" class="nav-link <?= $_GET['page'] == 'items' ? 'active' : '' ?>">
                <!-- <a href="?page=items" class="nav-link <?= $_GET['page'] == 'items' ? 'active' : '' ?>"> -->
                    <!-- <span class="icon"> -->
                <i class="bi bi-card-list"></i>
                <!-- </span> -->
                Items
              </a>
            </li>

            <li class="nav-item">
                <a href="/others" class="nav-link <?= $_GET['page'] == 'others' ? 'active' : '' ?>">
                <!-- <a href="?page=others" class="nav-link <?= $_GET['page'] == 'others' ? 'active' : '' ?>"> -->
                    <!-- <span class="icon"> -->
                  <i class="bi bi-box"></i>
                <!-- </span> -->
                Others
              </a>
            </li>

            <li class="nav-item">
                <a href="/users" class="nav-link <?= $_GET['page'] == 'users' ? 'active' : '' ?>">
                <!-- <a href="?page=users" class="nav-link <?= $_GET['page'] == 'users' ? 'active' : '' ?>"> -->
                <!-- <span class="icon"> -->
                <i class="bi bi-person-circle"></i>
                <!-- </span> -->
                Users
                </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3 pb-3">
      <?php

        
        
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$pageFile = 'pages/' . $page . '.php';

switch ($page)
{
    case 'dashboard':
        echo '<div id ="page-dashboard">
              <h1 class="pb-3 border-bottom">Dashboard!!!</h1>
              <p>dashboard dashboard dashboard</p>
              <p>dashboard dashboard</p>
              <p>dashboard</p>

              <h2>OPACITY!!!</h2>
              <div class="opacity-50 text-bg-info">
                <p>opacity-50</p>
              </div>
            
              <div class="op-33 text-bg-info">
                <p>op-33</p>
              </div>

              <div class="opacity-25 text-bg-info">
                <p>opacity-25</p>
              </div>

              </div>';
        break;
    
    case 'items':
        echo '<div id ="page-items">
              <h1 class="pb-3 border-bottom"">Items</h1>
              <p>items</p>
              <p>items items</p>
              <p>items items items</p>

              <h2>OPACITY!!!</h2>
              <div class="opacity-50 text-bg-warning">
                <p>opacity-50</p>
              </div>
            
              <div class="op-33 text-bg-warning">
                <p>op-33</p>
              </div>

              <div class="opacity-25 text-bg-warning">
                <p>opacity-25</p>
              </div>

              </div>';
        break;
        
    case 'others':
        echo '<div id ="page-others">
              <h1 class="pb-3 border-bottom">Others</h1>
              <p>others others others</p>
              <p>others others</p>
              <p>others</p>

              <h2>OPACITY!!!</h2>
              <div class="opacity-50 text-bg-danger">
                <p>opacity-50</p>
              </div>
            
              <div class="op-33 text-bg-danger">
                <p>op-33</p>
              </div>

              <div class="opacity-25 text-bg-danger">
                <p>opacity-25</p>
              </div>

              </div>';
        break;
    
    case 'users':
        echo '<div id ="page-users">
              <h1 class="pb-3 border-bottom">Users</h1>
              <p>users</p>
              <p>users users</p>
              <p>users users users</p>

              <h2>OPACITY!!!</h2>
              <div class="opacity-50 text-bg-success">
                <p>opacity-50</p>
              </div>
            
              <div class="op-33 text-bg-success">
                <p>op-33</p>
              </div>

              <div class="opacity-25 text-bg-success">
                <p>opacity-25</p>
              </div>

              </div>';
        break;

    default:
        echo '<div id ="page-404">
              <h1 class="pb-3 border-bottom">404: not found</h1>
              <p>not found not found not found</p>
              <p>not found not found</p>
              <p>not found</p>

              <h2>OPACITY!!!</h2>
              <div class="opacity-50 text-bg-dark">
                <p>opacity-50</p>
              </div>
            
              <div class="op-33 text-bg-dark">
                <p>op-33</p>
              </div>

              <div class="opacity-25 text-bg-dark">
                <p>opacity-25</p>
              </div>

              </div>';
}
?>



        <!-- <div id ="page-dashboard" class="page-content">
          <h1 class="pb-3 border-bottom">Dashboard!!!</h1>
        </div>

        <div id ="page-items" class="page-content">
          <h1>Items</h1>
        </div>

        <div id ="page-others" class="page-content">
          <h1>Others</h1>
        </div>

        <div id ="page-users" class="page-content">
          <h1>Users</h1>
        </div>
        
        <div id ="page-404" class="page-content">
          <h1>404</h1>
        </div> -->






        <!-- <section class="mt-5">
          <h2>OPACITY!!!</h2>
          <div class="opacity-50 text-bg-info">
            <p>opacity-50</p>
          </div>
        
          <div class="op-33 text-bg-info">
            <p>op-33</p>
          </div>

          <div class="opacity-25 text-bg-info">
            <p>opacity-25</p>
          </div>
        </section> -->
        

        <section class="mt-5">
          <h2>Table example</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr class = "page-row">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr class = "page-row">
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr class = "page-row">
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>

          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-ite">
                <button class="page-link" id="prev" onclick="changePage(-1)" tabindex="-1" aria-disabled="false">Previous</button>
              </li>

              <li class="page-item" id="page-1"><button class="page-link" onclick="changePage(1)">1</button></li>
              <li class="page-item" id="page-2"><button class="page-link" onclick="changePage(2)">2</button></li>
              <li class="page-item" id="page-3"><button class="page-link" onclick="changePage(3)">3</button></li>

              <li class="page-item">
                <button class="page-link" id="next" onclick="changePage(currentPage + 1)">Next</button>
              </li>
            </ul>
          </nav>
          
          
        
        </section>


        <section class="mt-5">
          <h2>Simple form example</h2>

          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </section>


        <section class="mt-5">
          <h2>Notifications examples</h2>
          <div class="alert alert-success" role="alert">
            A simple success alert—check it out!
          </div>
          <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
          </div>
          <div class="alert alert-info" role="alert">
            A simple info alert—check it out!
          </div>
        </section>


        <section class="mt-5">
          <h2>Badge examples</h2>
          <span class="badge text-bg-primary">Primary</span>
          <span class="badge text-bg-secondary">Secondary</span>
          <span class="badge text-bg-success">Success</span>
          <span class="badge text-bg-danger">Danger</span>
          <span class="badge text-bg-warning">Warning</span>
          <span class="badge text-bg-info">Info</span>
          <span class="badge text-bg-light">Light</span>
          <span class="badge text-bg-dark">Dark</span>
        </section>


        <section class="mt-5">
          <h2>Button examples</h2>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-light">Light</button>
          <button type="button" class="btn btn-dark">Dark</button>
        </section>


        <section class="mt-5">
          <h2>Others</h2>
          <button type="button" class="btn btn-primary position-relative">
            Inbox
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              99+
              <span class="visually-hidden">unread messages</span>
            </span>
          </button>
        </section>
      </main>
    </div>
  </div>

  
  <script src="./scripts/scripts.js"></script>
</body>

</html>
