<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
        }
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="container d-flex align-items-center min-vh-100">
        <div class="form-container">
            <h2 class="text-center text-primary mb-4">Enter Your Details</h2>
            <form action="{{ route('details.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone:</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Age:</label>
                    <input type="number" name="age" class="form-control" placeholder="Enter your age">
                </div>

                <div class="mb-3">
                    <label class="form-label">Designation:</label>
                    <input type="text" name="designation" class="form-control" placeholder="Enter your designation">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address:</label>
                    <textarea name="address" class="form-control" placeholder="Enter your address" rows="3"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Save Details</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
