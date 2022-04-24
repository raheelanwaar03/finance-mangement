<?php

use App\Models\trancation;

function balance($customer_id){
    $positivebalance = trancation::where('sum', 'in')->where('customer_id',$customer_id)->sum('amount');
    $negitivebalance = trancation::where('sum', 'out')->where('customer_id',$customer_id)->sum('amount');

    $balance = $positivebalance - $negitivebalance;

    return $balance;
}
?>