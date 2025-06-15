<?php
// curl -gki "http://localhost:8000/21_xss_json_dump_js.php?id=01&data=henlo"

header('Content-Type: text/html');
$id = $_GET['id'] ?? '00';
$data = $_GET['data'] ?? 'data';

// Security ^.^
if (strlen($id) != 2) {die("invalid id len");}
if (preg_match("*[\"'<>]*", $data)) {die("invalid: data");}
?>

<!DOCTYPE html>
<html><body>
<script>
var id = <?php echo $id; ?>;
var data = "<?php echo $data; ?>";
console.log(data1);
console.log(data);
</script>
</body></html> 