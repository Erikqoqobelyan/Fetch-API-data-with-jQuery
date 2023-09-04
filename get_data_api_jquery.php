<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Data</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    *{
      margin: 0;
      padding: 0;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th {
        background-color: #f2f2f2;
        text-align: left;
        padding: 10px;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:nth-child(odd) {
        background-color: #ffffff;
    }
    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    tr:hover {
        background-color: #c6c6c6;
    }
</style>

</head>
<body>
    <table id="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: 'https://jsonplaceholder.typicode.com/users',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    let tableBody = $('#data-table tbody');
                    tableBody.empty();
                    data.forEach(function (item) {
                        let row = $('<tr>');
                        row.append($('<td>').text(item.id));
                        row.append($('<td>').text(item.name));
                        row.append($('<td>').text(item.username));
                        row.append($('<td>').text(item.email));
                        row.append($('<td>').text(item.phone));
                        row.append($('<td>').text(item.website));
                        tableBody.append(row);
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        });
    </script>
</body>
</html>
