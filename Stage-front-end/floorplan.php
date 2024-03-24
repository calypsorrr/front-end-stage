<?php
include 'includes/header.php';

$json_data = file_get_contents('data.json');
$data = json_decode($json_data, true);

$x_range = '';
$y_range = '';
$x_origin = '';
$y_origin = '';

foreach ($data['data'] as $item) {
    if ($item['axis'] === 'X range') {
        $x_range = $item['value'];
    } elseif ($item['axis'] === 'Y range') {
        $y_range = $item['value'];
    } elseif ($item['axis'] === 'X origin') {
        $x_origin = $item['value'];
    } elseif ($item['axis'] === 'Y origin') {
        $y_origin = $item['value'];
    }
}

?>


<div class="topbar">
    <div class="topbar-title">Floorplan</div>
</div>
<div class="additional-details">
    <div class="title-details">
        <p class="title-configure">Floorplan </p>
    </div>
</div>
<div class="value-boxes-floorplan">
    <div class="value-box">
        <p>X range</p>
        <input type="text" name="x-range" id="x-range" value="<?php echo $x_range; ?>">
    </div>
    <div class="value-box">
        <p>Y range</p>
        <input type="text" name="y-range" id="y-range" value="<?php echo $y_range; ?>">
    </div>
    <div class="value-box">
        <p>X origin</p>
        <input type="text" name="x-origin" id="x-origin" value="<?php echo $x_origin; ?>">
    </div>
    <div class="value-box">
        <p>Y origin</p>
        <input type="text" name="y_origin" id="y_origin" value="<?php echo $y_origin; ?>">
    </div>
    <div class="upload-box">
        <label for="file_upload" class="upload-label">Choose File</label>
        <input type="file" name="file_upload" id="file_upload" class="upload-input">
    </div>
    <a href="3D.php" class="save-button">
        <div class="save-button-box">
            <span>Submit</span>
            <i class="fas fa-check"></i>
        </div>
    </a>
</div>
