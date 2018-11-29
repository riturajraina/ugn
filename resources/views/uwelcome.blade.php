@extends('layouts.front')
@section('content')
@include('errors.common')
<table  width="50%" align="center" cellspacing="0" cellpadding="4" style="border-collapse: collapse;height: 50vh;" rules="none" 
    <tr>
        <td width="100%" style="text-align: center;">
            Welcome to UGN!!
            <?php
                //echo '<br>Session User Details : <pre>' . print_r(session('userDetails'), true) . '</pre>';exit;
            ?>
        </td>
    </tr>
</table>
@endsection