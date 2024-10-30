<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    background-color: #FFEBEE; 
}
.form-container {
    background-color: #FFCDD2; 
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
.form-label {
    color: #D32F2F; 
}
.btn-custom {
    background-color: #FF7043; 
    color: white;
    border: none;
}
.btn-custom:hover {
    background-color: #FF5722; 
}
input.form-control {
    background-color: #FFF8E1; 
    border: 1px solid #FFB74D; 
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Edit User</h2>
            <form action="index.php?action=update&id=<?php echo $data['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
                </div>
                <button type="submit" class="btn btn-custom w-100">Update User</button>
                <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'index.php'); ?>" 
                       class="btn btn-custom mt-3">Batal</a>
            </form>
        </div>
    </div>
    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        }
    </script>
</body>
</html>