<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Career Application</title>
</head>

<body style="margin:0; padding:0; background:#f4f6f9; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f9; padding:40px 0;">
        <tr>
            <td align="center">

                <!-- Main Card -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#1d2b4f; padding:20px; text-align:center;">
                            <img src="{{ asset('images/logo.png') }}" alt="United Pharmaceuticals" height="50"
                                style="margin-bottom:10px;">
                            <h2 style="color:#ffffff; margin:0;">New Career Application</h2>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:30px;">

                            <p style="font-size:15px; color:#555;">
                                A new candidate has applied for a position. Below are the details:
                            </p>

                            <table width="100%" cellpadding="8" cellspacing="0"
                                style="border-collapse:collapse; font-size:14px;">

                                <tr style="background:#f8f9fb;">
                                    <td width="30%"><strong>Name</strong></td>
                                    <td>{{ $data->name }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>{{ $data->email }}</td>
                                </tr>

                                <tr style="background:#f8f9fb;">
                                    <td><strong>Phone</strong></td>
                                    <td>{{ $data->phone }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Subject</strong></td>
                                    <td>{{ $data->subject }}</td>
                                </tr>

                            </table>

                            <h4 style="margin-top:25px; color:#1d2b4f;">Resume</h4>

                            <div
                                style="background:#f8f9fb; padding:15px; border-radius:6px; font-size:13px; line-height:1.6; color:#333;">
                                {!! nl2br(e($data->resume)) !!}
                            </div>

                            <p style="margin-top:25px; font-size:13px; color:#777;">
                                This application was submitted via the Career form on your website.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f3f6; padding:15px; text-align:center; font-size:12px; color:#777;">
                            © {{ date('Y') }} United Pharmaceuticals. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>