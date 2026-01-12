<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f3f5;
            padding: 20px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
        }

        h2 {
            color: #dc3545;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .type {
            background: #dc3545;
            color: #fff;
            padding: 5px 12px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>📥 New {{ $contact->type == 1 ? 'Sample' : 'Contact' }} Request</h2>

        <p class="type">
            {{ $contact->type == 1 ? 'Sample Request' : 'Contact Request' }}
        </p>

        <table>
            <tr>
                <td><strong>Name</strong></td>
                <td>{{ $contact->f_name }} {{ $contact->l_name }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <td><strong>Phone</strong></td>
                <td>{{ $contact->phone }}</td>
            </tr>
            <tr>
                <td><strong>Company</strong></td>
                <td>{{ $contact->company_name }}</td>
            </tr>
            <tr>
                <td><strong>City</strong></td>
                <td>{{ $contact->city }}</td>
            </tr>
            <tr>
                <td><strong>Country</strong></td>
                <td>{{ $contact->country }}</td>
            </tr>
            <tr>
                <td><strong>Message</strong></td>
                <td>{{ $contact->message }}</td>
            </tr>
        </table>

        <p style="margin-top:15px;">
            Please login to admin panel for further action.
        </p>
    </div>
</body>

</html>