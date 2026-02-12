<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contáctanos</title>
  <style>
    :root {
      --primary: #4f46e5;
      --primary-dark: #4338ca;
      --bg: #f4f6fb;
      --card: #ffffff;
      --text: #1f2937;
      --muted: #6b7280;
      --border: #e5e7eb;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, sans-serif; }

    body {
      background: linear-gradient(135deg, #ff0080, #7928ca, #2afadf, #00c6ff);
      background-size: 400% 400%;
      animation: gradientMove 12s ease infinite;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--text);
    }

    .card {
      background: var(--card);
      padding: 2rem;
      border-radius: 18px;
      width: min(420px, 92%);
      box-shadow: 0 20px 40px rgba(0,0,0,0.08);
      animation: fadeIn .6s ease;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      font-weight: 700;
    }

    label {
      display: block;
      font-size: .9rem;
      margin-bottom: .4rem;
      color: var(--muted);
    }

    input, textarea {
      width: 100%;
      padding: .75rem .9rem;
      border-radius: 10px;
      border: 1px solid var(--border);
      outline: none;
      transition: .2s;
      font-size: .95rem;
      margin-bottom: 1rem;
    }

    input:focus, textarea:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(79,70,229,.15);
    }

    textarea {
      min-height: 120px;
      resize: vertical;
    }

    button {
      width: 100%;
      padding: .9rem;
      border-radius: 12px;
      border: none;
      background: var(--primary);
      color: white;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: .25s;
    }

    button:hover { background: var(--primary-dark); transform: translateY(-1px); }
    button:active { transform: translateY(1px); }

    .footer {
      margin-top: 1rem;
      text-align: center;
      font-size: .8rem;
      color: var(--muted);
    }
  </style>
</head>
<body>
  <form class="card" onsubmit="event.preventDefault(); alert('Mensaje enviado. Prometemos leerlo antes que tus correos de la universidad.');">
    <h2>Contáctanos</h2>

    <label for="email">Correo electrónico</label>
    <input type="email" id="email" name="email" placeholder="tu@email.com" required />

    <label for="mensaje">Mensaje</label>
    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>

    <button type="submit">Contáctanos</button>

    <div class="footer">Responderemos lo más pronto posible</div>
  </form>
</body>
</html>
