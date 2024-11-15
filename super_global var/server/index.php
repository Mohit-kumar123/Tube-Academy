<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <h1>Server & Request Details</h1>

    <table>
        <thead>
            <tr>
                <th>Detail</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Server Software</td>
                <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
            </tr>
            <tr>
                <td>Server Name</td>
                <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
            </tr>
            <tr>
                <td>Server Protocol</td>
                <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
            </tr>
            <tr>
                <td>Request Method</td>
                <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
            </tr>
            <tr>
                <td>Remote Address (Client IP)</td>
                <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
            </tr>
            <tr>
                <td>Remote Port</td>
                <td><?php echo $_SERVER['REMOTE_PORT']; ?></td>
            </tr>
            <tr>
                <td>Document Root</td>
                <td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td>
            </tr>
            <tr>
                <td>Script Filename</td>
                <td><?php echo $_SERVER['SCRIPT_FILENAME']; ?></td>
            </tr>
            <tr>
                <td>Script Name</td>
                <td><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
            </tr>
            <tr>
                <td>Current Page URI</td>
                <td><?php echo $_SERVER['REQUEST_URI']; ?></td>
            </tr>
            <tr>
                <td>Query String</td>
                <td><?php echo $_SERVER['QUERY_STRING']; ?></td>
            </tr>
            <tr>
                <td>HTTP Host</td>
                <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
            </tr>
            <tr>
                <td>User Agent</td>
                <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
            </tr>
            <tr>
                <td>HTTPS</td>
                <td><?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'Yes' : 'No'; ?></td>
            </tr>
            <tr>
                <td>Server Port</td>
                <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
            </tr>
            <tr>
                <td>Request Time</td>
                <td><?php echo date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
