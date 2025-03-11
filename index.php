<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="stylenuevo.css">
    
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6C01i6uLrA9TneNEoa7RxnatzjcDSCmGIMXxSRIGAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body data-bs-theme="dark">
        <div class="row">
            <div class="col-4">
                <div class="card-body">
                    <h3 class="card-title">FORMULARIO DE CONTACTO</h3>
                    <form action="enviar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu nombre" required />
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Tu teléfono" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electrónico" required />
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required />
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea name="descripcion" id="descripcion" rows="5" class="form-control" placeholder="Escribe tu mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>


