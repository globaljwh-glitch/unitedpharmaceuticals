<!DOCTYPE html>
<html>

<body style="background:#f4f6f9; font-family:Arial; padding:40px;">

    <table width="600" align="center" style="background:#ffffff; border-radius:8px; padding:30px;">
        <tr>
            <td align="center">
                <img src="{{ asset('images/logo.png') }}" height="50">
                <h2 style="color:#1d2b4f;">Thank You for Applying</h2>
            </td>
        </tr>

        <tr>
            <td style="font-size:14px; color:#555;">
                <p>Dear {{ $data->name }},</p>

                <p>
                    Thank you for your interest in joining <strong>United Pharmaceuticals</strong>.
                    We have successfully received your application.
                </p>

                <p>
                    Our HR team will review your profile and contact you if your skills match our requirements.
                </p>

                <p style="margin-top:20px;">
                    Best Regards,<br>
                    <strong>HR Team</strong><br>
                    United Pharmaceuticals
                </p>
            </td>
        </tr>
    </table>

</body>

</html>