<?php

/**
 * The following code will be published to a production server.
 *
 * It's a simple script that allows a customer to view their booking status.
 *
 * Find as many errors or flaws as you can. You can edit the code inline, and/or
 * leave a comment where you think you've found a flaw.
 */

declare(strict_types=1);

ini_set('display_errors', 'on');
error_reporting(E_ALL);

class BookingManager
{
 //public string $db;

	public function __construct()
	{
    // Start edited corrected error
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    // End edited corrected error
  
     $this->db = new PDO("mysql:host=$servername;dbname=hp1066", $username, $password);
     echo "Connected successfully";
 }

	/**
	 * Get the status of a booking. The primary key for the `bookings` table is (booking_id, organisation_id).
	 *
	 * @return string|null
	 */
    public function getStatus(/*$bookingId, $organisationId*/): ?string
    {
       $sth = $db->query("SELECT status FROM organisation WHERE organisation_id = 2" /*. $organisationId, PDO::FETCH_BOTH*/);

       var_dump($sth);

      //  foreach ($sth as $row)
      //   if ($row['booking_id'] == $bookingId) return $row['status'];

      //  return false;
    }
    
 }

 $manager = new BookingManager();

 //$booking = $manager->getStatus($_REQUEST['bookingId'], $_REQUEST['organisationId']);

 $booking = $manager->getStatus();


// Print the status.
 //echo 'Status: ' . $booking->status;