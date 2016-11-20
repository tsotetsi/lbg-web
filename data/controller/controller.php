<?php
	include_once 'data/model/Flat.php';
	include_once 'app/db.php';

	/**
	* 
	*/
	class Controller
	{
		public $model;
		
		function __construct()
		{
			$this->model = new Flat(null, null);
		}

		/**
		* 	Fetches all Flats table and returns results as array
		* 	@return   
		*	[432]=>
		*	  array(2) {
		*	    ["flat_number"]=>string(4) "638A"
		*	    ["flat_type"]=>string(3) "TIT"
		*/
		public function getAllFlats()
		{
			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {

				$result = pg_query($conn, "SELECT * FROM flats");
				$arr = pg_fetch_all($result);
				
			} catch (Exception $ex) {
				echo "Error fetching flats";
			}

			return $arr;
		}

		/**
		* 	Get all roomm per floor
		* 	@return   array of array of flats & type
		*	  ["floor_six"]=>
		*	  array(77) {
		*	    [0]=>
		*	    array(2) {
		*	      ["flat_number"]=>
		*	      string(4) "601A"
		*	      ["flat_type"]=>
		*	      string(3) "TID"
		*	    }
		*	    [1]=>
		*	    array(2) {
		*	      ["flat_number"]=>
		*	      string(4) "601B"
		*	      ["flat_type"]=>
		*	      string(3) "TID"
		*	    }
		*/
		public function gedRoomsPerFloor()
		{
			$flats = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try{

				$flats['floor_one'] = pg_fetch_all(pg_query($conn, "SELECT flat_number FROM flats WHERE flat_number LIKE '1%' EXCEPT (SELECT flat_number FROM approvals) ORDER BY flat_number ASC"));
				$flats['floor_two'] = pg_fetch_all(pg_query($conn, "SELECT flat_number FROM flats WHERE flat_number LIKE '2%' EXCEPT (SELECT flat_number FROM approvals) ORDER BY flat_number ASC"));
				$flats['floor_three'] = pg_fetch_all(pg_query($conn, "SELECT flat_number FROM flats WHERE flat_number LIKE '3%' EXCEPT (SELECT flat_number FROM approvals) ORDER BY flat_number ASC"));
				$flats['floor_four'] = pg_fetch_all(pg_query($conn, "SELECT flat_number  FROM flats WHERE flat_number LIKE '4%' EXCEPT (SELECT flat_number FROM approvals) ORDER BY flat_number ASC"));
				$flats['floor_five'] = pg_fetch_all(pg_query($conn, "SELECT flat_number  FROM flats WHERE flat_number LIKE '5%' EXCEPT (SELECT flat_number FROM approvals) ORDER BY flat_number ASC"));
				$flats['floor_six'] = pg_fetch_all(pg_query($conn, "SELECT flat_number  FROM flats WHERE flat_number LIKE '6%' EXCEPT (SELECT flat_number FROM approvals) ORDER BY flat_number ASC"));		

			} catch (Exception $ex) {
				echo "Error fetching flats.";
			}
			return $flats;
		}

		public function getRoomStats()
		{
			$stats = array();
			$db = new DB();
			$pdo = $db->connect();
			$conn = pg_connect($db->connString());

			try{
				$stats['TID'] = pg_fetch_all(pg_query($conn, "SELECT COUNT(*) FROM flats WHERE flat_type LIKE 'TID'"));
				$stats['DID'] = pg_fetch_all(pg_query($conn, "SELECT COUNT(*) FROM flats WHERE flat_type LIKE 'DID'"));
				$stats['TIT'] = pg_fetch_all(pg_query($conn, "SELECT COUNT(*) FROM flats WHERE flat_type LIKE 'TIT'"));
				$stats['VIV'] = pg_fetch_all(pg_query($conn, "SELECT COUNT(*) FROM flats WHERE flat_type LIKE 'VIV'"));
				$stats['BCA'] = pg_fetch_all(pg_query($conn, "SELECT COUNT(*) FROM flats WHERE flat_type LIKE 'BCA'"));
				$stats['BCB'] = pg_fetch_all(pg_query($conn, "SELECT COUNT(*) FROM flats WHERE flat_type LIKE 'BCB'"));								

			}catch (Exception $ex) {
				echo "Error fetching stats.";
			}
			return $stats;
		}


		/**
		*	Get SMS Credits
		*/
		public function getSmsCredits()
		{
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, 'http://bulksms.2way.co.za/eapi/user/get_credits/1/1.1?username=thapelotsotetsi&password=thapelo407');
			$result = explode('|', curl_exec($curl)) ;
		    curl_close($curl);
			return ;
		}

		/**	
		*	Make room application.
		*/
		public function makeApplication($flat_number ,$student_number, $name, $surname, $mobile_number, $gender)
		{
			$db = new DB();
			$pdo = $db->connect();

			try {
				$date = date('Y-m-d H:i');

				$query = "INSERT INTO applications (flat_number, student_number, name, surname, mobile_number ,gender, date_of_application) VALUES ('$flat_number', '$student_number', '$name', '$surname' ,'$mobile_number' , '$gender', '$date');";
			
        $stmt = $pdo->prepare($query);
        $stmt->execute();

			} catch (Exception $ex) {
				echo "Error inserting application";
				echo $ex->getMessage();
			}
		}

		/**	
		*	Get specific Flat Application(s)
		*/
		public function getApplications($flat_number)
		{
			$applicants = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {
				$flat = substr($flat_number, 0, 3);
				$query = "SELECT * FROM applications WHERE flat_number LIKE '$flat%'";
				$applicants['applicants'] = pg_fetch_all(pg_query($conn, $query));

			} catch (Exception $ex) {
				echo "Error getting room applications";
			}
			return $applicants;
		}

		/**	
		*	Check room availibility
		*/
		public function checkRoomAvailability($flat_number)
		{
			$room = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {
				$query = "SELECT * FROM approvals WHERE flat_number LIKE '$flat_number'";
				$room['room'] = pg_fetch_all(pg_query($conn, $query));

			} catch (Exception $ex) {
				echo "Error getting arrovals";
			}

				if ($room['room'] != null) {
					echo "<p> Room not available!</p>";
					echo "<a href='floors.php'>Go back to Rooms</a>";
					die();
				}
			return $room;
		}


		/**	
		*	Get all Student's Applications.
		*/
		public function gedAllApplications()
		{
			$applicants = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {
				//$flat = substr($flat_number, 0, 3);
				$query = "SELECT * FROM applications ORDER BY flat_number, date_of_application";
				$applications['applications'] = pg_fetch_all(pg_query($conn, $query));

			} catch (Exception $ex) {
				echo "Error getting all applications";
			}
			return $applications;
		}

		/**	
		*	Handle Application
		*/
		public function handleApplication($action, $id, $student_number, $name, $surname, $mobile_number, $flat_number, $gender)
		{

			$db = new DB();
			$pdo = $db->connect();
			$conn = pg_pconnect($db->connString());

			if($action == "approve"){
				try {
					$query = "SELECT * FROM approvals WHERE flat_number='$flat_number'";
					$approved['approved'] = pg_fetch_all(pg_query($conn, $query));

					if($approved['approved'] != null){
						echo "<p>You have already approved someone else for this flat. <p/>";
						echo "<p>" .$approved['approved']. "</p>";
						echo "<a href='./admin.php'>Back to Applications Page </a>";
						die();
					}
					
				} catch (Exception $e) {
					echo "Error getting approved flats";
				}
				
				try{
					$date = date('Y-m-d H:i');
					$query = "INSERT INTO approvals(student_number, name, surname, mobile_number, flat_number, gender, approval_date) VALUES ('$student_number', '$name', '$surname', '$mobile_number' , '$flat_number', '$gender', '$date');";
					$stmt = $pdo->prepare($query);
					$stmt->execute();

					try {
						$query = "DELETE FROM applications WHERE id='$id' AND student_number='$student_number'";
						$stmt = $pdo->prepare($query);
						$stmt->execute();
						
					} catch (Exception $e) {
						echo "Error deleting in applications table";
						echo $ex->getMessage();		
					}
				} catch (Exception $ex) {
				  	echo "Error inserting approvals";
					echo $ex->getMessage();	
				}

				$seven_bit_msg = "Dear ".$name.", your application for room/flat ".$flat_number." has been approved. LBG Management.";
				$msisdn = $mobile_number;
				include_once 'app/sms.php';
				echo "Approval was succesfull.";
			}

			if($action == "decline"){
				try{
					$date = date('Y-m-d H:i:s');
					$query = "INSERT INTO declines(student_number, name, surname, mobile_number, flat_number, gender, decline_date) VALUES ('$student_number', '$name', '$surname' , '$mobile_number', '$flat_number', '$gender', '$date');";
					$stmt = $pdo->prepare($query);
					$stmt->execute();

					try {
						$query = "DELETE FROM applications WHERE id='$id' AND student_number='$student_number'";
						$stmt = $pdo->prepare($query);
						$stmt->execute();
						
					} catch (Exception $e) {
						echo "Error deleting in applications table";
						echo $ex->getMessage();		
					}
				} catch (Exception $ex) {
				  	echo "Error inserting declines";
					echo $ex->getMessage();	
				}
				$msisdn = $mobile_number;
				$seven_bit_msg = "Dear ".$name.", your application for flat/room ".$flat_number." was declined. Please make another application. LBG Management.";
				include_once 'app/sms.php';

				echo "Decline was succesfull.";
			}

			if($action == "revoke"){

					try {
						$query = "DELETE FROM approvals WHERE id='$id' AND student_number='$student_number' AND flat_number='$flat_number'";
						$stmt = $pdo->prepare($query);
						$stmt->execute();
						
					} catch (Exception $e) {
						echo "Error deleting an application";
						echo $ex->getMessage();		
					}

				echo $flat_number. " for ".$student_number." revoked succesfully.";
			}
		}

		/**	
		*	Get all Blocked Students.
		*/
		public function gedAllBlocked()
		{

			$blocked = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {

				$query = "SELECT * FROM blocked";
				$blocked['blocked'] = pg_fetch_all(pg_query($conn, $query));

			} catch (Exception $ex) {
				echo "Error getting all blocked";
			}

			return $blocked;
		}

		/**	
		*	Block Students.
		*/
		public function blockStudent($student_number)
		{

			$db = new DB();
			$pdo = $db->connect();

			try {
					$date = date('Y-m-d H:i:s');
					$query = "INSERT INTO blocked(student_number, blocked_date) VALUES ('$student_number' , '$date');";
					$stmt = $pdo->prepare($query);
					$stmt->execute();

			} catch (Exception $ex) {
				echo "Error blocking student\n";
				echo $ex;
			}
			echo $student_number." was blocked from using the system\n";

			return $student_number;
		}

		/**	
		*	Get all Student's Approvals.
		*/
		public function gedAllApprovals()
		{
			$approvals = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {
				#$flat = substr($flat_number, 0, 3);
				$query = "SELECT * FROM approvals";
				$approvals['approvals'] = pg_fetch_all(pg_query($conn, $query));

			} catch (Exception $ex) {
				echo "Error getting all approvals";
			}
			return $approvals;
		}

		/**	
		*	Get all Student's Declines.
		*/
		public function gedAllDeclines()
		{
			$declines = array();

			$db = new DB();
			$pdo = $db->connect();

			$conn = pg_pconnect($db->connString());

			try {

				$query = "SELECT * FROM declines";
				$declines['declines'] = pg_fetch_all(pg_query($conn, $query));

			} catch (Exception $ex) {
				echo "Error getting all declines";
			}
			return $declines;
		}

		/**	
		*	Check if a student has not made an application.
		*/
		public function checkForApplications($student_number)
		{
			$applications = array();

			$db = new DB();
			$pdo = $db->connect();

			try {

				$query = "SELECT * FROM applications WHERE student_number='$student_number'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        if ($data = $stmt->fetch()) {
					echo "<p> You have already made an application. Please wait for feedback </p>";
					echo "<p> before making another application. </p>";
					echo "<a href='./'>Press here to Exit</a>";
					exit();
        }

			} catch (Exception $ex) {
				echo "Error getting all declines";
			}
			return $applications;
		}

		/**	
		*	Check if a student is not blocked.
		*/
		public function checkBlockedStudent($student_number)
		{

			$db = new DB();
			$pdo = $db->connect();

			try {

				$query = "SELECT * FROM blocked WHERE student_number='$student_number'";
			
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        if ($data = $stmt->fetch()) {
					echo "<p> You are blocked from using the system </p>";
					echo "<a href='./'>Press here to Exit</a>";
					exit();
        }

			} catch (Exception $ex) {
				echo "Error getting all blocked";
			}
			return "Check Blocked";
		}

		/**	
		*	Revoke blocked student number.
		*/
		public function revokeBlock($student_number)
		{

			$db = new DB();
			$pdo = $db->connect();

			try {

				$query = "DELETE FROM blocked WHERE student_number='$student_number'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

			} catch (Exception $ex) {
				echo "Error deleting from blocked";
				echo $ex;
			}
			echo $student_number." was revoked succesfully.";
			return "Revoke Block";
		}
	}
?>