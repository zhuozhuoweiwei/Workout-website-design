<?php
$pagetitle = "Add Chest Workout";
include_once "header.php";
?>
<body>
<a href="displaychestworkout.php">Back</a>
<br/><br/>
<fieldset>
    <legend>New Arm Workout</legend>
<form action="addchestworkout.php" method="post" name="addchestworkout">
    <table width="30%" border="0">
        <tr>
            <td>Workout Name</td>
            <td><input type="text" name="workoutname"></td>
        </tr>
        <tr>
            <td>Workout Reps</td>
            <td><input type="text" name="reps"></td>
        </tr>
        <tr>
            <td>Workout Sets</td>
            <td><input type="text" name="sets"></td>
        </tr>
        <tr>
            <td>Calories</td>
            <td><input type="text" name="calories"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
</fieldset>
</body>
</html>