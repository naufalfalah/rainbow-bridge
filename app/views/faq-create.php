<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Faq</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Create Faq</h1>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="?url=admin/faqs/create" method="POST" class="shadow p-4 rounded bg-light">
            <div class="mb-3">
                <label for="question" class="form-label">Question:</label>
                <input type="text" id="question" name="question" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="answer" class="form-label">Answer:</label>
                <input type="text" id="answer" name="answer" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Create Faq</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>