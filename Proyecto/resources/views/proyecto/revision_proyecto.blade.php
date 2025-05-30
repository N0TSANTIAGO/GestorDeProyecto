<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Revisión de Proyectos</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #f5f5f5;
      padding: 2rem;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 0.75rem;
      text-align: left;
    }

    th {
      background-color: #e2e8f0;
    }

    .btn {
      padding: 0.4rem 0.8rem;
      border: none;
      border-radius: 6px;
      font-size: 0.9rem;
      cursor: pointer;
    }

    .btn-aprobar {
      background-color: #22c55e;
      color: white;
    }

    .btn-rechazar {
      background-color: #ef4444;
      color: white;
    }

    .btn:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Revisión de Proyectos</h1>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Estudiante</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sistema de Gestión Escolar</td>
          <td>Juan Pérez</td>
          <td>En Revisión</td>
          <td>
            <button class="btn btn-aprobar">Aprobar</button>
            <button class="btn btn-rechazar">Rechazar</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>App de Seguimiento de Hábitos</td>
          <td>Ana Gómez</td>
          <td>En Revisión</td>
          <td>
            <button class="btn btn-aprobar">Aprobar</button>
            <button class="btn btn-rechazar">Rechazar</button>
          </td>
        </tr>
        <!-- Puedes duplicar más filas aquí -->
      </tbody>
    </table>
  </div>
</body>
</html>
