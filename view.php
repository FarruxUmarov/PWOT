<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWOD FINAL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center mb-4">Workday Tracker</h2>

    <form method="POST">
        <div class="form-group">
            <label for="arrived_at">Arrived At:</label>
            <input type="datetime-local" id="arrived_at" name="arrived_at" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="leaved_at">Left At:</label>
            <input type="datetime-local" id="leaved_at" name="leaved_at" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

    <hr>

    <h4 class="text-center mt-4">Workday List</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Arrived At</th>
            <th>Left At</th>
            <th>Required Work Off</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($workDay->getWorkDayList() as $day): ?>
            <tr>
                <td><?php echo htmlspecialchars(date('Y-m-d H:i', strtotime($day['arrived_at']))); ?></td>
                <td><?php echo htmlspecialchars(date('Y-m-d H:i', strtotime($day['leaved_at']))); ?></td>
                <td><?php echo htmlspecialchars($workDay->getHumanReadableDiff((int)$day['required_work_off'])); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center mt-4">
        <h5>Total Work Off Time: <?php echo htmlspecialchars($workDay->getTotalWorkOffTime()); ?></h5>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
