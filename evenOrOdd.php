    <?php
    function evenOrOdd($n){
    if($n === 0) return 'Even';
    if($n === 1) return "Odd";
        return evenOrOdd($n = $n - 2);
    }
   echo  evenOrOdd(8);
    ?>