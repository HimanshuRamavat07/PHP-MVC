{% extends "Base.php" %}
{% block title %}Home{% endblock %}
{% block body %}
<table class=" container table table-hover my-5 ">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th colspan="2" class="text-center">Action</th>
    </tr>
    {% for i in data %}
    <tr>
        <td>{{ i['name'] }}</td>
        <td>{{ i['email'] }}</td>
        <td>{{ i['number'] }}</td>
        <td class="text-center"><a href="update?id={{i['id']}}" class="text-decoration-none "><i class="fas fa-pencil-square edit"></i></a></td>
        <td class="text-center"><a href="javascript:delete_data({{i['id']}})" class="text-decoration-none "><i class="fas fa-trash delete"></i></a></td>
    </tr>
    {% endfor %}
{% endblock %}