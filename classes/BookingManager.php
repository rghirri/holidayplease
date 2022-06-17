<?PHP

class BookingManager
{

    
    /**
     * Get all the Data
     *
     * @param object $conn Connection to the database
     *
     * @return array An associative array of all the article records
     */
    public static function getAll($conn)
    {
        $sql = "SELECT *
                FROM organisation";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

     /**
     * Get all the articles
     *
     * @param object $conn Connection to the database
     *
     * @return array An associative array of all the article records
     */
    public static function getStatus($conn)
    {
        $sql = "SELECT * FROM bookings
                /*where organisation_id = 4*/";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
}

// SELECT customer_name, hotel_name
// FROM bookings
// join organisation
// where organisation_id = 4
//-----------------------------
// SELECT customer_name, hotel_name, status
// FROM bookings
// join organisation
// where id = 1
//where bookings.id = organisation.id
//--------------------------
// SELECT * FROM `organisation`
// join bookings
// on bookings.id = organisation.booking_id