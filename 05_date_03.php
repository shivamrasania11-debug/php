<?php

date_default_timezone_set("asia/kolkata");

$current_date="18/08/2025";

$system_date=date("d/m/Y");

if($current_date==$system_date)
{
echo "date is match";
}
else
{
echo "date is not match";
}
