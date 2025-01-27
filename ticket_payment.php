<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/visitFormStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>

</head>
<body>
    <div class="container mt-5">
        <h2>Visit Form</h2>
        <form action="process_form.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="visit_date">Visit Date</label>
                <input type="date" class="form-control" id="visit_date" name="visit_date" required>
            </div>
            <div class="form-group">
                <label>Parking</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="parking" id="parking_yes" value="yes" required>
                    <label class="form-check-label" for="parking_yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="parking" id="parking_no" value="no" required>
                    <label class="form-check-label" for="parking_no">No</label>
                </div>
            </div>
            <div class="form-group">
                <label>Number of Tickets</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="local_below_18" name="ticket_types[]" value="local_below_18" onclick="toggleTicketInput('local_below_18')">
                    <label class="form-check-label" for="local_below_18">Local: Below 18</label>
                    <input type="number" class="form-control mt-2" id="local_below_18_tickets" name="local_below_18_tickets" placeholder="Number of Tickets" min="1" style="display:none;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="local_above_18" name="ticket_types[]" value="local_above_18" onclick="toggleTicketInput('local_above_18')">
                    <label class="form-check-label" for="local_above_18">Local: Above 18</label>
                    <input type="number" class="form-control mt-2" id="local_above_18_tickets" name="local_above_18_tickets" placeholder="Number of Tickets" min="1" style="display:none;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="foreigners" name="ticket_types[]" value="foreigners" onclick="toggleTicketInput('foreigners')">
                    <label class="form-check-label" for="foreigners">Foreigners</label>
                    <input type="number" class="form-control mt-2" id="foreigners_tickets" name="foreigners_tickets" placeholder="Number of Tickets" min="1" style="display:none;">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary" onclick="resetForm()">Cancel</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleTicketInput(ticketType) {
            var ticketInput = document.getElementById(ticketType + '_tickets');
            if (document.getElementById(ticketType).checked) {
                ticketInput.style.display = 'block';
            } else {
                ticketInput.style.display = 'none';
                ticketInput.value = '';  // Clear the input field when hidden
            }
        }

        function resetForm() {
            var ticketInputs = document.querySelectorAll('[id$="_tickets"]');
            ticketInputs.forEach(function(input) {
                input.style.display = 'none';
                input.value = '';
            });
        }
    </script>
</body>
</html>
