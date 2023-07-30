<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Schedule</title>
    <link rel="stylesheet" href="../../assects/css/admin/viewSchedule.css">
</head>
<body>

        <div class="header">
            <div class="nav">
                <a href="dashboard.php">Dashboard</a>
                <a href="#">Search</a>
                <a href="#">Home</a>
            </div>

        </div>

    <div class="container">
        <div class="schedule-table">
            <?php 
                require_once '../../controllers/admin/scheduleProcessVal.php';
                 foreach ($trainSchedules as $data): ?>
                    <div class="schedule-row">
                        <div class="train-name"><?php echo $data['trainName']; ?></div>
                        <div class="from-station"><?php echo $data['fromStation']; ?></div>
                        <div class="start-time"><?php echo $data['startTime']; ?></div>
                        <div class="to-station"><?php echo $data['toStation']; ?></div>
                        <div class="arrival-time"><?php echo $data['arrivalTime']; ?></div>
                        <div class="date-of-journey"><?php echo $data['dateOfJourney']; ?></div>
                        <div class="edit"><a href='editSchedule.php?edit=<?php echo $data['trainName']; ?>'>Edit</a></div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
