<?php 
return [
    [
        "pattern" => '/\{\{\s*(\$.*?)\s*\}\}/',
        "replace" => "<?php echo $1; ?>" 
    ],
    [
        "pattern" => '/\[b\](.*?)\[\/b\]/s',
        "replace" => "<strong>$1</strong>" 
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
    ],
    [
        'pattern' => '/\[\*\](.*)/',
        'replace' => '<li>$1</li>',
    ],
    [
        'pattern' => '/\[list\](.*?)\[\/list\]/s',
        'replace' => '<ul>$1</ul>',
    ],
    [
        'pattern' => '/\[var\](.*?)\[\/var\]/s',
        'replace' => '<var>$1</var>',
    ],
    [
        'pattern' => '/\[sup\](.*?)\[\/sup\]/s',
        'replace' => '<sup>$1</sup>',
    ],
    [
        'pattern' => '/\[sub\](.*?)\[\/sub\]/s',
        'replace' => '<sub>$1</sub>',
    ],
    [
        'pattern' => '/\[i\](.*?)\[\/i\]/s',
        'replace' => '<em>$1</em>',
    ],
    [
        'pattern' => '/\{\"(.*?)\"\}/',
        'replace' => "<?php echo htmlspecialchars(\"$1\", ENT_QUOTES); ?>"
       
    ],
    [
        'pattern' => '/\[u\](.*?)\[\/u\]/s',
        'replace' => '<u>$1</u>',
    ],
    [
        'pattern' => '/\[s\](.*?)\[\/s\]/s',
        'replace' => '<s>$1</s>',
    ],
    [
        'pattern' => '/\{!!(.*?)!!\}/',
        'replace' => "<?php echo \"$1\"; ?>"
       
    ],
    
    ];