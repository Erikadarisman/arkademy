<?php
function cetak_gambar($size){
    $tengah = floor($size/2);
    if ($size%2==0) {
        echo "masukkan bilangan ganjil";
    }else {
        for ($i = 0; $i < $size; $i++)
        {
            for ($j = 0; $j < $size; $j++)
            {
                if ($i == 0 || $i == $size - 1)
                {
                    echo(' X ');
                }
                elseif ($j == $tengah)
                {
                    echo(' X ');
                }
                else
                {
                    echo(' = ');
                }
                
            }
        echo("</br>");
        }
    }
    

}
echo "<pre>";
print cetak_gambar(7);
?>
</pre>