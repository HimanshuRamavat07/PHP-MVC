
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container my-5 mt-5">
    {% for user in data %}
    {% for i in user %}{% endfor %}
    <form method="post">
    <h3 class="text-center my-5 mt-5">Update Data</h3>
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ user['name'] }}">

        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control"  name="email" value="{{ user['email'] }}">
            
        </div>
        
        <div class="mb-3">
            <label class="form-label">Mobile no</label>
            <input type="number" class="form-control" name="number" value="{{ user['number'] }}">
        </div>

        <input type="submit" class="btn btn-primary" value="Update" >
    </form>
    {% endfor %}
</div>
</body>
</html>