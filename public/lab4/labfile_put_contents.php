<?php
$file = (__DIR__) . DIRECTORY_SEPARATOR . 'sample.txt';
if (!$f = file_exists($file)) exit('Does no exist');

$addword = PHP_EOL . '
New additional dolor sit amet, consectetur adipiscing elit. Morbi pulvinar lacus
non tempor tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et
ultrices posuere cubilia Curae; Nunc varius et diam rutrum viverra. Vestibulum
commodo dapibus tincidunt. Sed a nisl rutrum, pretium lorem eu, euismod diam.
Duis fringilla nibh pretium feugiat mollis. Vestibulum justo massa, lacinia
vitae purus a, tempor iaculis sapien. In scelerisque augue at viverra
faucibus. Nulla ut porttitor dolor. Donec a sagittis enim, nec posuere
nibh. Suspendisse sit amet magna eget lectus ultricies gravida. Praesent
pharetra nisl at faucibus semper. Vivamus molestie nulla eget eros dignissim
faucibus.' . PHP_EOL;

file_put_contents($file, $addword, FILE_APPEND);
