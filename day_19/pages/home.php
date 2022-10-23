<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <a href="#" class="navbar-brand logo">
                    <h1>APPLE</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-target="#myMenu" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myMenu">
                    <ul class="navbar-nav ms-auto">
                        <li>
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li>
                            <a href="" class="nav-link">About</a>
                        </li>
                        <li>
                            <a href="" class="nav-link">Visit</a>
                        </li>
                        <li>
                            <a href="" class="nav-link">News</a>
                        </li>
                        <li>
                            <a href="" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">service 1</a></li>
                                <li><a href="" class="dropdown-item">service 1</a></li>
                                <li><a href="" class="dropdown-item">service 1</a></li>
                                <li><a href="" class="dropdown-item">service 1</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="test-form">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <table align="center" border="1px">
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        <?php
                        $data = $student->totalStudent();
                        foreach ($data as $result) { ?>
                            <tr align="center">
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['mobile']; ?></td>
                            </tr>
                        <?php
                        } ?>
                    </table>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>