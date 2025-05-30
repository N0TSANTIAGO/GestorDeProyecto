<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proyecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
            padding: 2rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-top: 1rem;
            font-weight: 600;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            margin-top: 2rem;
            background: #22c55e;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background: #16a34a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Proyecto</h1>

        <form action="#" method="POST">
            <label for="titulo">Título del Proyecto</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccione un tipo</option>
                <option value="Investigación">Investigación</option>
                <option value="Desarrollo">Desarrollo</option>
                <option value="Aplicación">Aplicación</option>
            </select>

            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="en revisión">En Revisión</option>
                <option value="aprobado">Aprobado</option>
                <option value="rechazado">Rechazado</option>
            </select>

            <label for="estudiante_id">Estudiante</label>
            <select id="estudiante_id" name="estudiante_id" required>
                <option value="1">Juan Pérez</option>
                <option value="2">Ana Gómez</option>
            </select>

            <label for="docente_id">Docente</label>
            <select id="docente_id" name="docente_id" required>
                <option value="1">Dra. Martínez</option>
                <option value="2">Ing. Ramírez</option>
            </select>

            <label for="semillero_id">Semillero</label>
            <select id="semillero_id" name="semillero_id" required>
                <option value="1">Semillero A</option>
                <option value="2">Semillero B</option>
            </select>

            <label for="area_id">Área</label>
            <select id="area_id" name="area_id" required>
                <option value="1">Área Técnica</option>
                <option value="2">Área Científica</option>
            </select>

            <label for="linea_investigacion_id">Línea de Investigación</label>
            <select id="linea_investigacion_id" name="linea_investigacion_id" required>
                <option value="1">Inteligencia Artificial</option>
                <option value="2">Desarrollo Web</option>
            </select>

            <button type="submit">Guardar Proyecto</button>
        </form>
    </div>
</body>
</html>
