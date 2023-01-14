<!-- Free to use, HTML email template designed & built by FullSphere. Learn more about us at www.fullsphere.co.uk -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Newsletter</title>

</head>
<body
    style="margin: 0; padding-top: 10px; padding-bottom: 10px; padding-left: 0; padding-right: 0; -webkit-text-size-adjust: 100%;background-color: #f2f4f6; color: #000000">
<table cellspacing="15">
    <tr>
        <td>
            <table border="1" bordercolor="#c7c7c7" cellspacing="5" cellpadding="10" cellpadding="5" width="100%">
                <tbody>
                <tr>
                    <th colspan="2">
                        <h1 style="font-family: 'Helvetica', Arial, sans-serif; color: #000000; text-align: left;">
                            Данные
                            от {{$mailData['organization']}}</h1>
                    </th>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    Организация:
                </span>
                    </td>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    {{$mailData['organization']}}
                </span>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    Телефон:
                </span>
                    </td>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    {{$mailData['phone']}}
                </span>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    ИНН:
                </span>
                    </td>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    {{$mailData['inn']}}
                </span>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    Почта:
                </span>
                    </td>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    {{$mailData['email']}}
                </span>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    Сайт:
                </span>
                    </td>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    {{$mailData['site']}}
                </span>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    Тип договора:
                </span>
                    </td>
                    <td style="vertical-align: middle;">
                <span
                    style="font-size: 16px; line-height: 20px; font-family: 'Helvetica', Arial, sans-serif; font-weight: 400; text-decoration: none; color: #000000;">
                    {{$mailData['docs']}}
                </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
</body>

</html>
