<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de eventos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fullcalendar.io/releases/latest/fullcalendar.min.css">
  <script src="https://fullcalendar.io/releases/latest/fullcalendar.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Calendario de eventos</h1>
    <div id="calendar"></div>
    <form action="/eventos" method="post">
      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
      </div>
      <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
      </div>
      <div class="form-group">
        <label for="hora">Hora</label>
        <input type="time" class="form-control" id="hora" name="hora" required>
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
  <script>
    // Obtiene el calendario
    const calendar = new FullCalendar.Calendar(document.getElementById('calendar'));

    // Inicializa el calendario
    calendar.render();

    // Agrega eventos al calendario
    const eventos = [
      {
        id: 1,
        title: 'Evento 1',
        start: '2023-12-01T10:00:00',
        end: '2023-12-01T12:00:00',
        description: 'Descripción del evento 1'
      },
      {
        id: 2,
        title: 'Evento 2',
        start: '2023-12-02T14:00:00',
        end: '2023-12-02T16:00:00',
        description: 'Descripción del evento 2'
      }
    ];

    calendar.addEvents(eventos);

    // Agrega un evento al calendario cuando se envía el formulario
    document.querySelector('#form').addEventListener('submit', (e) => {
      e.preventDefault();

      // Obtiene los datos del formulario
      const titulo = document.querySelector('#titulo').value;
      const fecha = document.querySelector('#fecha').value;
      const hora = document.querySelector('#hora').value;
      const descripcion = document.querySelector('#descripcion').value;

      // Crea un nuevo evento
      const evento = {
        id: Date.now(),
        title: titulo,
        start: fecha + 'T' + hora,
        end: fecha + 'T' + (hora + 2),
        description: descripcion
      };

      // Agrega el evento al calendario
      calendar.addEvent(evento);
    });
  </script>
</body>
</html>
