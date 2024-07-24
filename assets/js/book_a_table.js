document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('reservation-form');
    const dateInput = document.getElementById('date');
    const timeInput = document.getElementById('time');

    // Set min date to today
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);

    // Set min and max time
    timeInput.setAttribute('min', '11:00');
    timeInput.setAttribute('max', '22:00');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const people = document.getElementById('people').value;
        const date = dateInput.value;
        const time = timeInput.value;
        const tableFormat = document.querySelector('input[name="table-format"]:checked').value;
        const message = document.getElementById('message').value;

        // Here you would typically send this data to a server
        // For this example, we'll just log it to the console and show an alert
        console.log({name, email, phone, people, date, time, tableFormat, message});

        alert('Thank you for your reservation! We will contact you shortly to confirm.');
        form.reset();
    });
});