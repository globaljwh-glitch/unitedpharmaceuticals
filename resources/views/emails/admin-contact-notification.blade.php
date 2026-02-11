<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Contact Request</title>
</head>

<body style="margin:0;padding:0;background:#eaf1ff;font-family:Arial, Helvetica, sans-serif;">

    @php
        $solutionMap = [
            1 => 'Preclinical Services',
            2 => 'Clinical Services',
            3 => 'Manufacturing and Analytical Services',
            4 => 'Bioanalytical Services',
            5 => 'Research Support Services',
            6 => 'Development Programs',
        ];
    @endphp

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
        <tr>
            <td align="center">

                <!-- Main Card -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:#ffffff;padding:25px;">
                            <img src="http://unitedpharmaceuticals.com/images/logo-upi.png"
                                alt="United Pharmaceuticals" height="50" style="display:block;margin:auto;">
                            <div style="color:#0d6efd;font-size:14px;margin-top:8px;font-weight:bold;">
                                New Request Notification
                            </div>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px;">

                            <h2 style="margin-top:0;color:#333;">
                                {{ $contact->type == 1 ? 'Sample Request' : 'Contact Request' }}
                            </h2>

                            <p style="color:#666;font-size:14px;">
                                You have received a new inquiry from the website.
                            </p>

                            <!-- Solution Highlight -->
                            <div style="margin:15px 0;padding:12px;
                                background:#eaf1ff;
                                border-left:4px solid #0d6efd;
                                font-weight:bold;
                                color:#0d6efd;">
                                Solution Selected:
                                {{ $solutionMap[$contact->solutions] ?? 'N/A' }}
                            </div>

                            <!-- Details Table -->
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="margin-top:10px;border:1px solid #e5e7eb;border-radius:6px;font-size:14px;">

                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>Name</strong></td>
                                    <td style="padding:10px;">{{ $contact->f_name }} {{ $contact->l_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>Email</strong></td>
                                    <td style="padding:10px;">{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>Phone</strong></td>
                                    <td style="padding:10px;">{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>Company</strong></td>
                                    <td style="padding:10px;">{{ $contact->company_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>City</strong></td>
                                    <td style="padding:10px;">{{ $contact->city }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>Country</strong></td>
                                    <td style="padding:10px;">{{ $contact->country }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px;background:#f9fafb;"><strong>Message</strong></td>
                                    <td style="padding:10px;">{{ $contact->message }}</td>
                                </tr>
                            </table>

                            <!-- CTA -->
                            <!-- <div style="margin-top:25px;text-align:center;">
                                <a href="https://unitedpharmaceuticals.com/admin" style="display:inline-block;background:#0d6efd;color:#fff;
                                text-decoration:none;padding:12px 30px;border-radius:6px;font-size:14px;">
                                    View in Admin Panel
                                </a>
                            </div> -->

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f9fafb;padding:15px;text-align:center;font-size:12px;color:#888;">
                            © {{ date('Y') }} United Pharmaceuticals Inc.<br>
                            This is an automated system email.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>