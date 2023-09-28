<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <div class="container">
        <h1>Form Example</h1>
        <form action="{{ route('submitForm') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="0" required>
            </div>
            <div class="form-group">
                <label for="image">Upload Image (PNG/JPG/JPEG, max 2MB):</label>
                <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" required>
            </div>
            <div class="form-group">
                <label for="doubleValue">Pick Any Number From (2.50 to 99.99):</label>
                <input type="number" id="doubleValue" name="doubleValue" step="0.01" min="2.50" max="99.99" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        
            @if(session('success'))
                <div class="alert alert-success">
                     {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
</body>
</html>
