<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
</head>

<body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
        <tr>
            <td align="center">

                <table width="500" style="background:#fff;border-radius:10px;padding:30px;text-align:center;">
                    <tr>
                        <td>
                            <img src="{{ asset('images/logo-upi.png') }}" height="50">
                            <h2 style="color:#0d6efd;">Verify Your Email</h2>
                            <p>Your One-Time Password (OTP) is:</p>

                            <div style="font-size:32px;font-weight:bold;letter-spacing:8px;color:#0d6efd;">
                                {{ $otp }}
                            </div>

                            <p style="color:#666;margin-top:15px;">
                                This OTP is valid for 10 minutes.
                            </p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>

</html>