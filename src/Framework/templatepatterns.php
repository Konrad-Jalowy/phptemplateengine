<?php 
return [
    [
        "pattern" => '/\{\{\s*(\$.*?)\s*\}\}/',
        "replace" => "<?php echo $1; ?>" 
    ],
    [
        "pattern" => '/\[b\](.*?)\[\/b\]/s',
        "replace" => "<b>$1</b>" 
    ],
    [
        "pattern" => '/@foreach\((.*)\)/',
        "replace" => "<?php foreach($1) : ?>" 
    ],
    [
        "pattern" => '/@endforeach/s',
        "replace" => "<?php endforeach; ?>" 
    ]
    ];