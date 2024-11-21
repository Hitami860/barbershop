document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        selectable: true,
        eventOverlap: false,
        allDayText: "Jour / Heure",
        height: 650,
        slotMinTime: '08:00:00',  // L'heure minimale affichée (ici 8h00)
      slotMaxTime: '17:30:00',  // L'heure maximale affichée (ici 20h00)


        slotDuration: '00:30:00',
        slotLabelInterval: '00:30',
        slotLabelFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false
            
        },

    });
    calendar.render();
})