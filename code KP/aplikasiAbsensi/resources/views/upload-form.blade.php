<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel</title>
</head>
<body>
    <h1>Upload File Excel</h1>
    <form action="/upload-excel" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
