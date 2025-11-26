```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nova Mensagem de Contato - Ignite</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: RGBA(0, 0, 0, 0)">

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" style="padding: 20px 0 30px 0;">
            <table border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; background-color: #1a1a1a; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">

                <tr>
                    <td align="center" style="padding: 40px 0 20px 0;">
                        <img src="https://i.imgur.com/Z8u3Are.png" alt="Logo Ignite" width="300" style="display: block;">
                    </td>
                </tr>

                <tr>
                    <td style="padding: 30px 40px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">

                            <tr>
                                <td style="color: #ffffff; font-size: 22px; font-weight: bold;">
                                    Nova mensagem recebida pelo site
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 20px 0; color: #cccccc; font-size: 16px; line-height: 1.6;">
                                    Um visitante enviou uma nova mensagem através do formulário de contato. Seguem as informações registradas:
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #262626; padding: 15px; border-radius: 6px; color: #ffffff; font-size: 15px; line-height: 1.6;">
                                    <strong>Nome:</strong> {{ $nome }}<br>
                                    <strong>Email:</strong> {{ $email }}<br>
                                    <strong>Telefone:</strong> {{ $telefone }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 20px 0 5px 0; color: #ffffff; font-size: 16px; font-weight: bold;">
                                    Mensagem enviada
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #262626; padding: 15px; border-radius: 6px; color: #cccccc; font-size: 15px; line-height: 1.6; white-space: pre-line;">
                                    {{ $mensagem }}
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td height="10" style="background-color: #ff6600;"></td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
```
