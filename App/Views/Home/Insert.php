{% extends "Base.php" %}

{% block title %}
Add
{% endblock %}

{% block body %}
<div class="container my-5 mt-5">
    <form method="post">
        <h3 class="text-center">Insert data</h3>
        <div class="mb-3">
            <label for="exampleInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInput1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        
        <div class="mb-3">
            <label for="exampleInput2" class="form-label">Mobile no</label>
            <input type="number" class="form-control" id="exampleInput2" name="number">
        </div>
        <input type="submit" class="btn btn-primary" value="submit">
    </form> 
</div>

{% endblock %}