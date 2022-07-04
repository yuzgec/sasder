<html>
<head>
    <style>
        .banner-color {
            background-color: #fff;
        }
        .title-color {
            color: #000;
        }
        .button-color {
            background-color: #000;
        }
    </style>
</head>
<body>
<div style="background-color:#fff;padding:0;margin:0 auto;font-weight:200;width:100%!important">
    <table align="center" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
        <tbody>
        <tr>
            <td align="center">
                <center style="width:100%">
                    <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;max-width:512px;font-weight:200;width:inherit;font-family:Helvetica,Arial,sans-serif" width="512">
                        <tbody>

                        <tr>
                            <td align="left">
                                <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                    <tbody>
                                    <tr>
                                        <td width="100%">
                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                <tbody>
                                                <tr>
                                                    <td align="center" bgcolor="#fff" style="padding:20px 48px;color:#ffffff" class="banner-color">
                                                        <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" width="100%">
                                                                    <img src="https://sasder.org/frontend/img/sasderlogo.png" width="250px">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" style="padding:20px 0 10px 0">
                                                        <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                            <tbody>
                                                            <tr>
                                                                <td align="center" width="100%" style="padding: 0 15px;text-align: justi.fy;color: rgb(76, 76, 76);font-size: 12px;line-height: 18px;">
                                                                    <h3 style="font-weight: 600; padding: 0px; margin: 0px; font-size: 16px; line-height: 24px; text-align: center;" class="title-color">Sasder {{ $New->title }}  Formu</h3>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Adı Soyadı : </b>{{ $New->name }}</p>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Telefon Numarası: </b>{{ $New->phone }}</p>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Email : </b>{{ $New->email }}</p>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Firma Adı : </b>{{ $New->company }}</p>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Konu: </b>{{ $New->subject }}</p>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Mesajınız: </b>{{ $New->message }}</p>
                                                                    <br>
                                                                    <p style="margin: 20px 0 30px 0;font-size: 15px;text-align: left;"><b>Gönderim Tarihi : </b>{{ $New->created_at }}</p>

                                                                    <div style="font-weight: 200; text-align: center; margin: 25px;">
                                                                        <a href="tel:{{ $New->phone }}" style="padding:0.6em 1em;border-radius:600px;color:#ffffff;font-size:14px;text-decoration:none;font-weight:bold" class="button-color">HEMEN ARA</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <table bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" style="padding:0 24px;color:#999999;font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                    <tbody>
                                    <tr>
                                        <td align="center" width="100%">
                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                <tbody>
                                                <tr>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" width="100%">
                                            <table border="0" cellspacing="0" cellpadding="0" style="font-weight:200;font-family:Helvetica,Arial,sans-serif" width="100%">
                                                <tbody>
                                                <tr>
                                                    <td align="center" style="padding:0 0 8px 0" width="100%"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </center>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
