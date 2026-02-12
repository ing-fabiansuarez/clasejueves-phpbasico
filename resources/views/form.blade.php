<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: 500;
            font-size: 14px;
        }

        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        .mensaje-exito {
            display: none;
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        .mensaje-exito.mostrar {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contáctanos</h1>
        <p class="subtitle">Completa el formulario y te responderemos pronto</p>

        <form action="/store" method="GET" >
            <div class="form-group">
                <label for="email">Correo electrónico *</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="tu@email.com"
                    required
                >
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje *</label>
                <textarea 
                    id="mensaje" 
                    name="mensaje" 
                    placeholder="Escribe tu mensaje aquí..."
                    required
                ></textarea>
            </div>

            <button type="submit">Enviar mensaje</button>
        </form>
    </div>

   
</body>
</html>