<!--1.함수 기본 구조-->

<?php
    function my_function(){
        echo 'My function was called';
    }

    my_function();
?>

<!--2.html과 함께하는 함수 구조-->
<?php
    function html(){
?>
    My function was called
<?php
    }
    html();
?>
<!-- 3.매개 변수 사용하기-->

<?php
    function create_table1($data){
        echo '<table>';
        reset($data);
        $value = current($data);
        while($value){
            echo "<tr><td>$value</td></tr>";
            $value = next($data);
        }
        echo '</table>';
    }

    $my_data = ['First piece of data','Second piece of data','And the third'];
    create_table1($my_data);

?>

<?php
    function create_table2($data, $header=NULL, $caption=NULL){
        echo '<table>';
        if($caption){
            echo "<caption>$caption</$caption>";
        }
        if($header){
            echo "<tr><td>$header</td></tr>";
        }
        reset($data);
        $value = current($data);
        while($value){
            echo "<tr><td>$value</td></tr>";
            $value = next($data);
        }
        echo '</table>';
    }
    $my_header = 'Data';
    $my_caption = 'Data about something';
    create_table2($my_data, $my_header, $my_caption);
?>

