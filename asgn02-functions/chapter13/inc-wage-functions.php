<?php
		function getWage($hourlyWage, $hoursWorked)
		{
			if ($hoursWorked <= 40)
				return round(($hourlyWage * $hoursWorked), 2);
			else
				return round((($hourlyWage * 40) +
						($hourlyWage * 1.5 * ($hoursWorked - 40))), 2);
		}

    function getStartingWage() {
      $baseWage = 8.00;
      $percentIncrease = 0.10; // 10% increase
      $startingWage = $baseWage + ($baseWage * $percentIncrease);
      return number_format($startingWage, 2);
  }
		function getBonus($wage)
		{
			if ($wage > 200)
				$bonus = 75.00;
			else
				$bonus = 50.00;
			return $bonus;
		}

		function getNewHourlyWage ($hourlyWage, $percentIncrease)
		{
      $newHourlyWage = $hourlyWage + $hourlyWage * $percentIncrease;
      return number_format($newHourlyWage, 2);
		}

		function setMinimumWage ($hourlyWage)
		{
			if ($hourlyWage < 8.00)
      return number_format(8.00, 2);
			else
      return number_format($hourlyWage, 2);
		}

    function getOvertimeHours($hoursWorked)
{
    if ($hoursWorked > 40) {
        return $hoursWorked - 40;
    } else {
        return 0;
    }
}
?>
