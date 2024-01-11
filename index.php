<?php include "_header.php"; ?>

<h1>Rizz Nur Saidy</h1>
<form action = "index.php" method = "post">
    <label for="year">Year:</label>
    <input type="number" name="year" id="year" value="<?php echo isset($_POST['year']) ? $_POST['year'] : '' ?>" required>
    <br>
    <input type="submit" value="Get Zodiac">
    <input type="button" value="Clear" onclick="document.getElementById('year').value = ''">
</form>

<?php
$zodiac= array("Monkey","Rooster","Dog","Pig","Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Sheep");

if (isset($_POST['year'])) {
    $year = $_POST['year'];
    if ($year > 0) {
        $remainder = $year % 12;
        echo "Your zodiac sign is: " . $zodiac[$remainder];
    } else {
        echo "Please enter a valid year.";
    }
}
?>

<?php include "_footer.php"; ?>
