<?php

use App\db\Connector;

/**
 * Querying from database
 */

$conn = new Connector;
$salesman = $conn->queryToArray('SELECT * from `salesman`');
// $conn->closeConnection();
// 

/**
 * Rendering label that shows if connection is success or not
 */
require_once("./views/partials/headers.php");
require_once("./views/partials/mysql-" . ($conn->success ? "" : "not-") . "successfull.php");

/**
 * Rendering input field and table if connection is successfull
 */
if($conn->success) {
  print('<div class="flex flex-col md:flex-row">');
  require_once("./views/pages/Home/sqlResponse/column-name-generator.php");
  require_once("./views/pages/Home/sqlResponse/salesman-input.php");
  require_once("./views/pages/Home/sqlResponse/salesman-table.php");
  print('</div>');
}

$conn->closeConnection();

?>

</body>
</html>