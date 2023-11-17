document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'], // Troca dos dias da semana
        events: [
            {
                title: 'teste',
                start: '2023-08-25',
                end: '2023-08-25',
                color: 'blue',
            },
        ]
    });
    calendar.render();
});