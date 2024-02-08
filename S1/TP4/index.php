<?php

$dir = "./";
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            if ($file !== "." && $file !== ".." && $file !== "assets"){
                                if (is_dir($dir.$file)){
                                    $type="📂";
                                    echo "<a href='$file'><button class='button button1'>$file</button></a><br><br>";
                                }
                            }
                        }
                        closedir($dh);
                    }
                }
?>