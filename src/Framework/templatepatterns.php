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
    ],
    [
        "pattern" => '/@if\((.*)\)/',
        "replace" => "<?php if ($1) : ?>" 
    ],
    [
        "pattern" => '/@else/',
        "replace" => "<?php else : ?>" 
    ],
    [
        "pattern" => '/@endif/s',
        "replace" => "<?php endif; ?>" 
    ],
    [
        'pattern' => '/\[h1\](.*?)\[\/h1\]/s',
        'replace' => '<h1>$1</h1>',
    ],
    [
        'pattern' => '/\[h2\](.*?)\[\/h2\]/s',
        'replace' => '<h2>$1</h2>',
    ],
    [
        'pattern' => '/\[h3\](.*?)\[\/h3\]/s',
        'replace' => '<h3>$1</h3>',
    ],
    [
        'pattern' => '/\[h4\](.*?)\[\/h4\]/s',
        'replace' => '<h4>$1</h4>',
    ],
    [
        'pattern' => '/\[h5\](.*?)\[\/h5\]/s',
        'replace' => '<h5>$1</h5>',
    ],
    [
        'pattern' => '/\[h6\](.*?)\[\/h6\]/s',
        'replace' => '<h6>$1</h6>',
    ],
    [
        'pattern' => '/\[url\](.*?)\[\/url\]/s',
        'replace' => '<a href="$1">$1</a>',
    ],
    [
        'pattern' => '/\[url\=(.*?)\](.*?)\[\/url\]/s',
        'replace' => '<a href="$1">$2</a>',
    ]
    ];