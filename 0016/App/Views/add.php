<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    
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
.btn-green:hover {
    background-color: #388E3C; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header">
            <h2>Add New User</h2>
        </div>
        
        <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <button type="submit" class="btn btn-green">Add User</button> 
            <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'index.php'); ?>" 
                       class="btn btn-custom mt-3">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>