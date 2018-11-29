@extends('layouts.front')
@section('content')
@include('errors.common')
<table width="50%" align="center" cellspacing="0" cellpadding="4" style="border-collapse: collapse;" rules="none" border="1">
    <tr>
        <td width="100%" >
            @include('layouts.include.register')
        </td>
    </tr>
</table>
@endsection