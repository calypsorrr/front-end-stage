<?php
include 'includes/header.php';

$json_data = file_get_contents('data.json');
$data = json_decode($json_data, true);

$x_value = '';
$y_value = '';
$z_value = '';

foreach ($data['data'] as $item) {
    if ($item['axis'] === 'X') {
        $x_value = $item['value'];
    } elseif ($item['axis'] === 'Y') {
        $y_value = $item['value'];
    } elseif ($item['axis'] === 'Z') {
        $z_value = $item['value'];
    }
}
?>

<div class="topbar">
    <div class="topbar-title">Configure</div>
</div>
<div class="dashboard">
    <a href="index.php">Dashboard</a>
    <span class="separator"><i class="fas fa-chevron-right"></i></span>
    <a href="details.php">Details</a>
    <span class="separator"><i class="fas fa-chevron-right"></i></span>
    <a href="configure.php" class="current-page">Configure</a>
</div>
<div class="additional-details">
    <div class="title-details">
        <p class="title-configure">Configure: Node 1 </p>
    </div>
</div>
<div class="value-boxes">
    <div class="value-box">
        <p>X-position</p>
        <input type="text" name="x-value" id="x-value" value="<?php echo $x_value; ?>">
    </div>
    <div class="value-box">
        <p>Y-position</p>
        <input type="text" name="y-value" id="y-value" value="<?php echo $y_value; ?>">
    </div>
    <div class="value-box">
        <p>Z-position</p>
        <input type="text" name="z-value" id="z-value" value="<?php echo $z_value; ?>">
    </div>
    <a href="accept.php" class="save-button">
        <div class="save-button-box">
            <span>Save</span>
            <i class="fas fa-check"></i>
        </div>
    </a>
</div>
