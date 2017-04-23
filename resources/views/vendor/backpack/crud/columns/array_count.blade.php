{{-- enumerate the values in an array  --}}
<td>
    <?php
    $array = $entry->{$column['name']};

    // the value should be an array wether or not attribute casting is used
    if (!is_array($array)) {
        $array = json_decode($array, true);
    }
    if ($array && count($array)) {
        if(count($array) <= 1){
          echo count($array).' '.studly_case(str_singular($column['name']));
        }else{
          echo count($array).' '.studly_case(str_plural($column['name']));
        }
    } else {
        echo '-';
    }
    ?>
</td>
