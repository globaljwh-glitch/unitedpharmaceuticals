<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
        }

        .header {
            color: #0d6efd;
            font-size: 22px;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #666;
        }

        .badge {
            background: #0d6efd;
            color: #fff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="card">
        <p class="header">Thank You, {{ $contact->f_name }} 👋</p>

        <p>
            We have successfully received your
            <span class="badge">
                {{ $contact->type == 1 ? 'Sample Request' : 'Contact Request' }}
            </span>.
        </p>

        <p>
            Our team will review your request and get back to you shortly.
        </p>

        <p>
            <strong>Email:</strong> {{ $contact->email }} <br>
            <strong>Phone:</strong> {{ $contact->phone }}
        </p>

        <p>
            Thank you for choosing <strong>United Pharma</strong>.
        </p>

        <div class="footer">
            Regards,<br>
            United Pharma Team
        </div>
    </div>
</body>

</html>