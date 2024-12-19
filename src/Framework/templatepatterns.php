<?php 
return [
    [
        "pattern" => '/\{\{\s*(\$.*?)\s*\}\}/',
        "replace" => "<?php echo $1; ?>" 
    ]
    ];