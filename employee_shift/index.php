<?php
// Define arrays to store employee names, shifts, and work hours
$employees = array(
    "mohit" => array("shift" => "", "work_hours" => 0),
    "rohit" => array("shift" => "", "work_hours" => 0),
    "aditya" => array("shift" => "", "work_hours" => 0),
);

// Define shifts with timings
$shifts = array(
    "Morning" => array("start" => "08:00", "end" => "12:00"),
    "Afternoon" => array("start" => "12:00", "end" => "16:00"),
    "Evening" => array("start" => "16:00", "end" => "20:00"),
);

// Function to assign a shift to an employee
function assignShift($employee, $shift) {
    global $employees, $shifts;
    
    // Check if the employee exists
    if (!array_key_exists($employee, $employees)) {
        return "Employee does not exist.";
    }
    
    // Check if the employee already has a shift assigned
    if ($employees[$employee]["shift"] != "") {
        return "Employee already has a shift assigned.";
    }
    
    // Check if the shift is available
    if (!array_key_exists($shift, $shifts)) {
        return "Shift is not available.";
    }
    
    // Assign the shift to the employee
    $employees[$employee]["shift"] = $shift;
    
    // Calculate the work hours for the shift
    $start_time = strtotime($shifts[$shift]["start"]);
    $end_time = strtotime($shifts[$shift]["end"]);
    $work_hours = ($end_time - $start_time) / 3600;
    $employees[$employee]["work_hours"] = $work_hours;
    
    return "Shift assigned successfully to $employee.";
}

// Function to check for overlap based on shift timings
function checkOverlap($employee1, $employee2) {
    global $employees, $shifts;
    
    // Check if both employees exist
    if (!array_key_exists($employee1, $employees) || !array_key_exists($employee2, $employees)) {
        return "One or both employees do not exist.";
    }
    
    // Get shift details
    $shift1 = $employees[$employee1]["shift"];
    $shift2 = $employees[$employee2]["shift"];
    
    // If either employee has no shift, there's no overlap
    if ($shift1 == "" || $shift2 == "") {
        return "No overlap as one or both employees have no shift.";
    }

    // Get the start and end times of both shifts
    $start1 = strtotime($shifts[$shift1]["start"]);
    $end1 = strtotime($shifts[$shift1]["end"]);
    $start2 = strtotime($shifts[$shift2]["start"]);
    $end2 = strtotime($shifts[$shift2]["end"]);
    
    // Check if the shifts overlap in time
    if (($start1 < $end2 && $end1 > $start2) || ($start2 < $end1 && $end2 > $start1)) {
        return "Overlap shift detected between $employee1 and $employee2.";
    }
    
    return "No overlap shift detected between $employee1 and $employee2.";
}

// Assign shifts to employees
echo assignShift("mohit", "Morning") . "\n";
echo "<br>";
echo assignShift("rohit", "Afternoon") . "\n";
echo "<br>";
echo assignShift("aditya", "Morning") . "\n"; // This should detect an overlap shift
echo "<br>";

// Check for overlap shifts
echo checkOverlap("mohit", "rohit") . "\n";
echo "<br>";
echo checkOverlap("mohit", "aditya") . "\n";
echo "<br>";

// Print the employee shifts and work hours
foreach ($employees as $employee => $details) {
    echo "$employee - Shift: {$details['shift']}, Work Hours: {$details['work_hours']}\n <br>";
}

?>
