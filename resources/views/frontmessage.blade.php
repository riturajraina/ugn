@extends('layouts.front')
@section('content')
@include('errors.common')
<table  width="50%" align="center" cellspacing="0" cellpadding="4" style="border-collapse: collapse;height: 50vh;" rules="none" 
       border="1">
    <tr>
        <td width="100%" style="text-align: center;">
            <?php
                echo base64_decode($message)
            ?>
        </td>
    </tr>
</table>
@endsection