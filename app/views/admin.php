<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonies">Testimonies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">FAQs</a>
                    </li> -->
                </ul>
                <form action="?url=logout" method="POST" class="d-flex">
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <!-- Services Section -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                <h2 class="h5 mb-0">Services</h2>
                <a href="?url=admin/services/create" class="btn btn-success btn-sm">Create Service</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate with services data -->
                        <?php $index = 1; ?>
                        <?php foreach ($services as $service): ?>
                        <tr>
                            <td><?= $index++ ;?></td>
                            <td><?= htmlspecialchars($service['name']); ?></td>
                            <td><?= htmlspecialchars($service['price']); ?></td>
                            <td><?= htmlspecialchars($service['description']); ?></td>
                            <td><img src="<?= $service['image']; ?>" style="max-width:480px" /></td>
                            <td>
                                <a href="?url=admin/services/edit&id=<?= $service['id'] ;?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="?url=admin/services/delete&id=<?= $service['id'] ;?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Testimonies Section -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                <h2 class="h5 mb-0">Testimonies</h2>
                <a href="?url=admin/testimonies/create" class="btn btn-success btn-sm">Create Testimony</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Author</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate with testimonies data -->
                        <?php $index = 1; ?>
                        <?php foreach ($testimonies as $testimony): ?>
                        <tr>
                            <td><?= $index++; ?></td>
                            <td><?= htmlspecialchars($testimony['author']); ?></td>
                            <td><?= htmlspecialchars($testimony['message']); ?></td>
                            <td>
                                <a href="?url=admin/testimonies/edit&id=<?= $testimony['id'] ;?>"  class="btn btn-sm btn-warning">Edit</a>
                                <a href="?url=admin/testimonies/delete&id=<?= $testimony['id'] ;?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQs Section -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                <h2 class="h5 mb-0">FAQs</h2>
                <a href="?url=admin/faqs/create" class="btn btn-success btn-sm">Create FAQ</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate with FAQs data -->
                        <?php $index = 1; ?>
                        <?php foreach ($faqs as $faq): ?>
                        <tr>
                            <td><?= $index++; ?></td>
                            <td><?= htmlspecialchars($faq['question']); ?></td>
                            <td><?= htmlspecialchars($faq['answer']); ?></td>
                            <td>
                                <a href="?url=admin/faqs/edit&id=<?= $faq['id'] ;?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="?url=admin/faqs/delete&id=<?= $faq['id'] ;?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>   
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Order Section -->
        <div class="card mb-4">
            <div class="card-header bg-secondary text-white">
                <h2 class="h5 mb-0">Orders</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Owner Name</th>
                            <th>Pet Name</th>
                            <th>Religion</th>
                            <th>Birth Date</th>
                            <th>Weight</th>
                            <th>Death Date</th>
                            <th>Death Reason</th>
                            <th>Float/Take</th>
                            <th>Ash Pot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate with orders data -->
                        <?php $index = 1; ?>
                        <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= $index++; ?></td>
                            <td><?= htmlspecialchars($order['owner_name']); ?></td>
                            <td><?= htmlspecialchars($order['pet_name']); ?></td>
                            <td><?= htmlspecialchars($order['religion']); ?></td>
                            <td><?= htmlspecialchars($order['birth_date']); ?></td>
                            <td><?= htmlspecialchars($order['weight']); ?></td>
                            <td><?= htmlspecialchars($order['death_date']); ?></td>
                            <td><?= htmlspecialchars($order['death_reason']); ?></td>
                            <td><?= htmlspecialchars($order['float_take']); ?></td>
                            <td><?= htmlspecialchars($order['ash_pot']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>